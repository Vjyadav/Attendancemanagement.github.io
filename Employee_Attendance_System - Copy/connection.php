<?php
include 'db_conn.php';

if (isset($_POST['submit']))
{
   $name= $_POST['name'];
   $email = $_POST['email'];
   $password= $_POST['password'];
   $phone = $_POST['phone'];
   $position = $_POST['position'];
 
  $insertquery = "insert into employeedetail (name, email,password, phone, position) values('$name','$email','$password','$phone','$position')";

  $result = mysqli_query($sql, $insertquery);
 
  if($result){
    echo "Inserted  Record succesfully";
  }else{
    echo "Error";
  }

 }
?>