<?php require("week4functions.php"); ?>

<?php

if(!isset($_COOKIE['access'])) {
  header("Location: LoginPage.php");  
} else{ 
    print("Welcome user: ".$_COOKIE['access']);
}

define( 'DB_NAME', 'dbaldwin14' );
define( 'DB_USER', 'dbaldwin14' );
define( 'DB_PASSWORD', 'dbaldwin14');
define( 'DB_HOST', 'localhost' );

?>

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
			function InsertSuggestion(){
				val1 = $("#suggestion").val();
				$.get("./dbfunctions.php",{"cmd": "createsuggestion", "suggestion" : val1}, function(data){
					$("#suggest").html(data);
				});
			}

			function Games(){
				$.get("./dbfunctions.php",{"cmd": "list"}, function(data){
					$("#suggest").html(data);
				});
				return(false);
			}

			function comfirmed() {
				alert("Suggestion submitted");
			}

		</script>

		<link rel="stylesheet" href="pstyle.css">
		<link rel="stylesheet" href="./foundation/css/foundation.min.css">

		<title>Suggestions</title>
		<style>

			h4 {
				color: yellow;
			}

		</style>
		
	</head>
	<body id="background">
		<section class="template1">
			<div class="grid-x">
				<div id="header" class="cell small-12 medium-12 large-12 text-right">
					<h1>Suggestions</h1>
				</div>

				<div id="navbar"></div>

				<div id="Leftsidebar" class = "cell small-12 medium-6 large-6">
					<h4>Check the list and suggest more</h4>

					<button style="color:yellow;" onclick="Games()">View</button><br><br>

					<h4>What are some other games from the genre?</h4>

					<form method="post" onsubmit="return(InsertSuggestion())">
					Game Suggestion: <input type="text" id=suggestion><br>
					<input type="submit" value="Submit">
					</form>
		
					<p><?php printTime();?></p>

				</div>

				<div style="background-color: navajowhite;"id="suggest" class="cell small-12 medium-6 large-6"></div>

			</div>
		</section>
		<div id="footer" class= cell>
			<p style="float:left;"> &copy 2022 Daniel Baldwin, All Rights Reserved </p>
			<p style="float:right;"> Design by Daniel Baldwin </p>
		</div>
	</body>
</html>
