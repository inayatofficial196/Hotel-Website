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
    <title>ADMIN MANAGER</title>
</head>
<body>

  <nav>
    <ul>
      <li><a href="#"> Home</a></li>
      <li><a href="Admin-About.php">About</a></li>
      <li class="active"><a href="#">Manager</a></li>
      <li><a href="Admin-Room.php"> Room</a></li>
      <li><a href="Admin-Services.php"> Services</a></li>
      <li><a href="Admin-Contact.php"> Contact Us</a></li>
      <li><a href="Admin-booking-room.php"> Booking Room</a></li>
      <li><a href="Admin-Logout.php"> Logout</a></li>
    </ul>
  </nav>

    <div class="myHead">
        <p>Manager Image Upload</p>
    </div>

    <div class="newForm">
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/*" required>
            <input type="submit" name="Submit" value="Upload" class="myButton">
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $image = $_FILES['image']['name'];
        $image_path = 'Uploads/' . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
        $query = "INSERT INTO manager (image_path) VALUES ('$image_path')";
        if(mysqli_query($conn, $query)) {
            echo "<script> alert('Manager Image Uploaded Successfully!'); </script>";
        } else {
            echo "Manager Image Failed to Upload." . $conn->error;
        }
    }
    ?>

    <div class="myTable">
        <table border="1" cellspacing="0px">
            <tr>
                <th>IMAGE</th>
                <th>Action</th>
            </tr>

            <?php
            $query = "SELECT * FROM manager ORDER BY upload_date DESC";
            $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><img src='" . $row['image_path'] . "' style='width: 100px; height: 100px; object-fit: contain;'></td>";
                    echo "<td><a href='Manager-Delete.php?id=$row[id]'>
                    <input type='submit' value='Delete' id='delete' onclick='return checkdelete()'></a>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No Manager Image Available.</td></tr>";
            }
            ?>
        </table>
    </div>

    <script>
        function checkdelete(){
            return confirm('Are you sure ! You want to Delete this Post ?');
        }
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>
</html>