<?php
include('../includes/connect.php');
if(isset($_POST['insert_brand'])){
  $brand_title=$_POST['brand_title'];
  //select data from database

  $select_query="Select * from `brands` where brand_title='$brand_title'";
  $result_select=mysqli_query($conn, $select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('This brand present inside in the database.')</script>";
  }
  else{

  $insert_query="Insert into `brands` (brand_title) values ('$brand_title') ";
  $result=mysqli_query($conn,$insert_query);
  if($result){
    echo "<script>alert('Brand has been inserted successfully')</script>";
  }
}
}
?>


<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2 mt-4">
<div class="input-group w-50 m-auto mb-4">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title"  placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1">
</div>

<div class="input-group w-50  m-auto">
 
  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand"  value="Insert Brands" 
  aria-label="Username" aria-describedby="basic-addon1" class="btn btn-info px-3 mb-3">

</div>
</form>