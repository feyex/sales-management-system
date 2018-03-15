<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8" />
	<title>G.G.V SALES</title>
	
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
					<li><a href="stocks.php" class="smoothScroll">STOCKS</a></li>
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
				<td align="center">Admin Dashboard</td>
				</tr>
			 	<tr class="tablerow">
				<td>
				<?php
				$username;
				if($_SESSION["username"]) {
				?>
				Welcome <?php echo $_SESSION["username"]; ?>. Click here to <a href="logout.php" title="Logout"><b>Logout.</b></a>
				<?php
				}
				?>
			 </td>
			 </tr>
			 </table>
			 
			 <div class="clr" > </div>
			 
<?php
if (isset ($_POST['tprice']))
{
$price1=$_POST['price1'];
$price2=$_POST['price2'];
$price3=$_POST['price3'];
$price4=$_POST['price4'];

$total=$price1+$price2+$price3+$price4;
//echo $total ; 


}
?>

<?php
$connection=mysqli_connect ("localhost","root","");
$db=mysqli_select_db ($connection,"inventory");


//$name = $price = $quantity = "";
//$namEr= $quantEr= $pricEr ="";


//$name-$_POST['name'];

if (isset($_POST['submit']))
{
$name=$_POST['name'];
$quantity=$_POST['quantity'];
$price=$_POST['price1'];
$name2=$_POST['name2'];
$quantity2=$_POST['quantity2'];
$price2=$_POST['price2'];
$name3=$_POST['name3'];
$quantity3=$_POST['quantity3'];
$price3=$_POST['price3'];
$name4=$_POST['name4'];
$quantity4=$_POST['quantity4'];
$price4=$_POST['price4'];
$total1=$_POST['total_price'];
$total=$price+$price2+$price3+$price4;

//Check if all fieldsd are not empty
if($name !=''  && $quantity !='' &&$price !='')
{

//MAKE THE QUERY
$result="INSERT INTO sales (name,quantity,price1,name2,quantity2,price2,name3,quantity3,price3,name4,quantity4,price4,total_price,date) values ('$name','$quantity','$price','$name2','$quantity2','$price2','$name3','$quantity3','$price3','$name4','$quantity4','$price4','$total1', NOW())";
$query= mysqli_query ($connection,$result) or die (mysqli_error ($connection));


echo "<center><span> <font color='blink'><b> Sales has been registered</b></font></span> </center>";
echo "<a href='receipt.php'><b> Generate your receipt</b></a>";
	}
	else{
	echo "<center><b><p><font color='blink'>Some fields are missing!!!  <br /> Sales Registration incomplete </font></p> </b> </center>";
	}
}

 mysqli_close ($connection);
?>

			 
	<form action="sales.php" method="post" >
			<table border="0" cellpadding="4" cellspacing="4" align="center" width="1200" >
				<tr class="tableheader">
					<th>PRODUCT NAME</th>
					<th>QUANTITY</th>
					<th>PRICE	</th>
				</tr>
					&nbsp;&nbsp;&nbsp;&nbsp;
				<tr>
					<td><input type="text" name="name"  value="<?php if
(isset($_POST['name'])) echo $_POST['name'] ?>" ></td>
					<td><input type="text" name="quantity" value="<?php if
(isset($_POST['quantity']))echo $_POST['quantity'] ?>" ></td>
					<td><input type="text" name="price1" value="<?php if
(isset($_POST['price1'])) echo $_POST['price1'] ?>"></td>
				</tr>
				<tr>
					<td><input type="text" name="name2" value="<?php if
(isset($_POST['name2'])) echo $_POST['name2'] ?>" ></td>
					<td><input type="text" name="quantity2" value="<?php if
(isset($_POST['quantity2'])) echo $_POST['quantity2'] ?>"></td>
					<td><input type="text" name="price2" value="<?php if
(isset($_POST['price2'])) echo $_POST['price2'] ?>" ></td>
				</tr>
				<tr>
					<td><input type="text" name="name3" value="<?php if
(isset($_POST['name3'])) echo $_POST['name3'] ?>"></td>
					<td><input type="text" name="quantity3"  value="<?php if
(isset($_POST['quantity3'])) echo $_POST['quantity3'] ?>"></td>
					<td><input type="text" name="price3" value="<?php if
(isset($_POST['price3'])) echo $_POST['price3'] ?>"></td>
				</tr>
				<tr>
					<td><input type="text" name="name4" value="<?php if
(isset($_POST['name4'])) echo $_POST['name4'] ?>"></td>
					<td><input type="text" name="quantity4" value="<?php if
(isset($_POST['quantity4'])) echo $_POST['quantity4'] ?>" ></td>
					<td><input type="text" name="price4" value="<?php if
(isset($_POST['price4'])) echo $_POST['price4'] ?>" ></td>
				</tr>
				<tr>
					<td><input type="submit" value="TOTAL PRICE" name="tprice" ></td>
					<td>   </td>
					<td><input type="text" name="total_price" value="<?php if
(isset($_POST['total_price'])) echo $total; ?>" ></td>
				</tr>
				<tr>
					<td><input type="submit" value="MAKE SALES" name="submit" ></td>
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
                         <p>&nbsp; </p>
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