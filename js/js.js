$(function(){
var div;
var img;
var logo_territoire =[
  "img/territoire_logo/chantiers-passerelles.png",
  "img/territoire_logo/constant-zoe.png",
  "img/territoire_logo/epicerie-mobile.png",
  "img/territoire_logo/fwee.png",
  "img/territoire_logo/Simplon.png"
] ;
var acteurs_logo=[
  "img/acteurs_logo/Ashoka.png",
  "img/acteurs_logo/etic.png",
  "img/acteurs_logo/InHomine.png",
  "img/acteurs_logo/mouves.png",
  "img/acteurs_logo/ronalpia.png"
];
var prives_logo=[
  "img/partenaire_logo/Grand-Lyon.png",
  "img/partenaire_logo/rhone-alpes.png"
];

var institutionnels_logo=[
  "img/partenaire_logo/bouygues.png",
  "img/partenaire_logo/caisse-epargne.png",
  "img/partenaire_logo/EDF.png",
  "img/partenaire_logo/Intrum-justitia.png",
  "img/partenaire_logo/Keolis.png",
  "img/partenaire_logo/orange.png",
  "img/partenaire_logo/laposte-circle.png",
  "img/partenaire_logo/Veolia.png"
];

$(".menu").mouseover(function(){
  $(".barmenu").fadeIn();
});

$(".menu").mouseout(function(){
  $(".barmenu").fadeOut();
});

function logo(logos,place){
  for(i=0;i<logos.length;i++){
    div=$("<div>");
    img=$("<img>");
    img.attr("src",logos[i]);
    img.css({
      "width":"100%",
      "height":"100%"
    });
    div.css({
      "background-color": "rgb(48, 60, 86)",
      // "width":"100px",
      // "height":"auto",
      "flex-grow":"0"
    });
    div.append(img);
    $(place).append(div);
  }
}

logo(logo_territoire,".territoire");
logo(acteurs_logo,".acteurs");
logo(prives_logo,".prives");
logo(institutionnels_logo,".institutionnels");
});//fin function
