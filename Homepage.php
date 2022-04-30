<?php require("week4functions.php"); ?>
	
<!DOCTYPE html>
<html>
	<head>	
		<script src="./jquery/jquery-3.6.0.min.js"></script>

		<script>
			$.get("navbar.php", function(data){
			    $("#navbar").replaceWith(data);
			});
		</script>

		<link rel="stylesheet" href="pstyle.css">

		<link rel="stylesheet" href="./foundation/css/foundation.min.css">

		<title>SoulsborneFinder</title>

	</head>
	<body id="background">
		<section class="template1">
			<div class="grid-x">

				<div id="header" class="cell small-12 medium-12 large-12 text-right">
					<h1> SoulsborneFinder</h1>
				</div>

				<div id="navbar"></div>

			</div>
			
			<div class="grid-x">

				<div id="body" class="cell small-12 medium-12 large-12">
					<h2>Which souls-like is for you?</h2>

					<h3>Recent Fan That’s Looking for More?</h3>
					<p>
					If you’re looking to figure out what soul-like game you want to play, then you’ve come to the right place. There’s a vast amount of games from the genre each with its own feel and aesthetic. Use this website to help narrow your search down.  
					</p>

					<h3>Never Played One Before, but Interested?</h3>
					<p>
					If you have never played a game from the soul-like genre before, that’s okay too! I will admit, we all have different tastes and specific things we enjoy, but that shouldn’t discourage you from giving the genre a try. I started playing these types of games only two years ago and I would’ve never found out I liked them so much if I never tried. I had always wanted to give the genre a try, but I never had a friend to give that extra push and all the things I’ve heard about this genre really discouraged me.
					</p>
					
					<p><?php printTime();?></p>

				</div>

			</div>
		</section>
		<div class= "cell footer">
			<p style="float:left;"> &copy 2022 Daniel Baldwin, All Rights Reserved </p>
			<p style="float:right;"> Design by Daniel Baldwin </p>
		</div>
	</body>
</html>
