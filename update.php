<?php
include 'header.php'
?>
<div class="card-body">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" value="Diya" id="name" aria-describedby="emailHelp" placeholder="Enter name" name=""name>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Roll_no</label>
    <input type="text" class="form-control" value="1171" id="exampleInputPassword1" placeholder="Enter Roll_no." name="roll_no">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Course</label>
    <input type="text" class="form-control" value="B.Tech." id="exampleInputPassword1" placeholder="Enter Course" name="course">
  </div>
 
 
  <button type="submit" class="btn btn-primary">Update</button>
  <button type="submit" class="btn btn-primary">Delete</button>
  <a class="btn btn-primary" href="index.php">Go-Back</a>
</form>
</div>
<?php
include 'footer.php'
?>