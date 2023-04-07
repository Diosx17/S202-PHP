<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/responsive.css">
    <script defer src="script/script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
</head>

<header>
    <nav class="navigation active">
      <a href="index.php"><img src="img/vikidia.png" alt="logo vikidia" id="logo" class="active"></a>
    </nav>
  </header>
<form method="POST" id="formulaire" action="result.php">
    <div class="search-box active">
        <input type="text" name="request" placeholder="Veuillez entrer votre recherche">
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>



<?php

$jar_path = ('main.jar');


if($_SERVER['REQUEST_METHOD']=='POST')
{
            
    echo'<div class="find-items active">
    <h2 class="titreh2 result-title">Résultats pour [RECHERCHE]</h2>
    </div>';
    
    if(isset($_POST['request']))
    {
        $value = $_POST['request'];
        $cmd = "java -jar ".$jar_path." ".$value;

        $result = shell_exec($cmd);
        $result = explode("\n", $result);
        if(empty($result[0]))
        {
            echo '<div class="rectangle">
            <img src="img/test.jpg" alt="image">
            <div class="article-content">
                <h2 style="text-decoration:none; cursor:none;">Aucun résultat</h2>
            </div>
            </div>';
        }
       

        foreach($result as $value)
        {
            
            if($value != "")
            {
                $split = explode(' : ', $value);
                $split = $split[0];
                $lien = $split;

                $split = explode('/wiki/', $split);

                $title = str_replace('_', ' ', $split[1]);

                
                echo '<div class="rectangle active">
                <img src="" alt="image" class="imageFromJS">
                <div class="article-content">
                <a href="'.$lien.'" target="_blank"><h2>'.$title.'</h2></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor</p> 
                </div>
                </div>';

            }
           
        }
    }
}
?>