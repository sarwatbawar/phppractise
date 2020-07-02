<?php
include 'connection.php';

$id = $_REQUEST['page_id'];//get id from url

$delete = "DELETE FROM pages WHERE page_id = $id";
$result=mysqli_query($connect,$delete);
Header("location:views/all-pages.php");//by default header fuction when page reload then it will be directly link to the all pages 
?>