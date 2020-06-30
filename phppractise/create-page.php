

<?php
include 'views/header.php';
include 'connection.php';
$pagetitle = $_POST['page-title'];
$pagedes  = $_POST['page-description'];
echo "<br> $pagetitle";
echo "<br> $pagedes";

$insert = "INSERT INTO pages(page_title,page_description) VALUES ('$pagetitle','$pagedes')";

if (mysqli_query($connect,$insert)) {
echo "Data Inserted";
}
else{

	echo "there is an error";
}
include 'views/footer.php';
?>
