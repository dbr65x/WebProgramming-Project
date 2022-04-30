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

		<title>Bloodborne</title>
		
	</head>

	<body id="background">
		<section class="template2">
			
			<div class="grid-x">
				<div id="header" class="cell small-12 medium-12 large-12 text-right">
					<img id=img10 src="./pictures/bloodbornetitle.jpg">
				</div>

				<div id="navbar"></div>

			</div>
			<div class="grid-x">

				<div id="Leftsidebar" class = "cell small-12 medium-4 large-4">
					<img id=img1 src="./pictures/bloodbornepic1.jpg">
					<img id=img2 src="./pictures/bloodbornepic2.jpg">
					<img id=img3 src="./pictures/bloodbornepic3.jpg">
					<img id=img4 src="./pictures/bloodbornepic4.jpg">
					<img id=img5 src="./pictures/bloodbornepic5.jpg">
					<img id=img6 src="./pictures/bloodbornepic6.jpg">
					<img id=img7 src="./pictures/bloodbornepic7.jpg">
				</div>

				<div id="body" class="cell small-12 medium-8 large-8">
					<h3>Publisher</h3>

					<p>
					FromSoftware Inc. 
					</p>

					<h3>Personal Experience</h3>

					<p>
					This game came out March, 2015. It has a gothic aesthetic mixed with lovecraftian elements. While it is an old game, the environment is very immersive. It maintains a dark mysterious tone as you explore the environment and figure out more things about the story. Since I am more of a fan of slow-paced combat, it took me time to get adjusted to the gameplay. However once I got into the pacing of the fights and the movement, I really began to enjoy the game. Personally I most appreciated the game for its aesthetic and setting.
					</p>

					<h3>Pros</h3>
						<ul class="buttons">
							<a  class="showSingle" target="1"><li>Immersive setting</li></a>			  
							<div id="div1" class="targetDiv">
								<p>
								The dark gothic style is a nice change of pace commpared to the more common medieval styles and is executed very well.	
								</p>
							</div>

							<a  class="showSingle" target="2"><li>Good for players looking for a more aggressive combat experience</li></a>			  
							<div id="div2" class="targetDiv">
								<p>
								The game requires you to be active and really engage with the enemies. It is not overly reliant on standing still to use a shield or parry.
								</p>
							</div>

							<a  class="showSingle" target="3"><li>The game has very good DLC</li></a>			  
							<div id="div3" class="targetDiv">
								<p>
								The DLC for the game really brings a lot to the table and genuinely makes for a much more complete experience.
								</p>
							</div>						
						</ul>

					<h3>Cons</h3>
						<ul class="buttons">
							<a  class="showSingle" target="4"><li>PlayStation only</li></a>			  
							<div id="div4" class="targetDiv">
								<p>
								This is a deal breaker for many. Being a PlayStation exclusive definitely has its drawbacks.
								</p>
							</div>

							<a  class="showSingle" target="5"><li>Approaches to combat can feel limited in comparison to other games within the genre</li></a>			  
							<div id="div5" class="targetDiv">
								<p>
								Personally, I felt this game had the least amount of things I could do when approaching a fight compared to the other games I played in the genre.
								</p>
							</div>

							<a  class="showSingle" target="6"><li>Interactions with npcs can be lacking in comparison to other games within the genre</li></a>			  
							<div id="div6" class="targetDiv">
								<p>
								I felt the NPCs could've used more time to be fleshed out.
								</p>
							</div>						
						</ul>	
					<p><?php printTime();?></p>
				</div>
			</div>
		</section>

		<div class= "cell footer">
			<p style="float:left;"> &copy 2022 Daniel Baldwin, All Rights Reserved </p>
			<p style="float:right;color:black;"> Design by Daniel Baldwin </p>
		</div>
	</body>
</html>