<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: Admin-Login.php");
    die();
}
include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/Logo.jpg">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="admin-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>ADMIN SERVICES</title>
</head>
<body>

  <nav>
    <ul>
      <li><a href="#"> Home</a></li>
      <li><a href="Admin-About.php">About</a></li>
      <li><a href="Admin-Manager.php">Manager</a></li>
      <li><a href="Admin-Room.php"> Room</a></li>
      <li class="active"><a href="#"> Services</a></li>
      <li><a href="Admin-Contact.php"> Contact Us</a></li>
      <li><a href="Admin-booking-room.php"> Booking Room Us</a></li>
      <li><a href="Admin-Logout.php"> Logout</a></li>
    </ul>
  </nav>

    <div class="myHead">
        <p>SERVICES RECORDS</p>
    </div>

    <div class="newForm">
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" required>
            <input type="text" name="fname" placeholder="Food Name" required>
            <input type="text" name="fprice" placeholder="Food Price" required>
            <textarea name="fdetail" class="myTextarea" placeholder="Food Details" required></textarea>
            <input type="submit" name="submit" value="Upload" class="myButton">
        </form>
    </div>

    <?php
        if((isset($_POST['submit']))) {
            $fname = $_POST['fname'];
            $fprice = $_POST['fprice'];
            $fdetail = $_POST['fdetail'];
            $image = $_FILES['image']['name'];
            $image_path = 'Uploads/' . $image;
            move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
            if(!empty($fname) && !empty($fprice) && !empty($fdetail) && !empty($image_path)) {
                $query = "INSERT INTO services (image_path, food_name, food_price, food_detail) VALUES ('$image_path', '$fname', '$fprice', '$fdetail')";
            }
            if(mysqli_query($conn, $query)) {
                echo "<script> alert('Services Uploaded Successfully!'); </script>";
            } else {
                echo "Services Failed to Upload." . $conn->error;
            }
        }
    ?>

    <?php
    $query = "SELECT * FROM services ORDER BY upload_date DESC";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    // echo $total . " ";
    ?>

    <div class="myTable">
        <table border="1" cellspacing="0px">
            <tr>
                <th>FOOD IMAGE</th>
                <th>FOOD NAME</th>
                <th>FOOD PRICE</th>
                <th>FOOD DETAILS</th>
                <th>ACTION</th>
            </tr>

            <?php
            if($total != 0) {
                while($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                    <td><img src='".$result['image_path']."' style='width: 100px; height: 100px; object-fit: contain;'></td>
                    <td>".$result['food_name']."</td>
                    <td>".$result['food_price']."</td>
                    <td>".$result['food_detail']."</td>
                    <td><a href='Services-Delete.php?id=$result[id]'>
                    <input type='submit' value='Delete' id='delete' onclick='return checkdelete()'></a></td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No Records in the Services.</td></tr>";
            }
            ?>
        </table>
    </div>

    <script>
        function checkdelete(){
            return confirm('Are you sure ! You want to Delete this Record ?');
        }
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>
</html>