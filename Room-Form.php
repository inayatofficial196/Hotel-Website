<?php include('Connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodePel">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/Logo.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>BOOKING ROOM</title>
</head>
<body>

<div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <img src="Images/Logo.jpg" style="width: 90px; height: 90px; object-fit: contain;">
            </div>
            <div class="col-3 pt-4">
                <span class="pt-4"><b>Email:</b> ecofood125@gmail.com</span>
            </div>
            <div class="col-3 pt-4">
                <span><b>Phone:</b> +923339966125</span>
            </div>
            <div class="col-lg-3 social-links">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <ul>
            <li><a href="index.php"> Home</a></li>
            <li><a href="About.php"> About Us</a></li>
            <li class="active"><a href="#"> Room</a></li>
            <li><a href="Services.php"> Services</a></li>
            <li><a href="Contact.php"> Contact Us</a></li>
        </ul>
    </nav>

  <main class="cd__main">
    <form class="booking-form" action="#" method="post">
      <div class="elem-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
      </div>
      <div class="elem-group">
        <label for="email">Your E-mail</label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
      </div>
      <div class="elem-group">
        <label for="phone">Your Phone</label>
        <input type="tel" id="phone" name="phone" placeholder="+923-00-0000000" required>
      </div>
      <div class="elem-group">
        <label for="cnic">Your CNIC</label>
        <input type="tel" id="cnic" name="cnic" placeholder="00000-0000000-0" required>
      </div>
      <div class="elem-group">
        <label for="roomno">Room Number</label>
        <input type="tel" id="roomno" name="roomno" placeholder="Select Your Room Number" required>
      </div>
      <div class="elem-group inlined">
        <label for="checkin-date">Check-in Date</label>
        <input type="date" id="checkin-date" name="checkin" required>
      </div>
      <div class="elem-group inlined">
        <label for="checkout-date">Check-out Date</label>
        <input type="date" id="checkout-date" name="checkout" required>
      </div>
      <div class="elem-group">
        <label for="message">Anything Else?</label>
        <textarea id="message" name="message" placeholder="Tell us anything else that might be important." required></textarea>
      </div>
      <button type="submit" name="submit">Book The Room</button>
    </form>
  </main>


  <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $cnic = $_POST['cnic'];
            $phone = $_POST['phone'];
            $roomno = $_POST['roomno'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $message = $_POST['message'];
         }
         if(!empty($name) && !empty($email) && !empty($cnic) && !empty($phone) && !empty($roomno) && !empty($checkin) && !empty($checkout) && !empty($message)) {
            $sql = "INSERT INTO roombooking(name, email, cnic, phone, roomno,checkin,checkout,message) VALUES ('$name', '$email', '$cnic', '$phone', '$roomno','$checkin','$checkout', '$message')";
            $result = mysqli_query($conn, $sql);
            if($result) {
              echo "<script> alert('Your Room Has Been Done.'); </script>";
            } else {
              echo "<script> alert('Sorry Your Message Can't Sent.'); </script>";
            }
        } else {
            //  echo "<script> alert('Please fill in all the required fields.'); </script>";
        }
        ?>

</body>
</html>