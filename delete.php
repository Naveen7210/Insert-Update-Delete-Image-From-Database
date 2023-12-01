<?php
include 'dbconfig.php';
 $id = $_GET['id'];
mysqli_query($con,"DELETE FROM `image` WHERE id=" .$_GET['delete_id']);

header('location:index.php');

?>