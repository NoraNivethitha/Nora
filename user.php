<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
$sql="insert into crud (name,email,password,mobile) values ('$name','$email','$password','$mobile')";
$result= mysqli_query($con,$sql);
if($result){
    // echo "<br>Data inserted successfully";
    header('location:display.php');
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
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="" method="post" autocomplete="off">
        <div class="mt-3">
             <label for="Name" class="form-label">Your Name</label>
             <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name">
        </div>
        <div class="mt-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email">
        </div>
        <div class="mt-3">
            <label for="mobile" class="form-label">Mobile Number</label>
            <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter Your Mobile Number">
        </div>
        <div class="mt-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Your Password">
        </div>
   
        <button class="btn btn-lg btn-success mt-3" name="submit">submit</button>
    </form>   
    </div>

    <script src="./dist/js/bootstrap.min.js"></script>
</body>
</html>