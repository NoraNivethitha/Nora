<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <button class="btn btn-info  my-3"><a href="user.php" class=" list-group-item"> Add User</a></button>
<table class="table table-responsive">
  <thead>
    <tr>
      <th>SI.NO</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>MOBILE NUMBER</th>
      <th>PASSWORD</th>
      <th>OPERATIONS</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql="select*from crud";
$result=mysqli_query($con,$sql);
if($result){
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        $mobile=$row['mobile'];
        echo '<tr>
                <th>'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$password.'</td>
                <td>
                <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light list-group-item">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light list-group-item">Delete</a></button>
                </td>
          
      </tr>';
    }
}
    ?>
    
  </tbody>
</table>
</div>

<script src="./dist/js/bootstrap.min.js"></script> 
</body>
</html>