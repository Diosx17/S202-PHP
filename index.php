<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link type="text/css" rel="stylesheet" href="css/style.css">
  <link type="text/css" rel="stylesheet" href="css/responsive.css">
  <script defer src="script/apparition.js"></script>
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

  <form method="POST" id="formulaire">
    <div class="search-box">
      <input type="text" name="q" placeholder="Veuillez entrer votre recherche">
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
        <div class="article">
          <a href=""><img src="img/viki1.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
        <div class="article">
          <a href=""><img src="img/viki2.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
        <div class="article">
          <a href=""><img src="img/viki3.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
        <div class="article">
          <a href=""><img src="img/viki1.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
        <div class="article">
          <a href=""><img src="img/viki2.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
        <div class="article">
          <a href=""><img src="img/viki3.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
        <div class="article">
          <a href=""><img src="img/viki1.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
        <div class="article">
          <a href=""><img src="img/viki2.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
        <div class="article">
          <a href=""><img src="img/viki3.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
        <div class="article">
          <a href=""><img src="img/viki1.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
        <div class="article">
          <a href=""><img src="img/viki2.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
        <div class="article">
          <a href=""><img src="img/viki3.jpg" alt="image"></a>
          <div class="article-content">
            <p>Ici on peut mettre le titre de la page ou une description</p>
          </div>
        </div>
      </div>
    

      <div class="find-items">
       
      <?php 
        // si le formulaire a été soumis on ecrit dans la console
        if(isset($_POST['q'])){
          echo '<script>console.log("formulaire soumis")</script>';
        }
      
        
     

          ?>
        
    
      </div>
    </div>
  </div>
</body>
</html>