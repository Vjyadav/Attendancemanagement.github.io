<?php

 $server ='localhost';
 $user ='root'; 
 $password = '';
 $db= 'empatten';

 $sql = mysqli_connect($server, $user,$password ,$db);	
  if($sql){
  	?>
  	<script>
  		alert("connected")
  	</script>
  	<?php
  }else{
  	?>
  	<script>
  		alert("not connected")
  	</script>
  	<?php

  }



?>