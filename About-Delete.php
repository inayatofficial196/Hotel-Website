<?php
include('Connection.php');
$cid = $_GET['id'];
$query = "DELETE FROM about WHERE id = '$cid'";
$data = mysqli_query($conn, $query);
if($data) {
    echo "<script> alert('Record Deleted Successfully!'); </script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url= http://localhost/Hotel/Admin-About.php"/>
    <?php
} else {
    echo "Failed to Delete";
}
?>