<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:signin.php');
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
<div class="container  d-flex align-items-center text-white" style="height:89vh;">
    <div class=" m-auto"><img src="./assets/images/png-transparent-the-book-of-magic-logo-angle-stars-heart-thumbnail-removebg-preview.png" alt="" class="mb-3 ms-5" width="200px" height="200px">
    <h1 class="m-auto d-flex align-items-center justify-content-center">WELCOME to our Site  <span class="text-warning ms-2"><?php echo $_SESSION['username']; ?></span></h1>
    </div>  
</div>
<div class="container bg-warning text-white">
     <div class="input-group">
        <a href="logout.php"><button class="btn btn-dark my-3"><i class="fa-solid fa-power-off"></i> LOG OUT</button></a>
     </div>
</div>

<script src="./dist/js/bootstrap.min.js"></script>
</body>
</html>