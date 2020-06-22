<?php
 include 'db_conn.php' ;

 if(isset($_POST['submit'])){
 	$username = mysqli_real_escape_string($sql, $_POST['username']);
	$email = mysqli_real_escape_string($sql, $_POST['email']);
	$mobile = mysqli_real_escape_string($sql, $_POST['mobile']);
	$password = mysqli_real_escape_string($sql, $_POST['password']);
	$cpassword = mysqli_real_escape_string($sql, $_POST['cpassword']);


	$pass= password_hash($password, PASSWORD_BCRYPT);
	$cpass= password_hash($cpassword, PASSWORD_BCRYPT);

	$emailquery = "select * from registration where email='$email' ";
	$query =mysqli_query($sql, $emailquery);

	$email_count = mysqli_num_rows($query);

	  if($email_count>0){
	  	echo "email already exits";
	  }else{
	  	if($password === $cpassword){
	  		$insertquery = "insert into registration(username,email,mobile,password,cpassword) 
	  		values('$username','$email','$mobile','$pass','$cpass')";

	  		$iquery = mysqli_query($sql, $insertquery);
	  		 if($iquery){
  	    		?>
  				<script>
  					alert("data submit succesfully")
  					location.replace("adminlogin.php")
  				</script>
  				<?php
  				}else{
  			?>
  				<script>
  					alert("Not submit data")
  				</script>
  			<?php

  			}
	  	}else{
	  		echo "password are not matching";
	  	}
	  }

 }

?>