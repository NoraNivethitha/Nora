<?php
$con=new mysqli('localhost','root','nora2213','drive');

if(isset($_POST['insert'])){
$imgfile=$_FILES['imgfile']['name'];
$tmp_img=$_FILES['imgfile']['tmp_name'];
$folder="folder/";
// if($imgfile==''){
//     echo"<script>alert('please Fill all fields')</script>";
//     exit();
// }else{
    move_uploaded_file($tmp_img,$folder.$imgfile);
    $sql="insert into uploadfile (imgfile) values ('$imgfile')";
    $result= mysqli_query($con,$sql);
    if($result){
    // echo "<script>alert('Successfully Inserted')</script>";
   
    header('location:view.php');
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="container p-3 text-white text-center  d-flex  align-items-center" style="height:100vh;"> 
    <form action="" method="POST" enctype="multipart/form-data" class="mx-auto d-block w-75 mt-2">
    <h3 class="fw-bolder">UPLOAD A NEW FILE HERE</h3>
    <div class=" my-3 w-50 mx-auto d-block">
             <!-- <label for="formFile" class="form-label fs-5">imgfile</label> -->
             <input class="form-control" name="imgfile" type="file" required>
        </div>  
    <button type="submit" class="bg-warning mt-3 text-dark col-sm-3 py-2" name="insert" value="insert">UPLOAD</button>
    </form> 
</div>  
<script src="./assets/dist/js/bootstrap.min.js"></script>
</body>
</html>