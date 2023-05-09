<?php
$signin=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include('connect.php');
    $username=$_POST['username'];
    $email=$_POST['email'];
    $create_password=$_POST['create_password'];
    // $confirm_password=$_POST['confirm_password'];
    $sql="select*from registration where username='$username' and email='$email' and create_password='$create_password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            //echo "Login Successful";   
            $signin=1;      
            session_start();
            $_SESSION['username']=$username;
            header('location:index.php');
        }else{
            //echo"Invalid Data";
            $invalid=1;
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
    <title>Sign-in</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<?php
if($invalid){
    echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Error!</strong>Invalid Data
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
?>
<?php
if($signin){
    echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>SUCCESS!</strong> You Are successfully signed in.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
?>
    <div class="container text-white d-flex  align-items-center" style="height:100vh;">  
        <form action="signin.php" method="post" class="mx-auto d-block w-75 mt-2" autocomplete="off">
        <h2 class="text-center">LOGIN</h2>
         <div class="input-group mt-3 w-50 mx-auto">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Enter Your Username" name="username" required>
        </div> 
        <div class="input-group mt-3 w-50 mx-auto">
            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Enter Your email" name="email" required>
        </div>
        <div class="input-group mt-3 w-50 mx-auto">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Enter Your Password" name="create_password" required>
        </div>
        <div class="input-group">
        <button class="btn btn-success mt-3 mx-auto w-50">Submit</button>
        </div>
        <div class="input-group mt-3 w-50 mx-auto">
        <p>Create a new account? 
        <a href="signup.php" class="mt-3 mx-auto">Sign Up</button></a></p>
        </div>
        </form>
    </div>
    <script src="./dist/js/bootstrap.min.js"></script>
</body>
</html>  