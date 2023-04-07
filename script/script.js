/*
*fonction pour le mode nuit et jour
*lorsque l'on clique sur le bouton cela lance cette fonction
*on alterne à l'aide du modulo (variable i) entre le mode jour et le mode nuit
*/
var couleurB = "#5C97FF";

i=0;
var titreh2 = document.querySelector('.titreh2');
var titre = document.querySelector('.result-title');
var corps = document.body.querySelector("#corps");
var nav = document.querySelector('.navigation.active');
function appliqueNuit() {
    if (i%2==0) {//mode nuit
    document.body.style.color = "rgb(0,0,0)";
    document.body.style.backgroundColor = "rgb(65,0,80)";
    if(nav){
        nav.style.backgroundColor = "rgb(40,0,80)";
    }
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

document.querySelector('#formulaire').addEventListener('submit', function() {
    document.querySelector('#formulaire button[type="submit"]').classList.add('loading');
  });


var modeSombre = localStorage.getItem("modeSombre");

if (modeSombre === "true") {
  appliqueNuit();
}


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


async function randomlinksfromtxt(file)
{
    let table = Array(12);
    
    const reader  = new FileReader();
    fichier = await fetch(file);
    const text = await fichier.text();
    let lignes = text.split("\n");
    let nbLignes = lignes.length;
    let nbAleatoire = 0;
    let i = 0;
    while(i < 12)
    {
        nbAleatoire = Math.floor(Math.random() * nbLignes);
        if(!table.includes(lignes[nbAleatoire]))
        {
            table[i] = lignes[nbAleatoire];
            ++i;
        }
    }

    return table;

}

function writeOnHtmlLinks()
{
    randomlinksfromtxt("liens.txt").then(function(tab)
    {
        for(let i = 0; i < 12; i++)
        {

            let url = tab[i]; // Remplacez cet URL par celui que vous voulez récupérer l'image

            //recupere le titre de la page
            let titre = tab[i].split("/")[tab[i].split("/").length - 1];
            titre = titre.split("_").join(" ");
            titre = decodeURI(titre);

            //on recup img
            fetch(url, {mode: 'no-cors'})
            .then(response => response.text())
            .then(html => {
                let parser = new DOMParser();
                let doc = parser.parseFromString(html, "text/html");
                let img = doc.querySelector('img');
                console.log(img);
                if (img) {
                let imgUrl = img.src;
                // Maintenant que vous avez l'URL de l'image, vous pouvez l'afficher sur votre page HTML
                let imgElement = document.createElement('img');
                imgElement.src = imgUrl;
                console.log(imgUrl);
                

            //ajoute le lien et le titre et l'image dans le html
            if(document.getElementsByClassName('random-article')[0])
            document.getElementsByClassName('random-article')[0].innerHTML += "<div class='article'><a href='" + tab[i] + "' target='_blank'><img src='" + imgElement +'" alt="image aleatoire"></a><div class="article-content"><p><a class="liensrandom" href="'+tab[i]+"' target='_blank'>" + titre + "</a></p></div></div>";
                }
            })
            .catch(error => console.log(error));
   

           
        }
    });
}

writeOnHtmlLinks();





