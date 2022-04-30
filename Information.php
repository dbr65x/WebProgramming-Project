<?php require("week4functions.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<script src="./chart.min.js"></script>
		<script src="./jquery/jquery-3.6.0.min.js"></script>

		<script>
			$.get("navbar.php", function(data){
			    $("#navbar").replaceWith(data);
			});
		</script>

		<link rel="stylesheet" href="pstyle.css">
		<link rel="stylesheet" href="./foundation/css/foundation.min.css">

		<title>Information</title>

		</style>
	</head>
	<body id="background">
		<section class="template1">
			<div class="grid-x">
			
					<div id="header" class="cell small-12 medium-12 large-12 text-right">
						<h1>Information</h1>
					</div>

					<div id="navbar"></div>

				</div>
				
				<div class="grid-x">

					<div id="body" class="cell small-12 medium-12 large-12">
						<h2>What are souls-like games?</h2>

						<p>
						There are many variations between games within the genre, but many of the games share these common qualities.
						</p>

						<h3>Dark Fantasy</h3>
						<p>
						Many of the games share a dark fantasy aesthetic. 
						</p>

						<h3>Difficulty</h3>
						<p>
						Difficulty is practically synonymous with the genre.
						</p>
						
						<h3>Storytelling</h3>
						<p>
						Lots of games within the genre don’t explicitly describe all the details of their story. Many even use item descriptions to partially reveal information about the setting.
						</p>

						<h3>Difficulty</h3>
						<p>
						Difficulty is practically synonymous with the genre
						</p>

						<h3>Checkpoints</h3>
						<p>
						Checkpoints are a core mechanic of many of the games.
						</p>

						<h3>Extras</h3>

						<canvas id="myChart" style="width:100%;max-width:600px;background-color: navajowhite;"></canvas>

						<script>
							var xValues = ["Dark Souls 3", "Bloodborne","Sekiro","Elden Ring", "Nioh 2"];
							var yValues = [10, 2, 5, 12, 2.5];
							var barColors = ["brown", "blue","orange","green","red"];

							new Chart("myChart", {
								type: "bar",
								data: {
								   	labels: xValues,
								   	datasets: [{
								     	backgroundColor: barColors,
								     	data: yValues
								  	}]
								},
								options: {
								 	legend: {display: false},
								  	title: {
								    	display: true,
								     	text: "Copies Sold in Millions "
								   	}
								}
							});
						</script>

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
