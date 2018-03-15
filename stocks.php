<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8" />
	<title>G.G.V STOCKS</title>
	
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
				<a href="#" class="navbar-brand smoothScroll"><strong>GODS GLORY VENTURE</strong></a>
			</div>
			<div class="collapse navbar-collapse">
				<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="sales.php" class="smoothScroll">SALES</a></li>
					<li class="">
    <a href="javascript:void(0)" class="dropbtn">STOCK</a>
    <div class="">
      <a href="stocks.php">NEW GOODS</a>
      <a href="existing.php">EXISTING GOODS</a>    </div>
  </li>
					<li><a href="report.php" class="smoothScroll">REPORT</a></li>
					<li><a href="#" class="smoothScroll">STORE TAKING</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>			
				</div>
		</div>
	</div>
	<!-- end navigation -->
	
	<div class="cl">   </div>
	<div class="cl">    </div>
	<div class="cl">   </div>
	<div class="cl">    </div>
	<div class="cl">   </div>
	<div class="cl">    </div>
	<?php
			 //CODE TO RECOGNIZE THAT USER HAS LOGIN
			 
			 //START THE SESSION
			 session_start();
			
			  ?>
			  
				<table border="0" cellpadding="10" cellspacing="1" width="800" align="center">
				<tr class="tableheader">
				<td align="center">Register Goods</td>
				</tr>
			 	<tr class="tablerow">
				<td>
				<?php
				$username;
				if($_SESSION["username"]) {
				?>
			<b>	Welcome <?php echo $_SESSION["username"]; ?>. </b> Click here to <a href="logout.php" title="Logout"><b>Logout.</b>
				<?php
				}
				?>
			 </td>
			 </tr>
			 </table>
	
	<div class="clr"> </div>
	<div class="clr"> </div>
	
	
	<!--php code to run the query -->
<?php
	 
 $connection =mysqli_connect ("localhost", "root", "");
$dbc =mysqli_select_db($connection , "inventory");


$name = $price = $quantity = "";
$namEr= $quantEr= $pricEr ="";




if (isset($_POST['submit']))
{
if (empty($_POST['name']))
{

$namEr="name of product is required";
}
else {
	$name=$_POST['name'];
	// check if it contains letters and whitespaces.
	if (!preg_match("/^[a-zA-Z ]*$/",$name))
	{
	$namEr="Only white space allowed";
	}
	}
	


if (empty($_POST['quantity']))
	{
	 $quantEr="please input quantity of goods supplied";
	 }
	 else {
	 		$quantity=$_POST['quantity'];
			//check if only numerics is enteredl
			if (!filter_var ($quantity,FILTER_VALIDATE_INT))
			{
			  $quantEr="Invalid text format, Numerics only";
			}
	 	  }
	
  
  if (empty ($_POST['price']))
  	{
	 $pricEr="Please input price of good";
	}
	else 
	 {
	   $price=$_POST['price'];
	   //check if it is numeric
	   if (!filter_var ($price,FILTER_VALIDATE_INT))
	   {
	    $pricEr="Only numeric value is allowed";
	   }
	 } 
	 
	 


//Check if all fieldsd are not empty
if($name !=''  && $quantity !='' &&$price !='')
{

//MAKE THE QUERY
$result="INSERT INTO store (name,quantity,price,date) value ('$name' , '$quantity','$price' , NOW())";
$query= mysqli_query ($connection,$result) or die (mysqli_error ($connection));


echo "<center><span> <font color='blink'><b> You are now registered</b></font></span> </center>";
	}
	else{
	echo "<center><b><p><font color='blink'>Some fields are missing!!!  <br /> Registration incomplete </font></p> </b> </center>";
	}
}

 mysqli_close ($connection);
?>
	
	
<form action="" method="post" >

 	<table align="center" cellspacing="4" cellpadding="4" >	
		 
		<tr>
			<td> Name of product:</td>
			<td><input type="text" name="name" /></td>
			<td><span class="error">* <?php echo $namEr; ?> </span> </td>
		</tr>
	 	<tr>
	 		 <td>Quantity:</td>
			 <td><input type="text" name="quantity" /> </td>
			 <td><span class="error">* <?php echo $quantEr; ?> </span> </td>
	    </tr>
	    <tr>
	  	 	 <td>Unit price:</td>
		  	 <td><input type="text" name="price"  /> </td>
			 <td><span class="error">* <?php echo $pricEr; ?> </span> </td>
		</tr>
	    <tr>
	   		 <td>   </td>
	   		 <td><input type="submit" name="submit" value="register" /> </td>
	   	</tr>
 	</table>	   
 </form>
	   
	
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