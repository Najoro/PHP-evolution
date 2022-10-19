<?php
/**
 * on veut demander a l'utiliateur d'ajoter une horaire d'un magasin 
 * on demande a l'utiisateur une heure et on lui dira si le magasin et ouvert
*/
$horaires = [];
while(true){
  $debut =(int)readline("Heured'ouverture :");
  $fin = (int)readline("Heure de fermeture :");
  if($debut >= $fin){
    echo("ouverture doit inferieuer a la fin \n");
    break;
  }else{
    $horaires[] = [$debut,$fin];
    $action = readline("vouler vous entre une nouvelle horaire (o/n)? :");
    if($action === 'n'){
      break;
    }
  }
}
//teste l'horaire d'ouverture du magasin
// $passer = (int)readline("a quelle heur vous passeriez aux magasin ? :");
// $testHeur = false;
// foreach($horaires as $horaire){
//   if($horaire[0] <= $testHeur && $testHeur <= $horaire[1]){
//     $testHeur = true;
//   }
// }
// if($testHeur){
//   echo("le magasin sera ouvert \n");
// }else{
//   echo("le magasin sera femer \n");
// }
//-----------------------------------
//afficher tous les horaire du magasin
echo("l'heure d'ouverture du magasin");
foreach($horaires as $horaire){
  echo("- {$horaire[0]}h a {$horaire[1]}h \n");
}