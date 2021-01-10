<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<div class="container">
<?php 
              include 'db.php';
              $id = $_GET['id'];
              $sql = "SELECT * FROM template where id=$id";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      $id = $row["id"];
                      $s1 = $row['s1'];
                      $s2 = $row['s2'];
                      $s3 = $row['s3'];
                      $s4 = $row['s4'];
                      $s5 = $row['s5'];
                  $image1 = $row["image1"];
                  $title1 = $row['title1'];
                  $para1 = $row['para1'];
                  $image2 = $row["image2"];
                  $title2 = $row['title2'];
                  $para2 = $row['para2'];
      ?>
<form method="post" action="update_data.php?id=<?php echo $id ?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Webpage Title</label>
    <input type="text" class="form-control" name="s1" value="<?php echo $s1 ?>">

    <label for="exampleFormControlInput1">Menu 1</label>
    <input type="text" class="form-control" name="s2" value="<?php echo $s2 ?>">

    <label for="exampleFormControlInput1">Menu 2</label>
    <input type="text" class="form-control" name="s3" value="<?php echo $s3 ?>">

    <label for="exampleFormControlInput1"> Menu 3</label>
    <input type="text" class="form-control" name="s4" value="<?php echo $s4 ?>">

    <label for="exampleFormControlInput1">Menu 4</label>
    <input type="text" class="form-control" name="s5" value="<?php echo $s5 ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Main Image for webpage</label>
    <input type="file" class="form-control-file" name="image1" id="exampleFormControlFile1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Title 1</label>
    <input type="text" class="form-control" name="title1" value="<?php echo $title1 ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Main Discription</label>
    <textarea class="form-control" name="para1" id="exampleFormControlTextarea1" rows="7" value=""><?php echo $para1 ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Second Image</label>
    <input type="file" class="form-control-file" name="image2" id="exampleFormControlFile1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Title 2</label>
    <input type="text" class="form-control" name="title2" value="<?php echo $title2 ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mini Discription</label>
    <textarea class="form-control" name="para2" id="exampleFormControlTextarea1" rows="7" value=""><?php echo $para2 ?></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
<?php 
              }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>    
<script type="text/javascript">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</script>
</div>
</html>
