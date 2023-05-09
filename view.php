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
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
<div class="container">
    <button class="btn btn-info  my-3"><a href="index.php" class=" list-group-item">Upload file or Image</a></button>
<table class="table table-responsive text-white">
  <thead>
    <tr>
      <th>IMAGE</th>
      <th>FILE NAME</th>     
      <th>OPERATIONS</th>
    </tr>
  </thead>
  <tbody> 
		<?php 
		$res=mysqli_query($con," SELECT * from uploadfile");
			while($row=mysqli_fetch_array($res)) 
			{
				echo '<tr> 
                  <td><img src="folder/'.$row['imgfile'].'" height="100" width="100"></td> 
                  <td>'.$row['imgfile'].'</td> 
                  <td>
                  
                  <button class="btn btn-primary"><a href="update.php?updateid='.$row['id'].'" class="text-light list-group-item">Update</a></button>
                  <button class="btn btn-danger"><a href="delete.php?deleteid='.$row['id'].'" class="text-light list-group-item">Delete</a></button>
                  <button class="btn btn-success"><a href="folder/'.$row['imgfile'].'" download class="text-light list-group-item">Download</a></button>
               </td> 
             
				</tr>';
}
 ?>
		
		</tbody>
  </table>
</div>
          

<script src="./assets/dist/js/bootstrap.min.js"></script> 
</body>
</html>