<?php
 include 'db_conn.php';

 $insertquery = "SELECT * FROM employeedetail WHERE 1";

 $result = mysqli_query($sql, $insertquery);
 echo "<table border='1'>
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>phone</th>
        <th>position</th>
      </tr>";

   foreach ($result as $row) {
  	echo "<tr><td>" .$row['ID']. "</td>
  	<td>" .$row['name']. " </td> 
  	<td>" .$row['email']. "</td>
    <td>" .$row['password']. "</td>
  	<td> " .$row['phone']. " </td>
  	<td>" .$row['position']. "</td>
  	</tr>" ;
  }
  echo "</table>";

?>