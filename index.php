<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8" />
	<title>God's Glory Ventures</title>
	
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
				<a href="index.html" class="navbar-brand smoothScroll"><strong>GODS GLORY VENTURE</strong></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					
				</ul>
			</div>
		</div>
	</div>
	<!-- end navigation -->



<!-- start gallery -->
	<section id="gallery" class="templatemo-section templatemo-light-gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center text-uppercase">Gallery</h2>
					<hr>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="images/c1.jpg" class="img-responsive gallery-img" alt="realtch 1">
						<div class="gallery-des">
							<h3>FROZEN CHICKEN </h3>
							<h5></h5>
						</div>
					</div>
				</div>	
				<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="images/ind1.jpg" class="img-responsive gallery-img" alt="realtch 2">
						<div class="gallery-des">
							<h3>PURE REFINED GROUNDNUT OIL</h3>
							<h5></h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="images/g5.jpg" class="img-responsive gallery-img" alt="realtch 3">
						<div class="gallery-des">
							<h3>QUALITY RICE AND OF GREAT PRICE</h3>
							<h5></h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="images/p4.jpg" class="img-responsive gallery-img" alt="realtch 4">
						<div class="gallery-des">
							<h3>Highly Refined Palm Oil!1!</h3>
							<h5>All available with us!</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="images/s4.jpg" alt="realtch 5" class="img-responsive gallery-img">
						<div class="gallery-des">
							<h3>SALT AS PURIFIED AND REFINED AS EVER.</h3>
							<h5></h5>
						</div>
				  </div>
				</div>				
			<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="images/r3.jpg" class="img-responsive gallery-img" alt="realtch 4">
						<div class="gallery-des">
							<h3>INDOMIE NOODLES OF ALL KINDS!!</h3>
							<h5>All available with us!</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end gallery -->

<!-- start login  -->
	
 <div class="clr"></div>
          <form action="" method="post" id="leavereply">
           			<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
			   <tr class="tableheader">
              	<td align="center" colspan="2">Enter Login Details</td>
			    </tr>
				<tr class="tablerow">
				  <td align="right"><label for="name">Name</label></td>
			 	  <td> <input type="text" name="username" maxlength="10"><?php if (empty($_POST['username']))
			     { $usererror="Insert username";
				 echo $usererror;} ?> </td>
			     </tr>
				 <tr class="tablerow">
			       <td align="right"> <label for="password">Password</label></td>
			  		<td><input type="password" name="password" maxlength="10"> <?php if (empty($_POST['password']))
			      {
				    $passerror="Insert password";
					
				   echo $passerror;} ?></td>
			        </tr>
                     <tr class="tableheader">
                       <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
                <div class="clr"></div>
              
          </form>
		  
		  
		  
		  <?php
		  //Create session
		  	session_start();
			$message ="";
			if (count($_POST) >0) 
			  {
			    $connection=mysqli_connect("localhost","root","");
				$dbc=mysqli_select_db($connection,"inventory");
				//Make the query
					$query="SELECT * FROM login WHERE username='" . $_POST["username"] . "' and password='" . $_POST["password"] . "'  ";

			//Run the query
				$result=mysqli_query ($connection,$query);
			//output of data 4 a single row
				$row=mysqli_fetch_array($result);
			//check if the input data correspinds to the data in d dbase
			   		  
			      
				if(is_array($row))
				 {
				  $_SESSION["id"] =$row["id"];
				  $_SESSION["username"] =$row["username"];
				 }
				else{ $message="Invalid username or password!" ;}
				echo '<div class="message">'. $message  .'</div>' ;
				 

			  }
		  
		  		if (isset($_SESSION["id"]))
				{
				  header ("Location:sales.php");
				}
		  ?>
       


<!-- end login-->


<!-- Footer Section -->

<footer>
	<div class="container">
		<div class="row">

               <div class="col-md-8 col-sm-6">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="0.4s">
                         <p>Copyright &copy; 2016 Your App Starter
                         <span>||</span> 
                         Design: <a href="https://plus.google.com/+templatemo" title="free css templates" target="_blank">Templatemo</a></p>
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