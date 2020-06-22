<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'Bootstrap_link.php'; ?>
	<link rel="stylesheet" type="text/css" href="login.css">
	<?php include 'adminlogindb.php'; ?>
</head>
<body>
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
      <li class="nav-item active">
        <a class="nav-link" href="adminreg.php">Back</a>
      </li>
     </ul>
    
  </div>
</nav>
<div class="card bg-light">
	<article class="card-body mx-auto">
		<h4 class="card-title mt-3 text-center">Login Account</h4>
		<form action="" method="POST">
			<div class="form-group input-group">
				<div class="input-group-prepend">
				<span class="input-group-text"><i class="fa fa-envelope"></i></span>
				</div>
				<input type="email" name="email" placeholder="Email address" class="form-control" required>
			</div>

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-lock"></i></span>
				</div>
				<input type="password" name="password" placeholder="Password" class="form-control" value="" required>
			</div>

			<div class="form-group input-group">
			<button type="submit" name="submit" class="btn btn-primary btn-block">Login </button>
			</div>
			<p class="text-center">Not Have an account?<a href="adminlogin.php">Sign UP Here</a></p>

		</form>
	</article>

</body>
</html>