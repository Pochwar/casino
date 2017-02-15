<head>
	<title>Scores</title>
</head>
<?
$clas = $_GET['clas'];
if ($clas == "cp"){
$clas= "coups,-flouz,date,heure,pseudo";$cl = "nombre de coups</b>)";$col1="";$col2="red";$col3="";$col4="";}
elseif ($clas == "fl"){
$clas= "-flouz,coups,date,heure,pseudo";$cl = "thune acquise</b>)";$col1="";$col2="";$col3="red";$col4="";}
elseif ($clas == "dt"){
$clas= "date,heure,coups,-flouz,pseudo";$cl = "date</b>)";$col1="";$col2="";$col3="";$col4="red";}
elseif ($clas == "ps"){
$clas= "pseudo,coups,-flouz,date,heure";$cl = "pseudo</b> on est d'accord �a sert a rien)";$col1="red";$col2="";$col3="";$col4="";}
?>
<center><b><big>SCORES</big></b><br>
<table width=90%>
<tr>
       <td align= left width=15%><a href=jeu.php  class=gg onmouseover="window.status='jouer';return true;" onmouseout="window.status='';return true;" >Jouer</a></td>
       <td align=center width=60%>(classement par <b><? echo "$cl"; ?></td>
       <td align=right width=15%><a href=jeu.php  class=gg onmouseover="window.status='jouer';return true;" onmouseout="window.status='';return true;" >Jouer</a></td>
</tr>
</table>


<br>
<style>
.gg       {  color: #036fbd; text-decoration: none }
.gg:hover {  color: #02b1ca; text-decoration: none }
.gt       {  color: #c6e9f4; text-decoration: none;font-weight: bold }
.gt:hover {  color: #02b1ca; text-decoration: none;font-weight: bold }
</style>
<table border=1 width=90% BGCOLOR=black bordercolor=#066d98><tr><td width=10% align=center>
<font color=white>RANG</td><td width=30% align=center>
<a href=scores.php?clas=ps  class=gt onmouseover="window.status='les scores';return true;" onmouseout="window.status='';return true;" >
<font color=<? echo "$col1"; ?>>PSEUDO</font></a></td><td width=10% align=center>
<a href=scores.php?clas=cp  class=gt onmouseover="window.status='les scores';return true;" onmouseout="window.status='';return true;" >
<font color=<? echo "$col2"; ?>>COUPS</font></a></td><td width=20% align=center>
<a href=scores.php?clas=fl  class=gt onmouseover="window.status='les scores';return true;" onmouseout="window.status='';return true;" >
<font color=<? echo "$col3"; ?>>THUNE ACQUISE</font></a></td><td width=30% align=center>
<a href=scores.php?clas=dt  class=gt onmouseover="window.status='les scores';return true;" onmouseout="window.status='';return true;" >
<font color=<? echo "$col4"; ?>>DATE</font></a></td></tr></table>
<?php
include('connect.php');

// on se connecte à MySQL
$db = mysql_connect($host, $user, $pass);

// on sélectionne la base
mysql_select_db($bdd,$db);

// on crée la requête SQL
$sql = "SELECT pseudo,coups,flouz,date,heure FROM jeu ORDER BY $clas";

// on envoie la requête
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
$i = 1;
// on fait une boucle qui va faire un tour pour chaque enregistrement
while($data = mysql_fetch_assoc($req))
    {

	// on affiche les informations de l'enregistrement en cours
	echo "<table border=1 width=90% BGCOLOR=black bordercolor=#066d98><tr><td width=10% align=center><font color=white> &nbsp;".$i++."</td><td width=30% align=center><font color=white> &nbsp;".$data['pseudo']."</td><td width=10% align=center><font color=white> &nbsp;".$data['coups']."</td><td width=20% align=center><font color=white> &nbsp;".$data['flouz']." �</td><td width=30% align=center><font color=white> &nbsp;le ".$data['date']."<br>� ".$data['heure']."</td></tr></table>";
    }

// on ferme la connexion à mysql
mysql_close();
?>
<br><br>
<a href=jeu.php  class=gg onmouseover="window.status='jouer';return true;" onmouseout="window.status='';return true;" >Jouer</a>
</center>
