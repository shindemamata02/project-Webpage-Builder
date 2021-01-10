<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<div class="container">
<div class = "page-header p-3 text-center">
   <h1>
      Add New Template Here 
   </h1>
</div>
<form method="post" action="insert_template.php" enctype="multipart/form-data">
  <div class="form-group">
      <label for="inputState">Choose Template Option</label>
      <select id="inputState" class="form-control" name="template">
        <option selected value="1">Business</option>
        <option value="2">Fashion and design</option>
        <option value="3">Hotel</option>
        <option value="4">Food</option>
      </select>
    </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Navbar Menu 1</label>
    <input type="text" class="form-control" name="s1">

    <label for="exampleFormControlInput1">Navbar Menu 2</label>
    <input type="text" class="form-control" name="s2">

    <label for="exampleFormControlInput1">Navbar Menu 3</label>
    <input type="text" class="form-control" name="s3">

    <label for="exampleFormControlInput1">Navbar Menu 4</label>
    <input type="text" class="form-control" name="s4">

    <label for="exampleFormControlInput1">Navbar Menu 5</label>
    <input type="text" class="form-control" name="s5">
  </div>


  <div class="form-group">
    <label for="exampleFormControlFile1">Image 1</label>
    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Title 1</label>
    <input type="text" class="form-control" name="title1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Paragraph 1</label>
    <textarea class="form-control" name="para1" id="exampleFormControlTextarea1" rows="7" value=""></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Image 2</label>
    <input type="file" class="form-control-file" name="image2" id="exampleFormControlFile1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Title 2</label>
    <input type="text" class="form-control" name="title2">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Paragraph 2</label>
    <textarea class="form-control" name="para2" id="exampleFormControlTextarea1" rows="7" value=""></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Insert</button>
</form>  
<script type="text/javascript">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</script>
</div>
</html>
