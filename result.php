<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/responsive.css">
    <script defer src="script/apparition.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
</head>

<header>
    <nav class="navigation">
      <a href="index.php"><img src="img/vikidia.png" alt="logo vikidia" id="logo"></a>
      <div class="nightmode">
          <input onclick=appliqueNuit() type="checkbox" id="mode-switch">
          <label for="mode-switch" class="mode-switch-label">
            <span class="mode-switch-icon"></span>
          </label>
      </div>
    </nav>
  </header>
<form method="POST" id="formulaire" action="result.php">
    <div class="search-box">
        <input type="text" name="request" placeholder="Veuillez entrer votre recherche">
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>



<?php

$jar_path = ('main.jar');


if($_SERVER['REQUEST_METHOD']=='POST')
{

    if(isset($_POST['request']))
    {
        $value = $_POST['request'];
        $cmd = "java -jar ".$jar_path." ".$value;

        $result = exec($cmd);
        $result = explode("\n", $result);
        foreach($result as $value)
        {

        echo '<div class="rectangle">
        <img src="img/test.jpg" alt="image">
        <div class="article-content">
        <a href="https://fr.vikidia.org/wiki/Histoire">'.$value.'</a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor</p>            <h2>Le Moyen Âge | Archéologie | culture.fr</h2>
        </div>
        </div>';
        }
    }
}
?>
