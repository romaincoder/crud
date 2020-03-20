<?php
 $con=mysqli_connect('localhost','root','','ngo1');

 if(isset($_POST['username'])){
         
          $uname=$_POST['username'];
          $email=$_POST['email'];
          $pwd=$_POST['pass'];
          $mono=$_POST['mono'];
          $q="select * from userdata";
          $query=mysqli_query($con,$q);
  
}
?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>



<div class="container">
  <div class="col-lg-6 m-auto">
    
        
        <!-- <h4>NGO List</h4> -->
         <h4>User List</h4>
                 
         <table class="table table-striped table-hover table-bordered">
          

          <tr>
           <th>User_ID </th>
           <th>User Name</th>
           <th>Email </th>
           <th>Password</th>
           <th>Moblie No.</th>
           <th>Update</th>                
           <th>Delete</th>
          </tr> 
<?php
            $con=mysqli_connect('localhost','root','','ngo1');
          $q="select * from userdata";
          $query=mysqli_query($con,$q);
          while ($res = mysqli_fetch_array($query))
          {
?>

              <tr>
            <td> <?php echo $res ['u_id'] ?> </td>
            <td> <?php echo $res ['username'] ?> </td>
            <td> <?php echo $res ['email'] ?> </td>
            <td> <?php echo $res ['password'] ?> </td>
            <td> <?php echo $res ['mobilno'] ?> </td>
            <td> 
                <button  class="btn btn-primary btn-s"><a href="update.php?uid=<?php echo $res['u_id'];?>"class="text-white">
                            Update</a> 
                </button> 
            </td>
            <td> 
                <button  class="btn btn-danger btn-s">    
                  <a href="delete.php?uid=<?php echo $res['u_id'];?>"class="text-white">
                           Delete</a> 
                </button> 
            
          </td>
              </tr>
  <?php
         }
  ?>
		</table>    
  </div>
</div>
</body>
</html>