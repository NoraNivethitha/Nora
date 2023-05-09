<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select*from uploadfile where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$imgfile=$row['imgfile'];
if(isset($_POST['submit'])){
    $imgfile=$_POST['imgfile'];
$sql="update  uploadfile set id=$id,imgfile='$imgfile' where id=$id";
$result= mysqli_query($con,$sql);
if($result){
    echo "<br>Data updated successfully";
    header('location:view.php');
}else{
    die(mysqli_error($con));
}
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="container  p-3 text-white text-center d-flex align-items-center" style="height:100vh;">
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off" class="mx-auto d-block w-75 mt-2">
        <h3 class="fw-bolder">UPDATE/CHANGE FILE HERE</h3>
        <div class="my-3 w-50 mx-auto d-block">
             <!-- <label for="formFile" class="form-label fs-5">imgfile</label> -->
             <input class="form-control" name="imgfile" id="imgfile" type="file" value=<?php echo $imgfile;?> required>
        </div>
        <button class="btn btn-lg btn-success mt-3" name="submit">submit</button>
    </form>   
    </div>

    <script src="./dist/js/bootstrap.min.js"></script>
</body>
</html>