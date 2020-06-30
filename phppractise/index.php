
<?php
 include 'views/header.php';
?>

  <div class="container">
      <form action="create-page.php" method="post">
      <div class="form-group">
        <label for="page_title">Page Title</label>
        <input type="text" name="page-title" class="form-control" id="page_title" placeholder="Page Title">
      </div>

  
    <div class="form-group">
        <label for="page_description">Page Description</label>
        <textarea class="form-control" name="page-description" id="page_description" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  <?php
 include 'views/footer.php';
?>