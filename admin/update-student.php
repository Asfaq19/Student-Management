
<h1 class="text-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update Student <small>New</small></h1>
<ol class="breadcrumb">

   <li  class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
   <li ><a href="index.php?page=all-students"><i class="fa fa-pencil-square-o"></i>All Students</a></li>

</ol>
<?php
  $id = base64_decode($_GET['id']);
  $db_data = mysqli_query($linnk,"SELECT * FROM `student_info` WHERE `id` = '$id'") ;
  $db_row = mysqli_fetch_assoc($db_data);
  //print_r($db_row);

  if(isset($_POST['update-student'])){
  //  echo "<pre>";
  //  print_r($_POST);
  //  print_r($_FILES);
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $city = $_POST['city'];
  $pcontact = $_POST['pcontact'];
  $class = $_POST['class'];


 $query = "UPDATE `student_info` SET `name`='$name',`roll`='$roll',`class`='$class',`city`='$city',`pcontact`='$pcontact' WHERE `id` = '$id'";
 $result = mysqli_query($linnk,$query);
 if($result){
   header('Location:index.php?page=all-students');
 }
 

  }

 ?>

<div class="row">
  <div class="col-sm-6">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Student Name</label>
        <input class="form-control" value="<?= $db_row['name']; ?>"  type="text" name="name" placeholder="Student Name" id="name" required="";>
      </div>

      <div class="form-group">
        <label for="roll">Student Roll</label>
        <input class="form-control" value="<?= $db_row['roll']; ?>" type="text" name="roll" placeholder="Roll" id="roll" pattern="[0-9]{6}" >
      </div>

      <div class="form-group">
        <label for="city">City</label>
        <input class="form-control" value="<?= $db_row['city']; ?>" type="text" name="city" placeholder="City" id="city">
      </div>

      <div class="form-group">
        <label for="pcontact">P_contact</label>
        <input class="form-control" type="text" value="<?= $db_row['pcontact']; ?>" name="pcontact" placeholder="01****" id="pcontact" pattern="01[3|5|6|7|8|9][0-9]{8}">
      </div>

      <div class="form-group">
        <label for="class">Class</label>
        <select id="class" class="form-control" name="class" required="">
          <option value="">Select</option>
          <option <?php echo  $db_row['class'] == '1' ? 'selected=""':''; ?> value="1">1</option>
          <option <?php echo  $db_row['class'] == '2' ? 'selected=""':''; ?> value="2">2</option>
          <option <?php echo  $db_row['class'] == '3' ? 'selected=""':''; ?> value="3">3</option>
          <option <?php echo  $db_row['class'] == '4' ? 'selected=""':''; ?> value="4">4</option>
          <option <?php echo  $db_row['class'] == '5' ? 'selected=""':''; ?> value="5">5</option>
        </select>
      </div>



      <div class="form-group">
          <input type="submit" name="update-student" value="Update student" class="btn btn-primary pull-right">
      </div>

    </form>

  </div>

</div>
