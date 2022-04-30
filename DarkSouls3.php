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

		<title>Dark Souls 3</title>
		
	</head>

	<body id="background">
		<section class="template2">
			
			<div class="grid-x">
				<div id="header" class="cell small-12 medium-12 large-12 text-right">
					<img id=img10 src="./pictures/darksouls3title.jpg">
				</div>

				<div id="navbar"></div>

			</div>
			<div class="grid-x">

				<div id="Leftsidebar" class = "cell small-12 medium-4 large-4">
					<img id=img1 src="./pictures/darksouls3pic1.jpg">
					<img id=img2 src="./pictures/darksouls3pic2.jpg">
					<img id=img3 src="./pictures/darksouls3pic3.jpg">
					<img id=img4 src="./pictures/darksouls3pic4.jpg">
					<img id=img5 src="./pictures/darksouls3pic5.jpg">
					<img id=img6 src="./pictures/darksouls3pic6.jpg">
					<img id=img7 src="./pictures/darksouls3pic7.jpg">
				</div>

				<div id="body" class="cell small-12 medium-8 large-8">
					<h3>Publisher</h3>

					<p>
					FromSoftware Inc.

					</p>

					<h3>Personal Experience</h3>

					<p>
					This game came out March 24, 2016 and it shows. It has a medieval dark fantasy aesthetic with a setting that gives it a dying world feel. Its combat has a good balance of pacing between fast and slow with its predecessors being more on the slow side. This was the first game I played within the genre, so it holds sentimental value. I definitely recommend it to others who are playing games from the souls-like genre for the first time.  
					</p>

					<h3>Pros</h3>
						<ul class="buttons">
							<a  class="showSingle" target="1"><li>Experience the souls series in its latest most polished entry.</li></a>			  
							<div id="div1" class="targetDiv">
								<p>
								This is part of the reason why it's called the soul-like genre. Why not see it for yourself?
								</p>
							</div>

							<a  class="showSingle" target="2"><li>The game has a magic system</li></a>			  
							<div id="div2" class="targetDiv">
								<p>
								Not all of the games within the genre have a dedicated magic system to use. This is definitely worth noting.
								</p>
							</div>

							<a  class="showSingle" target="3"> <li>NPC side quests</li></a>			  
							<div id="div3" class="targetDiv">
								<p>
								Since the game has a more linear design you're more likely to run into NPCs and interact with them. Some of their questlines even impact the story and the interactions can really help immerse you within the game.
								</p>
							</div>						
						</ul>

					<h3>Cons</h3>
						<ul class="buttons">
							<a  class="showSingle" target="4"><li>The story is a repeat of the previous games in many ways</li></a>			  
							<div id="div4" class="targetDiv">
								<p>
								The story doesn't really offer anything too new, especially if you played the previous games.
								</p>
							</div>

							<a  class="showSingle" target="5"><li>First boss fight is very early</li></a>			  
							<div id="div5" class="targetDiv">
								<p>
								This game puts you to the test very early. Soon after reading the tutorial messages, you will be put against your first boss and will likely see it again soon after.
								</p>
							</div>

							<a  class="showSingle" target="6"><li>Certain mechanics could use more improvement</li></a>			  
							<div id="div6" class="targetDiv">
								<p>
								The execution of the games mechanics is far from perfect. Some of the other games in the genre did a better job at this in certain aspects. 
								</p>
							</div>						
						</ul>	
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