<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link type="text/css" rel="stylesheet" href="css/style.css">
  <link type="text/css" rel="stylesheet" href="css/responsive.css">
  <script defer src="script/script.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>VikiSearch</title>
</head>
<body>
  
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

  <div class="bloc-historique"> 
    <div class="icone">

    </div>
    <div class="icone">
      
    </div>
    <div class="icone">
      
    </div>
    <div class="icone">
      
    </div>
    <div class="icone">
      
    </div>
    <div class="icone">
      
    </div>
  </div>

  
  <div class="reveal">
    <div id="corps">
      <h2 class="titreh2" id="notreselect">Découvrir</h2>
      <div class="random-article">

<?php
//lire fichier txt et recuperer 12 liens aleatoires
$lines = file('liens.txt');
$rand_keys = array_rand($lines, 12);

foreach ($rand_keys as $key) 
{

    $title = $lines[$key];
    $title = urldecode($title);
    $title = str_replace("https://fr.vikidia.org/wiki/", "", $title);
    $title = str_replace("_", " ", $title);
   

    echo"<div class='article'><a href='".$lines[$key]."' target='_blank'><img src='' alt='image aleatoire'></a><div class='article-content'><p><a class='liensrandom' href='' target='_blank'>".$title."</a></p></div></div>";
}

?>
        
       
      </div>
    </div>
  </div>
</body>
</html>