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

		<title>Nioh</title>
		
	</head>

	<body id="background">
		<section class="template2">

			<div class="grid-x">
				<div id="header" class="cell small-12 medium-12 large-12 text-right">
					<img id=img10 src="./pictures/niohtitle.jpg">
				</div>

				<div id="navbar"></div>

			</div>
			<div  class="grid-x">

				<div id="Leftsidebar" class = "cell small-12 medium-4 large-4">
					<img id=img1 src="./pictures/niohpic1.jpg">
					<img id=img2 src="./pictures/niohpic2.jpg">
					<img id=img3 src="./pictures/niohpic8.jpg">
					<img id=img4 src="./pictures/niohpic4.jpg">
					<img id=img5 src="./pictures/niohpic5.jpg">
					<img id=img6 src="./pictures/niohpic6.jpg">
					<img id=img7 src="./pictures/niohpic7.jpg">
				</div>

				<div id="body" class="cell small-12 medium-8 large-8">
					<h3>Publisher</h3>

					<p>
					Team Ninja and Koei Tecmo
					</p>

					<h3>Personal Experience</h3>

					<p>
					Nioh came out February, 2017 and Nioh 2  March 12, 2020. Both games share a fictional dark fantasy take on the Sengoku Period of Japan. The gameplay works on a level by level system, where the player chooses levels on a world map to complete and progress the story. Combat is more complex than some of the other games within the genre when it comes to using your melee weapons and skills. Personally I enjoyed the games most for their unique combat system and the satisfying flow you get when playing well.
					</p>

					<h3>Pros</h3>
						<ul class="buttons">
							<a  class="showSingle" target="1"><li>More in depth melee system than many games in the genre</li></a>			  
							<div id="div1" class="targetDiv">
								<p>
								Many of these games are very simplistic with its melee attacks, but Nioh gives you the option to use a variety of moves during combat.
								</p>
							</div>

							<a  class="showSingle" target="2"><li>Easier to follow and more understandable story than many of the games in the genre</li></a>			  
							<div id="div2" class="targetDiv">
								<p>
								Many of the games within the genre require you to read item descriptions and make many connections to understand what's going on. The story is presented much more straightforward within the Nioh series.
								</p>
							</div>

							<a  class="showSingle" target="3"> <li>Progression is easy to understand</li></a>			  
							<div id="div3" class="targetDiv">
								<p>
								It is also common to get lost and confused within souls-like games. You may enter an optional area by accident then wonder why the path ended or what path you missed. Nioh clearly presents what must be done to progress the story. 
								</p>
							</div>						
						</ul>

					<h3>Cons</h3>
						<ul class="buttons">
							<a  class="showSingle" target="4"><li>The stats of items in the game can be a bit overwhelming and confusing at first glance</li></a>			  
							<div id="div4" class="targetDiv">
								<p>
								There can be an overwhelming amount of stats on your equipment in the game, and it can be very difficult to undertand what of all it does sometimes. 
								</p>
							</div>

							<a  class="showSingle" target="5"><li>Weapons and armor constantly must be changed due them having individual levels.</li></a>			  
							<div id="div5" class="targetDiv">
								<p>
								Many games in the genre allow you focus leveling a small set of weapons. Nioh has levels attached to its equipment which scales from mission to mission. This means you'll be constantly changing equipment to keep up with the game.
								</p>
							</div>

							<a  class="showSingle" target="6"><li>Games lacks a hub area</li></a>			  
							<div id="div6" class="targetDiv">
								<p>
								Nioh doesn't really have a hub area where you interact with several NPCs. Most of it is just menus.
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