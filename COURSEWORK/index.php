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
			<li><a href="index.php" title="Home page for Book World">Home</a></li>
			<li><a href="#"  title="A page about Book World">About us</a></li>
			<li><a href="#"  title="Book World's contact page">Contact Us</a>
		</ul>
	</nav>
		
	<body>
		<table width="105%">
		<tr><td>
		
		<section id="book1" class="bookItems">
		<h3 class="title">The Great Gatsby</h3>
		<img class="bookImages" src="images/book1.jpg" alt="Book cover of The Great Gatsby by F.Scott Fitzferald" title="The Great Gatsby" align="left" width="0" height="0">
			<article id="book1Summ" class="bookArticles">
				<ul class="bookSummary">
					<p>Set in Jazz Age New York, the novel tells the <em>tragic story</em> of <strong> Jay Gatsby</strong>, a self-made millionaire, and his pursuit of Daisy Buchanan, a wealthy young woman whom he <em>loved</em> in his youth.</p>
				</ul>
				<button id="btn1" onclick="payScreen()" class="payButtons">Pay</button>
				</article>
		</section>
		</td>
		
		<td><section id="book2" class="bookItems">
		<h3 class="title">Crime and Punishment</h3>
		<img class="bookImages" src="images/book2.png" alt="Book cover of Crime and Punishment by Fyodor Dostoevsky" title="Crime and Punishment" align="left" width="0" height="0">
			<article id="book2Summ" class="bookArticles">
				<ul class="bookSummary">
					<p>Crime and Punishment focuses on the <strong>mental anguish</strong> and <em>moral dilemmas</em> of Rodion Raskolnikov, an impoverished ex-student in Saint Petersburg who formulates a plan to <strong>kill</strong> an unscrupulous pawnbroker for her money.</p>
				</ul>
				<button id="btn2" onclick="payScreen()" class="payButtons">Pay</button>
				</article>
				</td></tr>
	
				
		<tr><td><section id="book3" class="bookItems">
		<h3 class="title">Beloved</h3>
		<img class="bookImages" src="images/book3.jpg" alt="Cover of Beloved by Toni Morrison" title="Beloved" align="left" width="0" height="0">
			<article id="book3Summ" class="bookArticles">
				<ul class="bookSummary">
					<p>Beloved explores the physical, emotional, and spiritual devastation wrought by <strong>slavery</strong>, a devastation that continues to haunt those characters who are former slaves even in <em>freedom.</em></p>
				</ul>
				<button id="btn3" onclick="payScreen()" class="payButtons">Pay</button>
				</article>
		</td>	
		
		<td><section id="book4" class="bookItems">
		<h3 class="title">An Inspector Calls</h3>
		<img class="bookImages" src="images/book4.jpg" alt="Cover of An Inspector Calls by J B Priestley" title="An Inspector Calls" align="left" width="0" height="0">
			<article id="book4Summ" class="bookArticles">
				<ul class="bookSummary">
					<p>An Inspector Calls by J B Priestley, is a play that revolves around the <em>apparent <strong>suicide</strong></em> of a young woman called Eva Smith. In the play, the unsuspecting Birling family are visited by the mysterious Inspector Goole. He arrives just as they are celebrating the engagement of Sheila Birling to Gerald Croft.</p>
				</ul>
				<button id="btn4" onclick="payScreen()" class="payButtons">Pay</button>
				</article>
		</section>
		</td></tr>
		
		<script> 
			function payScreen(){
				location.replace("pay.php");
				}		
		</script>
		
	</body>
	
	<footer>
	
	</footer>
</html>