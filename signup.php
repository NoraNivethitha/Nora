<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include('connect.php');
    $username=$_POST['username'];
    $email=$_POST['email'];
    $create_password=$_POST['create_password'];
    // $confirm_password=$_POST['confirm_password'];
    $sql="select*from registration where username='$username'";
    $result=mysqli_query($con,$sql);
     if($result){
        $num=mysqli_num_rows($result);  
        if($num>0){
            // echo"User Already Exist";
            $user=1;
        }else{
            $sql="insert into `registration` (username,email,create_password) values ('$username','$email','$create_password')";
            $result=mysqli_query($con,$sql);
            if($result){
                // echo"signup successfully";
            $success=1;      
            }else{
                die(mysqli_error($con));
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<?php
if($user){
    echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Ohh no sorry!</strong> User Already Exist.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
?>
<?php
if($success){
    echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>SUCCESS!</strong> You Are successfully signed up.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
?>
    <div class="container d-flex text-white align-items-center" style="height:100vh;">
        <form action="signup.php" method="post" class="mx-auto d-block w-75 mt-2" autocomplete="off">
        <h2 class="text-center">CREATE A NEW ACCOUNT</h2>
        <div class="input-group mt-3 w-50 mx-auto">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Enter Your Username" name="username" required>
        </div>
        <div class="input-group mt-3  w-50 mx-auto">
            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            <input type="mail" class="form-control" placeholder="Enter Your Email" name="email"required>
        </div>
        <div class="input-group mt-3  w-50 mx-auto">
            <span class="input-group-text"><i class="fa fa-key"></i></span>
            <input type="password" class="form-control" placeholder="Create Password" name="create_password" required>
        </div>
        <!-- <div class="input-group mt-3  w-50 mx-auto">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Confirm Password" name="Confirm_password" required>
        </div> -->
        <div class="input-group">     
        <button class="btn btn-primary mt-3 mx-auto w-50">Sign Up</button>
        </div>
        <div class="input-group mt-3 w-50 mx-auto">
        <p>Already have an account? 
        <a href="signin.php" class="mt-3 mx-auto">Sign in</button></a></p>
        </div>
        </form>    
    </div>


<script src="./dist/js/bootstrap.min.js"></script>
</body>
</html>