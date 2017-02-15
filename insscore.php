<head><title>Ca$ino de la mort !!</title></head>
<style>
.gg       {  color: #036fbd; text-decoration: none }
.gg:hover {  color: #02b1ca; text-decoration: none } 
</style>
<? 
$nb_coups = $_POST['nb_coups']; 
$flouz = $_POST['flouz']; 
?>

<center>
<form method="post" action="inputscores.php"> 
Pseudo : <input type="text" name="pseudo" value=><br> 
nombres de coups : <input style="border:0" type="text" name="cp" value=<? echo $nb_coups; ?> readonly><br> 
Thune ammassée : <input style="border:0" type="text" name="thun" value=<? echo $flouz; ?> readonly><br> 
<input type=submit value=valider></form>
</center>



