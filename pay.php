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
		<section id="paySect">
			<h3 id="paymentTitle">Payment Options</h3>
					<article id="payOpt">
						Debit/Visa Card <img id="payLogo" src="images/visa.png" alt="Payment option of Visa" title="Visa Debit" align="right" width="0" height="0"><br><br><br>
						
						<form onsubmit="return pay()" action="success.php" method="POST">
						
							<label>Card Number:</label> <input type="number" placeholder="xxxx xxxx xxxx xxxx" id="ccNum" name="ccNum" style="width:10em"/><br><br>
							
							Expiration date:<input type="number" id="expMonth" placeholder="Month" name="expMonth" style="width:4em"/>
							<input type="number" id="expYear" placeholder="Year" name="expYear" style="width:4em"><br><br>
						
							Security Number: <input type="number" placeholder="xxx(x)" id="secCode" name="secCode" style="width:4em"/><br><br><br>
							
							<input type="submit" value="Continue" id="sumbitBtn"/>
			
						</form>
					</article>
		</section>
		<script type="text/javascript" src="pay.js"></script>
		
	</body>
	
	<footer>
	
	</footer>
</html>
