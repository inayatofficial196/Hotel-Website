<?php
    session_start();
    include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/Logo.jpg">
    <link rel="stylesheet" href="Admin-Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <title>ADMIN LOGIN</title>
</head>
<body>

    <div class="account">
        <h2>Admin Login</h2>
        <form action="#" method="POST" align="center">
            <input type="text" name="username" id="username" placeholder="Enter Your Username" required>
            <input type="password" name="password" id="password" placeholder="Enter Your Password" required>
            <input type="submit" value="Login" class="account-btn">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("Location: Admin-Contact.php");
        } else {
            echo "<script> alert('Invalid Username or Password'); </script>";
        }
    }
    $conn->close();
    ?>

</body>
</html>