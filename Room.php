<?php include('Connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/Logo.jpg">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="Responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>ROOMS</title>
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

    <div class="room-container">
    <?php
    $query = "SELECT * FROM room ORDER BY upload_date DESC";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total != 0) {
      while($result = mysqli_fetch_assoc($data)) {
          echo'<div class="room-box">
            <img src="'.$result['image_path'].'">
            <div class="room-info">
              <h3>'.$result['room_no'].'</h3>
              <p>'.$result['room_details'].'</p>
              <a href="Room-Form.php" class="btn-room">Book Now</a>
            </div>
          </div>';
        }
      }
    ?>
    </div>

    <footer class="site-footer">
        <div class="container-fluid" style="background-color: black; padding: 30px;">
          <div class="row">
            <div class="col-md-4 text-white">
              <h4>Quick Links</h4>
              <ul class="list-unstyled">
                <li><a href="index.php" class="text-white"><i class="fa-solid fa-arrow-right-long"></i> Home</a></li>
                <li><a href="About.php" class="text-white"><i class="fa-solid fa-arrow-right-long"></i> About Us</a></li>
                <li><a href="#" class="text-white"><i class="fa-solid fa-arrow-right-long"></i> Rooms</a></li>
                <li><a href="Services.php" class="text-white"><i class="fa-solid fa-arrow-right-long"></i> Services</a></li>
                <li><a href="Contact.php" class="text-white"><i class="fa-solid fa-arrow-right-long"></i> Contact Us</a></li>
              </ul>
            </div>
  
            <div class="col-md-4 text-white">
              <h4>Contact Us</h4>
              <address>
                <i class="fa-solid fa-arrow-right-long"></i><b title="Location"> Location:</b> City Sowari District Buner <br>
                <i class="fa-solid fa-arrow-right-long"></i><b title="Email"> Email:</b> ecofood125@gmail.com <br>
                <i class="fa-solid fa-arrow-right-long"></i><b title="Phone"> Phone:</b> +923339966125 <br>
              </address>
            </div>
  
            <div class="col-md-4 text-white">
              <h4>Follow Us</h4>
              <ul class="footer-social">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>  
          </div>
  
        <div class="row">
          <div class="col-md-12 webmaster">
            <p class="text-center text-white">&copy; 2023 All rights reserved. Designed By
            <a href="https://inayatwebmaster.000webhostapp.com/">WEBMASTER</a></p>
          </div>
        </div>
      </div>
    </footer>

</body>
</html>