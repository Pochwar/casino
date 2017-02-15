<?
session_start();
$tmp= $_GET['tmp'];
if ($tmp == "cheat"){$_SESSION["cheat"]= "ok";$tmp="6000";}else{$_SESSION["cheat"]= "no";}
$fgh = "1000";
$tp = $tmp/$fgh;
if ($tp > "12"){$tp = "12";}
setcookie("interdit","ok",time()+$tp); 
$_SESSION["temp"]= time()+$tp;
echo "<body onload=\"window.location='jeu.php'\">";

?>
