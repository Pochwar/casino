<?
session_start();
$_SESSION['cpt']--;
?>
<head><title>Ca$ino de la mort !!</title></head>
<body style="margin-left: 0px; margin-right: 0px;" topmargin="4" bgcolor="#ffffff">
<style>
.gg       {  color: #036fbd; text-decoration: none }
.gg:hover {  color: #02b1ca; text-decoration: none } 
.d        {border-color: red; vertical-align:bottom}
.fuct {vertical-align:top}
.dfg {vertical-align:bottom}
</style>
<?php 
$cash = $_POST['cash'];
$mise = $_POST['mise']; 
$t = $_POST['t']; 
$tt = $t - 1;
if ($t > 7){$col = "black";}
elseif ($t > 4){$col = "#fd9229";}
elseif ($t <= 4){$col = "red";}
$b1= rand(1, 6);
$b2= rand(1, 6);
$b3= rand(1, 6);
$banq = $cash;
$d1 = "img/d1.gif";
$d2 = "img/d2.gif";
$d3 = "img/d3.gif";
$d4 = "img/d4.gif";
$d5 = "img/d5.gif";
$d6 = "img/d6.gif";
if ($b1 == 1){$img1 = $d1;}
elseif ($b1 == 2){$img1 = $d2;}
elseif ($b1 == 3){$img1 = $d3;}
elseif ($b1 == 4){$img1 = $d4;}
elseif ($b1 == 5){$img1 = $d5;}
elseif ($b1 == 6){$img1 = $d6;}

if ($b2 == 1){$img2 = $d1;}
elseif ($b2 == 2){$img2 = $d2;}
elseif ($b2 == 3){$img2 = $d3;}
elseif ($b2 == 4){$img2 = $d4;}
elseif ($b2 == 5){$img2 = $d5;}
elseif ($b2 == 6){$img2 = $d6;}

if ($b3 == 1){$img3 = $d1;}
elseif ($b3 == 2){$img3 = $d2;}
elseif ($b3 == 3){$img3 = $d3;}
elseif ($b3 == 4){$img3 = $d4;}
elseif ($b3 == 5){$img3 = $d5;}
elseif ($b3 == 6){$img3 = $d6;}

if($t == 0)
{
$tete= "teteperdu.gif";
}
elseif (($b3 == $b2) && ($b2 == $b1))  
{
$gaina = $mise * 5;
$banqa = $cash + $gaina;
 if ($banqa >= 200000)
 {
 $tete= "tetegagne.gif";
 }
 else
 {
 $tete= "tetegagn.gif";
 }
}
elseif (($b1 == $b2) || ($b3 == $b2) || ($b1 == $b3))
{
$gaina = $mise * 2;
$banqa = $cash + $gaina;
 if ($banqa >= 200000)
 {
 $tete= "tetegagne.gif";
 }
 else
 {
 $tete= "tetegagn.gif";
 }
}
else
{
$gaina = $mise * 2;
$banqa = $cash - $gaina;
 if ($banqa == 0 )
 {
 $tete = "teteperdu.gif";
 }
 elseif ($banqa < 0 )
 {
 $tete = "tetemort.gif";
 }
 else
 {
 $tete = "teteperd.gif";
 }
} 

if ($t != $_SESSION['cpt']){
echo "<center><table border=1 width=30%><tr><td align=center>Attention !! Actualiser la page<br>est une façon de tricher!<br><br>Or tricher c'est pas bien !!!<br>(surtout quand on se fait gauler)<br><br><a href=loose.php?tmp=cheat  class=gg onmouseover=\"window.status='jouer';return true;\" onmouseout=\"window.status='';return true;\" >rejouer</a></td></tr></table></center>";
echo "<center><img src=img/cheat.gif border=1><br>Oups...</center>";
exit();
}


if ($mise > $banq)
{
$tt = $t;
$_SESSION['cpt']++;
echo "<center><table border=1 width=30%><tr><td align=center>Vous ne pouvez pas miser autant</td></tr></table></center>";
echo "<center><form method=post action=jeu2.php?cash=$banq> ";
echo "Mise : <input type=text name=mise value=$banq><br><input type=hidden name=t value=$tt><input type=hidden name=cash value=$banq> ";
echo "<input type=submit value=jouer></form></center>"; 
exit(); 


}
elseif ($mise == 0)
{
$tt = $t;
$_SESSION['cpt']++;
echo "<center><table border=1 width=30%><tr><td align=center>Vous devez miser pour jouer</td></tr></table></center>";
echo "<center><form method=post action=jeu2.php?cash=$banq> ";
echo "Mise : <input type=text name=mise value=$banq><br><input type=hidden name=t value=$tt><input type=hidden name=cash value=$banq> ";
echo "<input type=submit value=jouer></form></center>"; 
exit(); 
}
elseif ($mise < 0)
{
$tt = $t;
$_SESSION['cpt']++;
echo "<center><table border=1 width=30%><tr><td align=center>Vous ne pouvez pas miser une somme négative</td></tr></table></center>";
echo "<center><form method=post action=jeu2.php?cash=$banq> ";
echo "Mise : <input type=text name=mise value=$banq><br><input type=hidden name=t value=$tt><input type=hidden name=cash value=$banq> ";
echo "<input type=submit value=jouer></form></center>"; 
exit(); 
}
elseif (empty($mise))
{
$tt = $t;
$_SESSION['cpt']++;
echo "<center><table border=1 width=30%><tr><td align=center>Vous devez miser pour jouer</td></tr></table></center>";
echo "<center><form method=post action=jeu2.php?cash=$banq> ";
echo "Mise : <input type=text name=mise value=$banq><br><input type=hidden name=t value=$tt><input type=hidden name=cash value=$banq> ";
echo "<input type=submit value=jouer></form></center>"; 
exit(); 
}
else
{
if (($b3 == $b2) && ($b2 == $b1))
{
$gain = $mise * 5;
$banq = $cash + $gain;
if ($banq <= 0){
$billet = "thunperdu.gif";}
elseif ($banq <= 200){
$billet = "thuncho.gif";}
elseif ($banq <= 20000){
$billet = "thun.gif";}
elseif ($banq < 200000){
$billet = "thuncool.gif";}
elseif ($banq >= 200000){
$billet = "thunwin.gif";}
echo "<center><table border=1 width=70%><tr><td align=center>

<img src=$img1 border=1 class=d> <img src=$img2 border=1 class=d> <img src=$img3 border=1 class=d> 
<hr class=fuct>
<font color=red>Bravo tu as gagné $gain € !!!</font>

</td></tr></table><br><br>";
echo "opération : ".$cash." + (".$mise." x 5) = ".$banq." €<br><br>";
echo "<table border=0 bordercolor=blue width=100%><tr><td align=center width=40%><img src=img/$tete border=1></td><td align=center width=20%>";
echo "<table border=1 width=100%><tr><td align=center>Ta Banque<br><hr>$banq €</td></tr></table>";
echo "</td><td align=center width=40%><img src=img/$billet></td></tr></table></center>";
}
elseif ($b1 == $b2)
{
$gain = $mise * 2;
$banq = $cash + $gain;
if ($banq <= 0){
$billet = "thunperdu.gif";}
elseif ($banq <= 200){
$billet = "thuncho.gif";}
elseif ($banq <= 20000){
$billet = "thun.gif";}
elseif ($banq < 200000){
$billet = "thuncool.gif";}
elseif ($banq >= 200000){
$billet = "thunwin.gif";}
echo "<center><table border=1 width=70%><tr><td align=center>

<img src=$img1 border=1 class=d> <img src=$img2 border=1 class=d> <img src=$img3 class=dfg> 
<hr class=fuct>
Bravo tu as gagné $gain € !!!

</td></tr></table><br><br>";
echo "opération : ".$cash." + (".$mise." x 2) = ".$banq." €<br><br>";
echo "<table border=0 bordercolor=blue width=100%><tr><td align=center width=40%><img src=img/$tete border=1></td><td align=center width=20%>";
echo "<table border=1 width=100%><tr><td align=center>Ta Banque<br><hr>$banq €</td></tr></table>";
echo "</td><td align=center width=40%><img src=img/$billet></td></tr></table></center>";
}
elseif ($b1 == $b3)
{
$gain = $mise * 2;
$banq = $cash + $gain;
if ($banq <= 0){
$billet = "thunperdu.gif";}
elseif ($banq <= 200){
$billet = "thuncho.gif";}
elseif ($banq <= 20000){
$billet = "thun.gif";}
elseif ($banq < 200000){
$billet = "thuncool.gif";}
elseif ($banq >= 200000){
$billet = "thunwin.gif";}
echo "<center><table border=1 width=70%><tr><td align=center>

<img src=$img1 border=1 class=d> <img src=$img2 class=dfg> <img src=$img3 border=1 class=d> 
<hr class=fuct>
Bravo tu as gagné $gain € !!!

</td></tr></table><br><br>";
echo "opération : ".$cash." + (".$mise." x 2) = ".$banq." €<br><br>";
echo "<table border=0 bordercolor=blue width=100%><tr><td align=center width=40%><img src=img/$tete border=1></td><td align=center width=20%>";
echo "<table border=1 width=100%><tr><td align=center>Ta Banque<br><hr>$banq €</td></tr></table>";
echo "</td><td align=center width=40%><img src=img/$billet></td></tr></table></center>";
}
elseif ($b3 == $b2)
{
$gain = $mise * 2;
$banq = $cash + $gain;
if ($banq <= 0){
$billet = "thunperdu.gif";}
elseif ($banq <= 200){
$billet = "thuncho.gif";}
elseif ($banq <= 20000){
$billet = "thun.gif";}
elseif ($banq < 200000){
$billet = "thuncool.gif";}
elseif ($banq >= 200000){
$billet = "thunwin.gif";}
echo "<center><table border=1 width=70%><tr><td align=center>

<img src=$img1 class=dfg> <img src=$img2 border=1 class=d> <img src=$img3 border=1 class=d> 
<hr class=fuct>
Bravo tu as gagné $gain € !!!

</td></tr></table><br><br>";
echo "opération : ".$cash." + (".$mise." x 2) = ".$banq." €<br><br>";
echo "<table border=0 bordercolor=blue width=100%><tr><td align=center width=40%><img src=img/$tete border=1></td><td align=center width=20%>";
echo "<table border=1 width=100%><tr><td align=center>Ta Banque<br><hr>$banq €</td></tr></table>";
echo "</td><td align=center width=40%><img src=img/$billet></td></tr></table></center>";
}

else
{
$gain = $mise + ($mise*15/100) ; //pourcentage de 15%
$banq = $cash - $gain;
if ($banq <= 0){
$billet = "thunperdu.gif";}
elseif ($banq <= 200){
$billet = "thuncho.gif";}
elseif ($banq <= 20000){
$billet = "thun.gif";}
elseif ($banq < 200000){
$billet = "thuncool.gif";}
elseif ($banq >= 200000){
$billet = "thunwin.gif";}
echo "<center><table border=1 width=70%><tr><td align=center>

<img src=$img1 class=dfg> <img src=$img2 class=dfg> <img src=$img3 class=dfg> 
<hr class=fuct>
Désolé tu as perdu $gain €

</td></tr></table><br><br>";
echo "opération : ".$cash." - (".$mise."+ taxe) = ".$banq." €<br><br>";
echo "<table border=0 bordercolor=blue width=100%><tr><td align=center width=40%><img src=img/$tete border=1></td><td align=center width=20%>";
echo "<table border=1 width=100%><tr><td align=center>Ta Banque<br><hr>$banq €</td></tr></table>";
echo "</td><td align=center width=40%><img src=img/$billet></td></tr></table></center>";
}


if ($banq == 0 )
{
echo "<center><table border=1 width=30%><tr><td align=center>Tu n'as plus d'argent,<br> barres toi!!<br><a href=jeu.php   class=gg onmouseover=\"window.status='jouer';return true;\" onmouseout=\"window.status='';return true;\" >rejouer</a></td></tr></table></center>";
exit(); 
}
if ($banq < 0 )
{
$banqa = -$banq;
echo "<center><table border=1 width=30%><tr><td align=center>Tu es ruiné, tu dois $banqa € à Gros Tony,<br> ta vie est finie!!<br><a href=loose.php?tmp=$banqa  class=gg onmouseover=\"window.status='jouer';return true;\" onmouseout=\"window.status='';return true;\" >rejouer</a></td></tr></table></center>";
echo "<center><img src=img/uncool.gif border=1><br>Oups...</center>";
exit(); 
}
if ($banq >= 200000)
{
echo "<center><table border=1 width=50%><tr><td align=center>Tu as atteint les 200.000 €, tu as gagné!!<br></td></tr></table></center>";
echo "<center><img src=img/cool.gif><br>Yeah!!</center>";
$nb = 15 - $t;
echo "<center><form method=post action=insscore.php><input type=hidden name=nb_coups value=$nb><input type=hidden name=flouz value=$banq>";
echo "<input type=submit value=\"inscrire le score\"> </form></center>";
exit(); 
}
}
if ($t == 0)
{
echo "<center><table border=1 width=50%><tr><td align=center><font color=red>Tu es ici depuis trop longtemps!!!</font><br>On te vire à coups de pieds au cul<br>en te carrotant tes $banq €<br><a href=jeu.php  class=gg onmouseover=\"window.status='jouer';return true;\" onmouseout=\"window.status='';return true;\" >rejouer</a></td></tr></table></center>";
echo "<center><img src=img/badlol.gif border=1><br>Carrot'</center>";
exit(); 
}

?>
<center><form method="post" action="jeu2.php"> 
Mise : <input type="text" name="mise" value=<? echo $banq; ?>><br> 
<input type=hidden name=cash value=<? echo $banq; ?>>
<input type=hidden name=t value=<? echo $tt; ?>>
<input type=submit value=jouer> 
</form>
</center>

<br><br><center><font color=<? echo $col; ?>><? echo $t; ?></font><center><br><br>

