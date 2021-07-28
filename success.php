<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset=utf-8 />
		<link rel="stylesheet" type="text/css" href="index.css">
		<title>Book World</title>
	</head>
	
	<header id="homeBanner">
		<img class="logo" src="images/books.png" alt="four books" title="Book World logo" width="100" height="100">
		<h1>Book World</h1>
	</header>
	
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#" >About us</a></li>
			<li><a href="#" >Contact Us</a>
		</ul>
	</nav>	
	<body>
		<section id="successSection">
			<h3 id="paymentTitle">Overview</h3>
					<article id="payOpt">
					Debit/Visa Card <img id="payLogo" src="images/visa.png" alt="Payment option of Visa" title="Visa Debit" align="right" width="0" height="0"><br><br><br>
						
						<form action="pay.php" method="POST">
							<?php
									$con = mysqli_connect("localhost","root","", "creditcard");
										if (!$con) {
											die ("Failed");
										}
										
									$m = $_POST["expMonth"];
									$y = $_POST["expYear"];
									$z = new dateTime();
									$z->setDate($y, $m, 1);
									$z->modify('+1 month -1 day');
									
									
									$ccNum = md5($_POST['ccNum']);
									$expDate = $z->format('yy-m-d');
									$ccv = $_POST["secCode"];
									
									$ccNumRAW=($_POST['ccNum']);
									$last4=substr($ccNumRAW, -4);
							
									//insert a record
									$sql = "INSERT INTO `card`(`ccnum`, `expdate`, `seccode`)
										VALUES ('$ccNum','$expDate','$ccv')";
									
									if ($con->query($sql)) {
											echo ("Payment Successful! Your credit card number ends in **** **** **** ".$last4);
										} 
										else {
											echo ("error");
										}
							?>
						</form>
					</article>
		</section>
		<script type="text/javascript" src="pay.js"></script>
		
	</body>
	
	<footer>
	
	</footer>
	
</html>
