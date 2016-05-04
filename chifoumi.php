<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Chifoumi</title>
</head>

<body>
    <form method="get" action="chifoumi.php">
      <legend>
        Pierre,Feuille,Ciseaux
      </legend>
      <p>
        Coup ?
        <a href="?coup=0"><img src="./images/pierre.png"></a>
        <a href="?coup=1"><img src="./images/feuille.png"></a>
        <a href="?coup=2"><img src="./images/ciseaux.png"></a>
      </p>
    </form>
  
  <?php
  if(isset($_GET['coup'])){
    $coup=$_GET['coup'];
    $ordi=rand(0,2);
    echo "<legend>Votre coup : </legend>";
    if($coup == 0){
      echo "<img src=\"./images/pierre.png\">";
    }
    if ($coup == 1){
      echo "<img src=\"./images/feuille.png\">";
    }
    if ($coup == 2){
      echo "<img src=\"./images/ciseaux.png\">";
    }
    echo "<legend>Coup ordinateur : </legend>";
    if($ordi == 0){
      echo "<img src=\"./images/pierre.png\">";
    }
    if ($ordi == 1){
      echo "<img src=\"./images/feuille.png\">";
    }
    if ($ordi == 2){
      echo "<img src=\"./images/ciseaux.png\">";
    }
    
    if ($ordi == $coup){
      echo "<legend>Egalite !</legend>";
    }
    else if ($ordi == 1 and $coup == 2){
      echo "<legend>Victoire !</legend>";
    }
    else if ($ordi == 0 and $coup ==1){
      echo "<legend>Victoire !</legend>";
    }
    else if ($ordi == 2 and $coup == 0){
      echo "<legend>Victoire !</legend>";
    }
    else {
      echo "<legend>Defaite !</legend>";
    }
      
  }
  ?>
</body>

</html>