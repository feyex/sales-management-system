
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
				<a href="index.html" class="navbar-brand smoothScroll"><strong>GODS GLORY VENTURE</strong></a>
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
	
	<div class="clr">   </div>
	<div class="clr">    </div>

<div>
<form method="post">
	<table align="center" cellpadding="3" cellspacing="4" width="30">
		<tr class="tableheader">
			<td><b>God's glory venture Receipt</b></td>
		</tr>
		<tr>
			<td><b>Address: 3,crescent road</b></td>
		</tr>
		<tr>
			<td>07033567939</td>
		</tr>
	</table>
	<!-- START -->
<?php
$connection= mysqli_connect ("localhost", "root", "");
$db= mysqli_select_db ($connection ,"inventory");

//SELECT RECORDS FROM DATABASE AND RUN THE QUERY
$q="SELECT id,name,quantity,price1,name2,quantity2,price2,name3,quantity3,price3,name4,quantity4,price4,total_price, date FROM sales ORDER BY date DESC LIMIT 1" ;
$query =mysqli_query ($connection,$q) or die (mysqli_error ($connection));

//DISPLAY THE FOLLOWING HEADINGS
echo " <table width=100% cellspacing='10' cellpadding='10' border='1' align='center' height='500'>
		<tr class='tableheader'><b>
			<th>Item</td>
			<th>Quantity</td>
			<th>Price</td> </b></tr>";
		
//Run the query to display result 
while ($row=mysqli_fetch_array ($query))
{
	echo "<tr> <td></b>" .$row ['name']. "</b></td>";
	echo "<td><b>" .$row ['quantity'] ."</b></td>";
	echo "<td><b>" .$row ['price1'] ."</b></td> </tr>";
	
	echo "<tr> <td><b>" .$row ['name2']. "</b></td>";
	echo "<td><b>" .$row ['quantity2'] ."</b></td>";
	echo "<td><b>" .$row ['price2'] ."</b></td> </tr>";
	
	echo "<tr> <td><b>" .$row ['name3']. "</b></td>";
	echo "<td>" .$row ['quantity3'] ."</td>";
	echo "<td>" .$row ['price3'] ."</td> </tr>";
	
	echo "<tr> <td><b>" .$row ['name4']. "</b></td>";
	echo "<td><b>" .$row ['quantity4'] ."</b></td>";
	echo "<td><b>" .$row ['price4'] ."</b></td> </tr>";
	
	
	echo "<tr> <td>Total price:"."</td>";
	echo "<td>"."</td>";
	echo "<td align='right'>".$row ['total_price']."</td> </tr>";
	echo "<td>" .$row ['date'] ."</td>";
	//echo "<td><a href='edit.php?id=" .$row['id']."'>Edit</a></td>";
	//echo "<td><a href='delete.php?id=" .$row['id']."' >Delete</a></td></tr>";
	
} 
   mysqli_close ($connection);

?>
	</tr>
	</table>
