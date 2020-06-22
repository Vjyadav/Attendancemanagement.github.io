
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'attendance_conn.php'; ?>
	<?php include 'Bootstrap_link.php' ?>
</head>
<body class="card bg-light">
		<nav class="navbar navbar-expand-lg nav_style p-3" >
  <a class="navbar-brand pl-4" href="#">Chaayos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-uppercase">
      <li class="nav-item active">
        <a class="nav-link" href="Employee_Detail.php">Home</a>
      </li>
     
       <li class="nav-item">
        <a class="nav-link" href="Employee_Detail.php">Registration</a>
      </li>
       
    </ul>
    
  </div>
</nav>
	
<div class="card bg-light ">
	<article class="card-body mx-auto">
		<h4 class="card-title mt-3 text-center">Employee Attendance</h4>
  <form method="POST">
  	<div class="form-group input-group">
  		<div class="input-group-prepend">
		<span class="input-group-text">
			<i class="fa fa-user"></i>
		</span>
	    </div>
				
	            <select class="w-75" name="guy">

	<?php
		foreach($result as $row){
			?>
			<option value="<?php echo $row['ID'];?>" > <?php echo $row['name'];?></option>
			<?php
		}
    ?>

	</select>
</div>


<div class="form-group input-group">
  		<div class="input-group-prepend">
		<span class="input-group-text">
			<i class="fa fa-envelope"></i>
		</span>
	    </div>
				
	            <select class="w-75" email="guy">

	<?php
		foreach($result as $row){
			?>
			<option value="<?php echo $row['ID'];?>" > <?php echo $row['email'];?></option>
			<?php
		}
    ?>

	</select>
</div>

<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-calendar"></i></span>
				</div>
	<input type="text" name="date" value="<?php echo date('jS-M-Y'); ?>">
</div>
	<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-phone"></i></span>
				</div>
	<select class="w-75" name="status">
		<option  value="P">Present</option>
		<option value="A">Absent</option>
	</select>
</div>
<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-phone"></i></span>
				</div>
	<select class="w-75" name="attcheck">
		<option  value="LI">Log In</option>
		<option value="LO">Log Out</option>
	</select>
</div>

			<div class="form-group input-group">
			<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
			</div>
			<p class="text-center">Not Have an Registration? <a href="Employee_Detail.php">Click here</a></p>
</form>
</div>
</article>
</div>
</body>
</html>
