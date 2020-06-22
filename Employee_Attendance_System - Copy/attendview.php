<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php include 'Bootstrap_link.php'; ?>
	
  <link rel="stylesheet" type="text/css" href="view.css">
	
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
      <li class="nav-item active">
        <a class="nav-link" href="empview.php">Attendance view</a>
      </li>
      
      
      
    </ul>
    
  </div>
</nav>
</body>
<?php include 'attendance_view.php'; ?>
</html>