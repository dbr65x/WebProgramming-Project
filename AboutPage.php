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

		<title>About Page</title>
		
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
					<h1>About Page</h1>
				</div>

				<div id="navbar"></div>

			</div>
			<div class="grid-x">
				<div id="body" class="cell small-12 medium-8 large-12">
					<h3>Section 1 - Who I am?</h3>
					<p>
					At the time of me writing this, I am a CS student in his last year enrolled in Georgia State University. I’m currently taking a web programming class and I’m interested in maybe doing this kind of thing as a job. 
					</p>

					<h3>Section 2 - Project Description</h3>
					<p>
					The purpose of this website is to help the user figure out which souls-like game would be the best fit for them. Before I started this project, I knew I wanted it to be about video games. I just didn’t know what direction to take it. The hype for Elden Ring had me in the mindset to make a website that focuses on the souls-like genre. Initially I was going to attempt to make my own version of a Fextralife wiki of the game, but I realized just how ambitious that was. Besides there are people already out there who dedicate their time to this who would do a much better job than I could. Eventually I decided to make a website that would help people figure out what games from the genre they would like to play because I want more people to find enjoyment within the genre. 
					</p>

					<h3>Section 3 - Technology Implemented</h3>
					<p>
					As a text editor I used sublime.
					To keep files up to date on the server I used FileZilla.
					The langauges I used were a combination of HTML, PHP, and JavaScript.
					The website is hosted on GSU's Codd server (as of now).
					I used the libraries jQuery, Foundation, and Chart.js.
					</p>
					
					<h3>Section 4 - What have I learned from Web Programming Class?</h3>
					<p>
					This class has helped me learn the basics of website building. It has shown me how to use a variety of resources to accomplish one goal and that there could be many different solutions to one problem. Through my experience in this class I’ve learned to cooperate with a group and to not be afraid to ask questions because we are all here to improve.	
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
