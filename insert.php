<?php
// include'conn.php';
  $con=mysqli_connect('localhost','root','','ngo1');


if(isset($_POST['save']))
{

	$uname=$_POST['username'];
	$email=$_POST['email'];
	$pwd=$_POST['pass'];
	$mono=$_POST['mono'];
	// echo"$uname"; 
	$q="INSERT INTO `userdata`(`username`,`email`,`password`,`mobilno`) VALUES ('$uname','$email','$pwd','$mono')";

	$query=mysqli_query($con,$q);


}



 ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

     <title>userlist update form</title>



	<title></title>
</head>
<body>
			<div class="col-lg-6 m-auto">
				<form method="POST" >
					<br><br><br><div class="card">
						<div class="card-header bg-dark">
							<h1 class="text-white">User insertdata</h1>
							
						</div>
						<label>Username</label>
						<input type="text" name="username"class="form-control" required/><br>
						

						<label>Email</label>
						<input type="text" name="email" class="form-control" required/><br>


						<label>Password</label>
						<input type="text" name="pass" class="form-control" required/><br>


						<label>Mobile  No.</label>
						<input type="text" name="mono" class="form-control" required/><br>	

						<button class="btn-info" type="done" name ="save">Submit</button><br>				
					</div>
					
				</form>
			</div>
</body>

</html>