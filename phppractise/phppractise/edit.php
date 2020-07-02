<?php
include 'views/header.php';
 
include 'connection.php';

$id = $_REQUEST['page_id'];

$edit = "SELECT * FROM pages where page_id = $id";
$result = mysqli_query($connect,$edit);
 
$row = mysqli_fetch_assoc($result);
//isset function by default function of php
//is button(update) pr hit ho phr data update kry ga
if(isset($_POST['update'])){
$pagetitle = $_POST['page-title'];
$pagedes = $_POST['page-description'];

$update = "UPDATE pages SET page_title ='$pagetitle', page_description ='$pagedes' WHERE page_id = $id";

if (mysqli_query($connect,$update)) {
	echo "Data Updates";

}

else
{
	echo "error";
}


}
?>
<div class="container">
      <form action="" method="post" name="mydata">
      <div class="form-group">
        <label for="page_title">Page Title</label>
        <input type="text" name="page-title" class="form-control" id="page_title" value="<?php echo $row['page_title'];?>">

      </div>

  
    <div class="form-group">
        <label for="page_des">Page Description</label>
        <textarea class="form-control" name="page-description" id="page_description" rows="3"><?php echo $row['page_description'];?></textarea>
    </div>

    <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
</div>

<?php
include 'views/footer.php';

?>