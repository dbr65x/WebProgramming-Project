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

		<title>Site Description</title>

		<style> 
			p {
				padding: 10px;
			}

		</style>

	</head>
	<body id="background">
		<section class="template1">
			<div class="grid-x">
				
				<div id="header" class="cell small-12 medium-12 large-12 text-right">
					<h1>Site Description</h1>
				</div>

				<div id="navbar"></div>

			</div>
			
			<div class="grid-x">
				<div id="body" class="cell small-12 medium-8 large-12">
					<h3>Users?</h3>
					<p>
					My users are people who love the souls-like genre or people who are interested in getting into the genre.
					</p>

					<h3>What do they get out of it?</h3>
					<p>
					I want my users to be able to learn about a variety of games from the souls-like genre in one place.
					</p>

					<h3>What problem am I trying to solve for users of the site?</h3>
					<p>
					I’m trying to help users figure out the next game from the genre that they want to play. I also want users who have not played any games from the genre to feel comfortable with trying the genre’s games. The souls-like genre can be very intimidating from the outside looking in.
					</p>
					
					<h3>What do I want my users to do after visiting my site?</h3>
					<p>
					Do a little more of their own research for a game that caught their eye and maybe give it a try!
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