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
    <link rel="stylesheet" href="Admin-Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>ADMIN Booking Room Record</title>
</head>
<body>

  <nav>
    <ul>
      <li><a href="#"> Home</a></li>
      <li><a href="Admin-About.php">About</a></li>
      <li><a href="Admin-Manager.php">Manager</a></li>
      <li><a href="Admin-Room.php"> Room</a></li>
      <li><a href="Admin-Services.php"> Services</a></li>
      <li><a href="Admin-Contact.php"> Contact Us</a></li>
      <li class="active"><a href="#"> Booking Room Us</a></li>
      <li><a href="Admin-Logout.php"> Logout</a></li>
    </ul>
  </nav>

    <div class="myHead">
        <p>Booking Room RECORDS</p>
    </div>

    <?php
    $query = "SELECT * FROM roombooking ORDER BY upload_date DESC";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    // echo $total . " ";
    ?>

    <div class="myTable">
        <table border="1" cellspacing="0px">
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>Cnic</th>
                <th>PHONE</th>
                <th>RoomNo</th>
                <th>Cheakin Date</th>
                <th>CheakOut Date</th>
                <th>Meassage</th>
                <th>ACTION</th>
            </tr>

            <?php
            if($total != 0) {
                while($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                    <td>".$result['name']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['cnic']."</td>
                    <td>".$result['phone']."</td>
                    <td>".$result['roomno']."</td>
                    <td>".$result['checkin']."</td>
                    <td>".$result['checkout']."</td>
                    <td>".$result['message']."</td>
                    <td><a href='booking-room-Delete.php?id=$result[id]'>
                    <input type='submit' value='Delete' id='delete' onclick='return checkdelete()'></a></td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No Records in the Booking Room.</td></tr>";
            }
            ?>
        </table>
    </div>

    <script>
        function checkdelete(){
            return confirm('Are you sure ! You want to Delete this Record ?');
        }
    </script>

</body>
</html>