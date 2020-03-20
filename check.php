<?php
// include'conn.php';
  $con=mysqli_connect('localhost','root','','ngo1');



	$uname=$_POST['username'];
	$email=$_POST['email'];

	$q="select * from userdata1";
	// $q="INSERT INTO `userdata1`(`username`,`email`,`password`,`mobilno`) VALUES ('$uname','$email')";

	$query=mysqli_query($con,$q);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>
<body>
		 <div class="container">
  <div class="row color-red">
    
        
        <!-- <div class="col-md-12"> -->
        <h4>Bootstrap Snipp for Datatable</h4>
        <div class="table-responsive">

                 
              <table id="mytable" class="table table-bordred table-striped">
                   
      <thead>
                   
      
            <!-- <th>User_ID </th> -->
            <th> Username </th>
            <th> Email </th>
           <!--  <th> Password </th>
            <th> Mobile No. </th> -->
            
            <th>Update</th>                
            <th>Delete</th>
                   </thead>
    <tbody>
    
    <tr>
 				
</body>
</html>