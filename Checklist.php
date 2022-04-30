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

		<script> 
			jQuery(function(){
			    jQuery('.showSingle').click(function(){
					var target = $(this).attr('target');
					$('#div'+target).toggle('.hide');
			    });
			});
		</script>

		<link rel="stylesheet" href="pstyle.css">
		<link rel="stylesheet" href="./foundation/css/foundation.min.css">

		<title>Checklist</title>

	</head>
	<body id="background">
		<section class="template1">
			<div class="grid-x">
				
				<div id="header" class="cell small-12 medium-12 large-12 text-right">
					<h1>Checklist</h1>
				</div>
		
				<div id="navbar"></div>

			</div>
			<div class="grid-x">
				<div id="body" 	style="padding:10px;" class="cell small-12 medium-12 large-12">
					<p>This project was required to have a checklist as an easier way to check requirements.</p>

					<div class="buttons">
						<h3>Feature Components</h3>

						<a  class="showSingle" target="1"><h4>Database Usage</h4></a><br>
							<div id="div1" class="targetDiv">
								<p>Can be found in: <a href="https://codd.cs.gsu.edu/~dbaldwin14/Project/Suggestions.php">Suggestions Page</a><br>
								The "View" button displays items from a custom database that lists games from the genre. 
								</p>
							</div>

						<a  class="showSingle" target="2"><h4>Ajax Usage</h4></a><br>
							<div id="div2" class="targetDiv">
								<p>Can be found in: <a href="https://codd.cs.gsu.edu/~dbaldwin14/Project/Homepage.php">Homepage</a><br>
								My navbar is loaded for each page using an AJAX get() method for all main pages.
								</p>
							</div>

						<a  class="showSingle" target="3"><h4>Theme</h4></a><br>
							<div id="div3" class="targetDiv">
								<p>Can be found in: <a href="https://codd.cs.gsu.edu/~dbaldwin14/Project/Homepage.php">Homepage (template1)</a>
								<p>Can be found in: <a href="https://codd.cs.gsu.edu/~dbaldwin14/Project/EldenRing.php">Elden Ring (template2)</a><br>
								A consistent style was formed using a CSS file. All pages on the main site have common color, layouts, and a shared nav bar. 
								</p>
							</div>

						<a  class="showSingle" target="4"><h4>New Library Usage</h4></a><br>
							<div id="div4" class="targetDiv">
								<p>Can be found in: <a href="https://codd.cs.gsu.edu/~dbaldwin14/Information.php">Information Page</a><br>
								I used JavaScript library called Chart.js to display a bar graph on the page.
								</p>
							</div>


						<a  class="showSingle" target="5"><h4>JavaScript Usage</h4></a><br>
							<div id="div5" class="targetDiv">
								<p>Can be found in: <a href="https://codd.cs.gsu.edu/~dbaldwin14/Project/Checklist.php">Checklist Page</a><br>
								This page is actually a great example. JavaScript is used to show and hide the information for each requirement.
								</p>
							</div>


						<a  class="showSingle" target="6"><h4>Membership Area</h4></a><br>
							<div id="div6" class="targetDiv">
								<p>Can be found in: <a href="https://codd.cs.gsu.edu/~dbaldwin14/Project/Suggestions.php">Suggestions Page</a><br>
								Members can suggest more games from the genre to be added to the list.
								</p>
							</div>


						<a  class="showSingle" target="7"><h4>General User</h4></a><br>
							<div id="div7" class="targetDiv">
								<p>Can be found in: <a href="https://codd.cs.gsu.edu/~dbaldwin14/Project/LoginPage.php">LoginPage</a><br>
								The specified username and password for general user works. You can even register!
								</p>
							</div>

					
					</div>

					<div class="buttons">
						<h3>Page Components</h3>
						<a  class="showSingle" target="8"><h4>Checklist Page</h4></a><br>
							<div id="div8" class="targetDiv">
								<p>Can be found in:<br>
								You're here right now!
								</p>
							</div>	

						<a  class="showSingle" target="9"><h4>Site Description Page</h4></a><br>
							<div id="div9" class="targetDiv">
								<p>Can be found in: <a href="https://codd.cs.gsu.edu/~dbaldwin14/Project/SiteDescription.php">Site Description Page</a><br>

								</p>
							</div>

						<a  class="showSingle" target="10"><h4>About Us Page</h4></a><br>
							<div id="div10" class="targetDiv">
								<p>Can be found in: <a href="https://codd.cs.gsu.edu/~dbaldwin14/Project/AboutPage.php">About Us Page</a><br>
								 
								</p>
							</div>		

						<a  class="showSingle" target="11"><h4>Homepage</h4></a><br>
							<div id="div11" class="targetDiv">
								<p>Can be found in: <a href="https://codd.cs.gsu.edu/~dbaldwin14/Project/Homepage.php">Homepage</a><br>
								 
								</p>
							</div>	

					</div>	

					<p><?php printTime();?></p>
					
				</div>
			</div>
		</section>
		<div id="footer" class= cell>
			<p style="float:left;"> &copy 2022 Daniel Baldwin, All Rights Reserved </p>
			<p style="float:right;"> Design by Daniel Baldwin </p>
		</div>
	</body>
</html>