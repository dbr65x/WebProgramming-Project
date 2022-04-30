<?php require("week4functions.php"); ?>
	
<!DOCTYPE html>
<html>
	<head>	
		<meta name="viewport" content="width=device-width" />
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

		<title>Elden Ring</title>
		

	</head>

	<body id="background" >
		<section class="template2">
			<div class="grid-x">
				<div id="header" class="cell small-12 medium-12 large-12 text-right">
					<img id=img10 src="./pictures/eldenringtitle.jpg">
				</div>

				<div id="navbar"></div>

			</div>
			<div class="grid-x">

				<div id="Leftsidebar" class = "cell small-12 medium-4 large-4">
					<img id=img1 src="./pictures/eldenringpic1.jpg">
					<img id=img2 src="./pictures/eldenringpic2.jpg">
					<img id=img3 src="./pictures/eldenringpic3.jpg">
					<img id=img4 src="./pictures/eldenringpic4.jpg">
					<img id=img5 src="./pictures/eldenringpic5.jpg">
					<img id=img6 src="./pictures/eldenringpic6.jpg">
					<img id=img7 src="./pictures/eldenringpic7.jpg">

				</div>

				<div id="body" class="cell small-12 medium-8 large-8">
					
					<h3>Publisher</h3>

					<p>
					FromSoftware Inc. 
					</p>

					<h3>Personal Experience</h3>

					<p>
					This game came out February 25, 2022 and it shows. It has beautiful graphics and is supported on several consoles (PS4, PS5, Xbox One, Xbox Series X, etc.). It has a medieval dark fantasy aesthetic and a massive open world to experience. You can really tell that FromSoftware used all of their experiences within the genre to make this game incorporating various elements, items, and mechanics from their other games. Personally it is my favorite from the entire genre for its open world and the variety of things you can do when approaching combat.
					</p>

					<h3>Pros</h3>
						<ul class="buttons">
							<a  class="showSingle" target="1"><li>Open world</li></a>			  
							<div id="div1" class="targetDiv">
								<p>
								There is a large beautiful world to explore, larger than many of FromSoftware's other games.	
								</p>
							</div>

							<a  class="showSingle" target="2"><li>Large amount of content</li></a>			  
							<div id="div2" class="targetDiv">
								<p>
								One of FromSoftware's largest games if not the largest. Lots of optional content to enjoy and get lost in. 
								</p>
							</div>

							<a  class="showSingle" target="3"> <li>Plenty of game mechanics to enjoy</li></a>			  
							<div id="div3" class="targetDiv">
								<p>
								This games has a mixture of items and mechanics from other games plus new ones. There are many options to approaching situations within the game.
								</p>
							</div>						
						</ul>

					<h3>Cons</h3>
						<ul class="buttons">
							<a  class="showSingle" target="4"><li>The amount of things to do can be overwhelming</li></a>			  
							<div id="div4" class="targetDiv">
								<p>
								There are so many things to do and see, it can be hard to figure what you should be doing first to progress through the game effectively.
								</p>
							</div>

							<a  class="showSingle" target="5"><li>Upgrade system can be tedious (resource collection)</li></a>			  
							<div id="div5" class="targetDiv">
								<p>
								The amount of materials needed to upgrade things is very high, which means upgrading can be very time consuming, especially when you want to upgrade multiple things.
								</p>
							</div>

							<a  class="showSingle" target="6"><li>PC copies struggle with performance (closer to release date)</li></a>			  
							<div id="div6" class="targetDiv">
								<p>
								This will likely be fixed in the future, but PC players have had frame rate issues.
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