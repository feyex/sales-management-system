<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8" />
	<title>REALTECH SUPPLIERS</title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!--custom:my css stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--<link rel="stylesheet" type="text/css" href="css/style1.css"> -->
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<!-- google font -->
	<link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
	</head>
	
<body id="home" data-spy="scroll" data-target=".navbar-collapse">

	<!-- start navigation -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand smoothScroll"><strong>REALTECH GLOBAL WORLD</strong></a>
			</div>
			<div class="collapse navbar-collapse">
				<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="sales.php" class="smoothScroll">SALES</a></li>
					<li><a href="#" class="smoothScroll">STOCKS</a></li>
					<li><a href="#" class="smoothScroll">REPORT</a></li>
					<li><a href="#" class="smoothScroll">STORE TAKING</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>			
				</div>
		</div>
	</div>
	<!-- end navigation -->


<?php
  ob_start();
$connection= mysqli_connect ("localhost", "root", "");
$db= mysqli_select_db ($connection ,"inventory");

  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $q="DELETE FROM store WHERE id='$delete'" ;
  $delete=mysqli_query($connection,$q);
  if($delete)
  {
      header("Location:existing.php");
  }
  else
  {
      echo mysqli_error($connection);
  }
  }
  ob_end_flush();
?>



	
	
		
	<!-- Footer Section -->

<footer>
	<div class="container">
		<div class="row">

               <div class="col-md-8 col-sm-6">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="0.4s">
                         <p>Copyright &copy; 2016 Stock Management System
                         <span>||</span> 
                         Design: Feyex web</a></p>
                    </div>
               </div>

			<div class="col-md-4 col-sm-6">
				<ul class="wow fadeInUp social-icon" data-wow-delay="0.8s">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-google-plus"></a></li>
                         <li><a href="#" class="fa fa-dribbble"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
			
		</div>
	</div>
</footer>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>