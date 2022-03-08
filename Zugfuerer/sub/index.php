<?php
  if (isset($_POST['8c1'])and isset($_POST['15c1'])and isset($_POST['25c1'])and isset($_POST['8c2'])and isset($_POST['15c2'])and isset($_POST['25c2']))
  {
	$q8c1=$_POST['8c1'];
	$q15c1=$_POST['15c1'];
	$q25c1=$_POST['25c1'];
	$q8c2=$_POST['8c2'];
	$q15c2=$_POST['15c2'];
	$q25c2=$_POST['25c2'];
    $n1=$q8c1+$q15c1+$q25c1;
	$n2=$q8c2+$q15c2+$q25c2;
	$m1=8*$q8c1+15*$q15c1+25*$q25c1;
	$m2=8*$q8c2+15*$q15c2+25*$q25c2;
	$money=$m1+$m2;
	if($money>0){
	$a1=$m1/$money*100;
	$a2=$m2/$money*100;
	}
	
  }
  else {
	 $q8c1=0;
	$q15c1=0;
	$q25c1=0;
	$q8c2=0;
	$q15c2=0;
	$q25c2=0; 
  }  
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<title>calculator the game 4</title>
<meta name="description" content="Beschreibung des Inhalts (160 Zeichen)" />
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
	<div class="topnav">
 	 <a href="https://mogusballs.com/">main</a>
	 <a href="https://mogusballs.com/Zugfuerer/">Zugfuerer</a>
 	 <a class="active" href="https://mogusballs.com/Zugfuerer/sub/">sub</a>
    </div>
<h1>Testerus                                                                    Testerine</h1>
<form action="" method="post">
<input type="text" name="8c1" value="<?php echo $q8c1;?>">               8cent                <input type="text" name="8c2" value="<?php echo $q8c2;?>"><br>
<input type="text" name="15c1" value="<?php echo $q15c1;?>">               15cent               <input type="text" name="15c2" value="<?php echo $q15c2;?>"><br>
<input type="text" name="25c1" value="<?php echo $q25c1;?>">               25cent               <input type="text" name="25c2" value="<?php echo $q25c2;?>"><br>
<input type="text" name="n1" value="<?php echo $n1;?>">               Anzahl              <input type="text" name="n2" value="<?php echo $n2;?>"><br>
<input type="text" name="m1" value="<?php echo $m1;?>">               Gesamt               <input type="text" name="m2" value="<?php echo $m2;?>"><br>
<input type="text" name="money" value="<?php echo $money;?>"><br>
<input type="text" name="a1" value="<?php echo $a1;?>%">               Anteil               <input type="text" name="a2" value="<?php echo $a2;?>%"><br>
<input type="submit" name="Raten" value="ÃœberprÃ¼fe">
</form>
</body>
</html>
