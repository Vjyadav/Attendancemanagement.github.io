
<?php

 date_default_timezone_set('Asia/Kolkata');
 include 'db_conn.php';
 $insertquery = "SELECT * FROM employeedetail";
 $result = mysqli_query($sql, $insertquery);


 if(isset ($_POST['submit']))
 {
	$emp_id = $_POST['guy'];
	$emp_email = $_POST['guy'];
	$date = $_POST['date'];
	$status = $_POST['status'];
	$attcheck = $_POST['attcheck'];
	$insertquery1 = "insert into employeattendance (emp_id,emp_email, date, status,attcheck) 
	values('$emp_id','$emp_email', '$date','$status','$attcheck')";
	$result1 = mysqli_query($sql, $insertquery1);

 } 


?>