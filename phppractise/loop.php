<?php
include 'connection.php';
$allpages = "SELECT * FROM pages";
//Run query
$result = mysqli_query($connect,$allpages);
?>

<div class="container">
	


 <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Page ID</th>
      <th scope="col">Page Title</th>
      <th scope="col">Page Description</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
	  <tbody>
<?php
if(mysqli_num_rows($result)>0){
    //mysqli_fetch_assoc 
	while ($row = mysqli_fetch_assoc($result)) {
		 ?>
		
 	    

	    <tr>
	      <th scope="row"><?php echo $row["page_id"]; ?></th>
	      <td><?php echo $row["page_title"]; ?></td>
	      <td><?php  echo $row["page_description"]; ?></td>
	      <td><button class="btn btn-primary">Edit</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-danger">Delete</button></td>
	     
	    </tr>
	    
	 
	
		


		
<?php
	}

	?>
	
  

<?php
}
else{
	echo 'error';
}
?>
</tbody>
</table>
</div>









