<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8" />
	<title>G.G.V REPORT</title>
	
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
					<li><a href="#" class="smoothScroll">REPORT</a></li>
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
$connection= mysqli_connect ("localhost", "root", "");
$db= mysqli_select_db ($connection ,"inventory");

//SELECT RECORDS FROM DATABASE AND RUN THE QUERY
$q="SELECT name,quantity,price1,name2,quantity2,price2,name3,quantity3,price3,name4,quantity4,price4,total_price, date FROM sales GROUP BY date" ;
$query =mysqli_query ($connection,$q) or die (mysqli_error ($connection));

//DISPLAY THE FOLLOWING HEADINGS
echo " <table width=100% cellspacing='12' cellpadding='10' border='1' align='center' height='500'>
		<tr class='tableheader'><b>
		    <th>Date</th>
			<th>Item</th>
			<th>Quantity</th>
			<th>Total Price</th> </b></tr>";
		
//Run the query to display result 
while ($row=mysqli_fetch_array ($query))
{
	echo "<tr> <td>" .$row ['date'] ."</td>";
	echo "<td>" .$row ['name'] ."," .$row ['name2'] ."," .$row ['name3'] ."," .$row ['name4'] . "</td>";
	echo "<td>" .$row ['quantity'] ."," .$row ['quantity2'] ."," .$row ['quantity3'] ."," .$row ['quantity4'] ."</td>";
	echo "<td>" .$row ['total_price'] ."</td> </tr>";
	
/*	echo "<tr> <td>" .$row ['name2']. "</td>";
	echo "<td>" .$row ['quantity2'] ."</td>";
	echo "<td>" .$row ['price2'] ."</td> </tr>";
	
	echo "<tr> <td>" .$row ['name3']. "</td>";
	echo "<td>" .$row ['quantity3'] ."</td>";
	echo "<td>" .$row ['price3'] ."</td> </tr>";
	
	echo "<tr> <td>" .$row ['name4']. "</td>";
	echo "<td>" .$row ['quantity4'] ."</td>";
	echo "<td>" .$row ['price4'] ."</td> </tr>";
	
	
	echo "<tr> <td>Total price:"."</td>";
	echo "<td>"."</td>";
	echo "<td align='right'>".$row ['total_price']."</td> </tr>";
	echo "<td>" .$row ['date'] ."</td>";
	//echo "<td><a href='edit.php?id=" .$row['id']."'>Edit</a></td>";
	//echo "<td><a href='delete.php?id=" .$row['id']."' >Delete</a></td></tr>";
	*/
} 
   mysqli_close ($connection);

?>
	</tr>
	</table>


<a href="monthlyrep.php"> MONTHLY REPORT</a>
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