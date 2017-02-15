<?
session_start();
$_SESSION['cpt']="15";

if($_SESSION["cheat"]== "ok"){
$zephra ="<br><br><br><center><b class=stop>Vous êtes interdit de jeu<br>Car vous êtes un tricheur!!!</b><br>(bouh!)<br>"; 
}
else {
$zephra ="<br><br><br><center><b class=stop>Vous êtes interdit de jeu</b><br><b class=stop2>(pour cause de dettes envers Gros Tony)</b><br>";

}

?>
<html>

<head><title>Ca$ino de la mort !!</title></head>
<style type="text/css">
.gg       {  color: #036fbd; text-decoration: none }
.gg:hover {  color: #02b1ca; text-decoration: none } 
	
.c1{background:#0a585c;color:red;font-size:20px;border-style: dotted}  
.c2{background:#0a585c;color:#fd9229;font-size:20px;border-style: dotted} 
.c3{background:#0a585c;color:#fffe11;font-size:20px;border-style: dotted}      
.c4{background:#0a585c;color:#36fc6c;font-size:20px;border-style: dotted}   

.stop{color:red;font-size:50px}
.stop2{color:red;font-size:15px}
</style>
<?
if (empty($_COOKIE["interdit"])){$_COOKIE["interdit"]="no";}
if($_COOKIE["interdit"]=="ok")
{
$tps =  round($_SESSION['temp']-time());
echo "$zephra
<br><br><br><b class=stop>Pendant $tps secondes</center>";
echo "<body onload=\"window.location='jeu.php'\">";
exit();
}

?>
<script language="Javascript">
var n = 3;
var max = 4; <!-- 4 -->
var vitesse = 500;
function flash()
{
if(n != max){n++}else{n = 1};
document.getElementById("bloc_texte").className = "c"+n;
setTimeout("flash()",vitesse)
}
window.onload = flash;
</script>

<center><table width=80%><tr><td>
C'est l'été, tu es sur le ramblais à St Jean de Monts
avec 2000 € en poche que viennent de te donner tes grands parents.<br>
Soudain, une enseigne tapageuse viens t'embrumer le cerveau : <font><b ID="bloc_texte">CA$INO</b></font><br>
Comme tu te précipites pour y rentrer, les vigiles te stoppent et te disent de dégager.<br>
Tu t'énerves un bon coup jusqu'a ce que le patron du casino, Gros Tony, ramène sa tronche.<br>
Reconnaissant en toi le sympathique touriste que tu es, il t'autorise aimablement à venir dépenser ton argent chez lui.<br>
On t'amène a une table de jeu ou l'on t'explique vaguement ces quelques règles :<br><br>
<center><table border=1 BGCOLOR=black bordercolor=#066d98><tr><td>
<font color=white>
<center>3 dés sont lancés</center>
° si 2 résultats sont identiques, tu gagnes le double de ta mise<br>
° si 3 résultats sont identiques, tu gagnes le quintuple de ta mise<br>
° si les 3 résultats sont différents, tu perds ta mise*<br>
° si tu arrives à 200.000 €, tu as gagné<br>
</td></tr></table><br></center>
Puis, comme tu es tout excité, on te fait comprendre que tu n'as pas intéret à rester trop longtemps
dans le coin, autrement dit, tu as le droit de miser jusqu'a 15 fois, après quoi on te virera.....<br><br>
Bonne chance!!!
</td></tr></table>
<form method="post" action="jeu2.php"> 
Mise : <input type="text" name="mise"><br> 
<input type=hidden name=t value=14>
<input type=hidden name=cash value=2000>
<input type=hidden name=nocheat value=ok>
<input type=submit value=jouer> 
</form>
<img src="img/tete1.gif" border="1">
<br><br><br>
<a href=scores.php?clas=cp  class=gg onmouseover="window.status='les scores';return true;" onmouseout="window.status='';return true;" >voir les scores</a>
</center>
<font size=1>* Plus un très convenable pourcentage</font>