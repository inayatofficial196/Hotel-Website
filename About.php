<?php include ('Connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/Logo.jpg">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="Responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>ABOUT US</title>
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
          <li class="active"><a href="#"> About Us</a></li>
          <li><a href="Room.php"> Room</a></li>
          <li><a href="Services.php"> Services</a></li>
          <li><a href="Contact.php"> Contact Us</a></li>
        </ul>
      </nav>

    <section class="about-us">
    <div class="about-text">
      <h2>Welcome To</h2>
      <h1>ECO FOOD PAKISTAN ISLAMABAD HOTEL</h1>
      <p>Nestled in the heart of Islamabad, ECO FOOD PAKISTAN ISLAMABAD HOTEL is a culinary haven and a cozy retreat rolled into one. Immerse yourself in the delightful fusion of flavors and aromas, as our restaurant takes you on a gastronomic journey through the diverse and delectable cuisines of Pakistan.
      Our hotel is not just a place to stay; it's a place to savor the authentic tastes of Pakistan, from mouthwatering biryanis to succulent kebabs. ECO FOOD PAKISTAN ISLAMABAD HOTEL prides itself on its commitment to sustainability and eco-friendly practices, ensuring your stay is not only enjoyable but also responsible. With a blend of modern amenities and traditional charm, our hotel offers a comfortable and inviting atmosphere for both leisure and business travelers. Impeccable service and warm hospitality are the cornerstones of our establishment. Our staff is dedicated to making your stay memorable.
      Whether you're here for business or leisure, our convenient location allows easy access to the city's key attractions, making your visit a breeze. For those looking to host events, our versatile banquet facilities are ideal for weddings, conferences, and other special occasions.
      Our commitment to quality and sustainability is reflected in every aspect of our hotel, from our eco-friendly practices to our locally sourced ingredients.
      ECO FOOD PAKISTAN ISLAMABAD HOTEL is your gateway to experiencing the rich culinary heritage of Pakistan while enjoying a comfortable and environmentally conscious stay. Come and savor the flavors of Pakistan with us!</p>
      <button class="contact-btn"><a href="Contact.php">Contact Us</a></button>
    </div>
    <?php
    $query = "SELECT * FROM about ORDER BY upload_date DESC LIMIT 1";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total != 0) {
      while($result = mysqli_fetch_assoc($data)) {
        echo'<div class="about-img">
              <img src="'.$result['image_path'].'">
            </div>';
        }
      } else {
        echo "Hotel Image Not Uploaded Yet.";
      }
    ?>
    </section>

    <div class="container">
      <?php
        $query = "SELECT * FROM manager ORDER BY upload_date DESC LIMIT 1";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
        if($total != 0) {
          while($result = mysqli_fetch_assoc($data)) {
            echo'<section class="manager">
              <img src="'.$result['image_path'].'">
            </section>';
          }
        } else {
          echo "Manager Image Not Uploaded Yet.";
        }
      ?>
        <section class="manager">
            <h2>Manager Javid Ali Khan</h2>
            <p>Welcome to [Your Hotel Name], where excellence meets hospitality. As the Hotel and Restaurant Manager, I am delighted to introduce you to our exquisite establishment, a haven of comfort, culinary delights, and unparalleled service.
            Nestled in the heart of [Location], our hotel offers a perfect blend of modern luxury and timeless charm. Our well-appointed rooms and suites are designed to ensure your utmost comfort, with elegant decor and top-notch amenities. Whether you're a business traveler, a romantic couple, or a family on vacation, we have the perfect accommodation for you.
            At [Your Hotel Name], dining is a memorable experience. Our restaurant features a diverse menu, curated by our talented chefs, serving both local and international cuisine. You can also unwind and savor expertly crafted cocktails in our inviting bar.
            Our dedicated and attentive staff is committed to making your stay exceptional. From concierge services to event planning, we are here to meet your every need. Whether you're here for business meetings, special occasions, or a relaxing getaway, we have the facilities and expertise to make it unforgettable.
            Explore the local attractions, unwind by the pool, or indulge in a spa treatment; we offer an array of activities to enhance your stay. We look forward to welcoming you to [Your Hotel Name] and ensuring your stay is a truly memorable one.
            Experience the difference at [Your Hotel Name]. Your comfort and satisfaction are our top priorities.</p>
        </section>
    </div>

    <footer class="site-footer">
        <div class="container-fluid" style="background-color: black; padding: 30px;">
          <div class="row">
            <div class="col-md-4 text-white">
              <h4>Quick Links</h4>
              <ul class="list-unstyled">
                <li><a href="index.html" class="text-white"><i class="fa-solid fa-arrow-right-long"></i> Home</a></li>
                <li><a href="#" class="text-white"><i class="fa-solid fa-arrow-right-long"></i> About Us</a></li>
                <li><a href="Room.html" class="text-white"><i class="fa-solid fa-arrow-right-long"></i> Room</a></li>
                <li><a href="Services.html" class="text-white"><i class="fa-solid fa-arrow-right-long"></i> Services</a></li>
                <li><a href="Contact.html" class="text-white"><i class="fa-solid fa-arrow-right-long"></i> Contact Us</a></li>
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