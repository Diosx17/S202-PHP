/*
*fonction pour le mode nuit et jour
*lorsque l'on clique sur le bouton cela lance cette fonction
*on alterne à l'aide du modulo (variable i) entre le mode jour et le mode nuit
*/
var couleurB = "#5C97FF";


document.querySelector('#formulaire').addEventListener('submit', function() {
    document.querySelector('#formulaire button[type="submit"]').classList.add('loading');
  });

i=0;
var titreh2 = document.querySelector('.titreh2');
var titre = document.querySelector('.result-title');
var corps = document.body.querySelector("#corps");
function appliqueNuit() {
    if (i%2==0) {//mode nuit
    document.body.style.color = "rgb(0,0,0)";
    document.body.style.backgroundColor = "rgb(60,0,80)";
    couleurB = "#600080";
    background = "rgb(60,0,80)"
    if (corps){
        corps.style.backgroundColor = "#070A26";
    }
    document.getElementById("logo").style.filter = "invert(100%)"; 
    localStorage.setItem("modeSombre", "true");
    titreh2.style.color = "rgb(255,255,255)";
    if (titre) {
        titre.style.color = 'white';
      }
    }
    else {//mode jour
    document.body.style.color = "rgb(0, 0, 0)";
    document.body.style.backgroundColor = "#5C97FF";
    if(corps){
        corps.style.backgroundColor = "rgb(255,255,255)";
    }
    document.getElementById("logo").style.filter = "invert(0%)";
    couleurB = "#5C97FF";
    localStorage.setItem("modeSombre", "false");
    titreh2.style.color = "rgb(0,0,0)";
    if (titre) {
        titre.style.color = 'black';
      }
    }
    i++;
}

var modeSombre = localStorage.getItem("modeSombre");

if (modeSombre === "true") {
  appliqueNuit();
}

/* window.addEventListener('load', function () {
    var searchButton = document.querySelector('.search-box button[type="submit"]');
    var searchBox = document.querySelector('.search-box');
    var logo = document.querySelector('#logo');
    var reveal = document.querySelector('.reveal');
    var randomarticle = document.querySelector('.random-article');
    var blochistorique = document.querySelector('.bloc-historique');
    var nav = document.querySelector('.navigation');
    var finditems = document.querySelector('.find-items');
    var ns = document.querySelector('#notreselect');
    var nightmode = document.querySelector('.nightmode');

    searchButton.addEventListener('click', function (event) {
        searchBox.classList.add('active');
        logo.classList.add('active');
        reveal.classList.add('active');
        randomarticle.classList.add('suppr');
        blochistorique.classList.add('suppr');
        nav.classList.add('active');
        finditems.classList.add('active');
        ns.classList.add('suppr');
        nightmode.classList.add('suppr');
    });
}); */

/*document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner la balise HTML à modifier
    var maBalise = document.querySelector('.searchbox2');
  
    // Vérifier si la balise HTML est présente sur la page
    if (maBalise) {
      // Ajouter la classe à la balise HTML
      maBalise.classList.add('active');
    }
  });*/
  



    //  Andy ------------------------------------------------------------
    /*const checkbox = document.querySelector('#infobulle2');
    var acc = "#2d2c2c"
    checkbox.addEventListener('click', function() {
        document.body.style.background = acc;
        if (acc=="#2d2c2c"){
            acc = "white"
        }
        else{
            acc = "#2d2c2c"
        }
        
    });*/
    // fin Andy -----------------------------------------------------------
    
    //à continuer c'est pour la barre de recherche qui se met en haut quand on scroll
    /*const searchBar = document.querySelector('.search-box');
    window.addEventListener('scroll', () => {
    if (window.scrollY > searchBar.offsetTop) {
        searchBar.classList.add('fixed');
    } else {
        searchBar.classList.remove('fixed');
    }
    });*/


window.addEventListener('scroll', revealOnScroll);

function revealOnScroll() {
    var reveals = document.querySelectorAll('.reveal');
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var revealTop = reveals[i].getBoundingClientRect().top;
        var revealPoint = 150;

        if (revealTop < windowHeight - revealPoint) {
            reveals[i].classList.add('active');
        }/* else {
            reveals[i].classList.remove('active');
        }*/
    }
}


