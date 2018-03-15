<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8" />
	<title>G.G.V UPDATE</title>
	
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

$connection= mysqli_connect ("localhost", "root", "");
$db= mysqli_select_db ($connection ,"inventory");

if (isset ($_GET ['id']))
{
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$q="SELECT * FROM store WHERE id=".$_GET['id'];
	$query=mysqli_query($connection,$q) or die (mysqli_error ($connection));
	$result=mysqli_fetch_array ($query) or die (mysqli_error ($connection));
}
if(isset($_POST['update']))
{
 // variables for input data
 
$name=$_POST['name'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE store SET name='$name',quantity='$quantity',price='$price' WHERE id=".$_GET['id'];
   $row=mysqli_query($connection,$sql_query) or die (mysqli_error ($connection));
 
 // if the query runs!
	if (!$row)
		{
		 die (mysqli_error ($connnection));
		}
			$msg="Successfully Updated!!";
			echo $msg;
			header ('location:existing.php');
		  
}
mysqli_close ($connection);
?>



<?php
/*
if (isset ($_POST['id']))
{
$id=$_POST['id'];

if (isset ($_POST['update']))
{
$connection= mysqli_connect ("localhost", "root", "feyi");
if (!$connection) {
 	die('could not connect:' . mysqli_error ());
}


$name=$_POST['name'];
$quantity=$_POST['quantity'];
$price=$_POST['price']; 

//Run the query to update data in the table
$result="UPDATE stock"."SET name='$name', quantity='$quantity',  price='$price' 
" ." WHERE id='$id' ";
$db= mysqli_select_db ($connection ,"inventory ");
$query=mysqli_query ($connection,$result);

if (!query) {
    die ('could not update data: ' .mysqli_error ());
}
echo "updated data succesfully";

mysqli_close ();
}
}
 else {
 */
?>

<?php
/*
//include ('connection.php');
$connection= mysqli_connect ("localhost", "root", "feyi");
$db= mysqli_select_db ($connection ,"inventory ");

if (isset ($_GET['id']))
{

$id=$_GET['id']; 

if (isset ($_GET['submit']))
{
 $name=$_GET['name'];
$quantity=$_GET['quantity'];
$price=$_GET['price']; 

//Run the query to update data in the table
$result="UPDATE stock"."SET name='$name', quantity='$quantity',  price='$price' 
" ." WHERE id='$id' ";

$query=mysqli_query ($connection,$result) ;//or die (mysqli_error ());
// if the query runs!
	if (!$query)
		{
		 die ('could not update data:' .myqli_error ());
		}
			$msg="Successfully Updated!!";
			echo $msg;
			header ('location:existing.php');
		  }
 
}
}//update ends here
$row="select * from store where id='$id'"; 
$query1=mysqli_query($connection, $row);
$query2=mysqli_fetch_array($query1);


 
/*  if(isset($_GET['user_id']))
  {
  $id=$_GET['user_id'];
  $row="select * from supplier where user_id='$id'"; 
  $query1=mysqli_query($connection, $row);
  while($profile=mysqli_fetch_array($query1))
  {
    $name=$profile['name'];
	$company=$profile['company'];
    $product=$profile['product'];
	$phone=$profile['phone'];
	$email=$profile['email'];
	$address=$profile['address'];
    $quantity=$profile['quantity'];
	$price=$profile['price'];*/
	

?>



<form method="POST" action="<?php //$_PHP_SELF ?>">
<table border="0" cellspacing="4" width="100%">
	 	<tr>
			<td>NAME:</td>
			<td><input type="text" name="name"  value="<?php  echo $result ['name']; ?>" /></td>
		</tr>
		<tr>
			<td>QUANTITY SUPPLIED: </td>
			<td><input type="text" name="quantity"  value="<?php  echo $result ['quantity']; ?>"></td>
		</tr>
		
		<tr>
			<td>PRICE</td>
			<td><input type="text" name="price"  value="<?php echo $result['price']; ?>"></td>
		</tr>
		<tr>
		<td>   </td>
		<td><input type="submit" value="UPDATE"  name="update"> </td>
		</tr>
					
	 </table>
	 </form>
	 <?php

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