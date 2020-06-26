
<h1 class="text-primary"><i class="fa fa-plus-square"></i> Add Student <small>New</small></h1>
<ol class="breadcrumb">

   <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
   <li><a href="#">Home</a></li>
   <li><a href="#">Library</a></li>
</ol>

<?php


  if(isset($_POST['add-student'])){
  //  echo "<pre>";
  //  print_r($_POST);
  //  print_r($_FILES);
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $city = $_POST['city'];
  $pcontact = $_POST['pcontact'];
  $class = $_POST['class'];

  $picture = explode('.', $_FILES['picture']['name']);
  $picture_ex = end($picture);

 $picture_name = $roll.'.'.$picture_ex;
 $query = "INSERT INTO `student_info`(`name`, `roll`, `class`, `city`, `pcontact`, `photo`)
           VALUES ('$name','$roll','$class','$city','$pcontact','$picture_name')";
 $result = mysqli_query($linnk,$query);

 if($result){
   $success = "Data Insert Success!";
   move_uploaded_file($_FILES['picture']['tmp_name'],'student_images/'.$picture_name);
 } else{
   $error = "Wrong";
 }
  }
?>
  <div class="row">
    <?php if(isset($success)){ echo '<p class="alert alert-success col-sm-6">'.$success.'</p>';} ?>

    <?php if(isset($error)){ echo '<p class="alert alert-danger col-sm-6">'.$error.'</p>';} ?>

  </div>

<div class="row">
  <div class="col-sm-6">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Student Name</label>
        <input class="form-control" type="text" name="name" placeholder="Student Name" id="name" required="";>
      </div>

      <div class="form-group">
        <label for="roll">Student Roll</label>
        <input class="form-control" type="text" name="roll" placeholder="Roll" id="roll" pattern="[0-9]{6}" >
      </div>



      <div class="form-group">
        <label for="city">City</label>
        <input class="form-control" type="text" name="city" placeholder="City" id="city">
      </div>

      <div class="form-group">
        <label for="pcontact">P_contact</label>
        <input class="form-control" type="text" name="pcontact" placeholder="01****" id="pcontact" pattern="01[3|5|6|7|8|9][0-9]{8}">
      </div>

      <div class="form-group">
        <label for="class">Class</label>
        <select id="class" class="form-control" name="class">
          <option value="">Select</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>

      <div class="form-group">
        <label for="picture">Picture</label>
        <input  type="file" name="picture" id="picture">
      </div>

      <div class="form-group">
          <input type="submit" name="add-student" value="Add student" class="btn btn-primary pull-right">
      </div>

    </form>

  </div>

</div>
