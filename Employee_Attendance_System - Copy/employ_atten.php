<?php
 include 'db_conn.php';

 $insertquery = "SELECT * FROM employeattendance WHERE 1";

 $result = mysqli_query($sql, $insertquery);
 echo "<table border='1'>
      <tr>
        <th>id</th>
        <th>emp_id</th>
        <th>date</th>
        <th>status</th>
        <th>emp_email</th>
        <th>attcheck</th>
      </tr>";

   foreach ($result as $row) {
  	echo "<tr><td>" .$row['id']. "</td>
  	<td>" .$row['emp_id']. " </td> 
  	<td>" .$row['date']. "</td>
    <td>" .$row['status']. "</td>
  	<td> " .$row['emp_email']. " </td>
  	<td>" .$row['attcheck']. "</td>
  	</tr>" ;
  }
  echo "</table>";

?>