<!DOCTYPE html>
<html>
<head>
	<script src="./jquery/jquery-3.6.0.min.js"></script>
</head>
<body>

	<form method="post" onsubmit="return(InsertGame())">

  	Game Name: <input type="text" id=game><br>

 	<input type="submit" value="Submit">

	</form>

	<div id=showgames></div>
	<script>
		function InsertGame(){
			val1 = $("#game").val();
			$.get("./dbfunctions.php",{"cmd": "creategame", "game" : val1}, function(data){
				$("#showgames").html(data);
			});
		}

		function DeleteGameEntry(id){
			$.get("./dbfunctions.php",{"cmd": "delete", "id" : id}, function(data){
				$("#showgames").html(data);
			});
		}

		function ShowGames(){
			$.get("./dbfunctions.php",{"cmd": "editablelist"}, function(data){
				$("#showgames").html(data);
			});
			return(false);
		}
		ShowGames();

	</script>
</body>
</html>