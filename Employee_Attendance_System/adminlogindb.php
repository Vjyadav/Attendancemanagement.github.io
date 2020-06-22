<?php
 include 'db_conn.php' ;

 if(isset($_POST['submit'])){
 	$email = $_POST['email'];
 	$password =$_POST['password'];

 	$email_search ="select * from registration where email ='$email' "; 

 	$query = mysqli_query($sql, $email_search);
 	$email_count = mysqli_num_rows($query);

 	if($email_count){
 		$email_pass = mysqli_fetch_assoc($query);
 		$db_pass = $email_pass['password'];
 		$pass_decode = password_verify($password,$db_pass);

 		if($pass_decode){
 			echo "login succesfull";
 			?>
	 	 	<script>
	 	 		location.replace("attendview.php")
	 	 	</script>
	 	 	<?php

 			
 		}else{
 			echo "incorrect password";
 		}
 	}else{
 		echo "invalid email";
 	}

 }

?>