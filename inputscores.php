<?
include('connect.php');
$cp = $_POST['cp'];
$thun = $_POST['thun'];
$pseudo = $_POST['pseudo'];
$date = date("d/m/Y");
$heure = date("H:i");

// on se connecte � MySQL
$db = mysql_connect($host, $user, $pass);

// on s�lectionne la base
mysql_select_db($bdd,$db);

// on cr�e la requ�te SQL
$sql = "INSERT INTO jeu(id,pseudo,coups,flouz,date,heure) VALUES('','$pseudo','$cp','$thun','$date','$heure')  ";


// on envoie la requ�te
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());


?>
<body onmouseover="window.location='scores.php?clas=cp'">
