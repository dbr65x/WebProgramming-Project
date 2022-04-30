<?php

define( 'DB_NAME', 'dbaldwin14' );
define( 'DB_USER', 'dbaldwin14' );
define( 'DB_PASSWORD', 'dbaldwin14');
define( 'DB_HOST', 'localhost' );

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


function DeleteGameEntry($id) {
  global $conn;

  $del = "DELETE FROM soulsborne WHERE id = '$id' ";
  $result = $conn->query($del);
  
}

function InsertGame($game) {
  global $conn;

  $insert ="INSERT INTO soulsborne (game) VALUES('$game')";
  $result = $conn->query($insert);

}

function InsertSuggestion($suggestion) {
  global $conn;

  $insert ="INSERT INTO suggestion (suggestion) VALUES('$suggestion')";
  $result = $conn->query($insert);

}

function ShowGames(){
  global $conn;

  $sql = "SELECT id, game FROM soulsborne";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row["id"];
      $delurl = "[<a href='' onclick=return(DeleteGameEntry('$id'))>delete</a>]";
      echo "id: " . $row["id"]. " - Name: " . $row["game"]. " $delurl<br>";
    }
  } else {
    echo "0 results";
  }

}

function Games(){
  global $conn;

  $sql = "SELECT id, game FROM soulsborne";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row["id"];
      $delurl = "[<a href='' onclick=return(DeleteGameEntry('$id'))>delete</a>]";
      echo "Name: " . $row["game"]. "<br>";
    }
  } else {
    echo "0 results";
  }

}

$cmd = $_GET['cmd'];

if($cmd == 'creategame'){
  InsertGame($_GET['game']);
}

else if($cmd == 'createsuggestion'){
  InsertSuggestion($_GET['suggestion']);
}

else if($cmd == 'delete') {
  $id = $_GET['id'];
  DeleteGameEntry($id);
}

else if($cmd == 'editablelist'){
  ShowGames();
}

else if($cmd == 'list'){
  Games();
}

mysqli_close($conn);

?>
