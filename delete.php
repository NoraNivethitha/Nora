<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
}
$sql="delete from uploadfile where id=$id";
$result=mysqli_query($con,$sql);
if($result){
    // echo"deleted successfully";
    header('location:view.php');
}else{
    die(mysqli_error($con));
}
?>