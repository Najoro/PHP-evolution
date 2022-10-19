<?php
$horaires = [];
while(true){
    $question = true;
    $ouverture = (int)readline("ouverture : ");
    $fermeture = (int)readline("fermeture : ");
    if($ouverture >= $fermeture){
      echo "l'ouverture doi inferieur aux fermeture";
      break;
    }else{
        $horaires[] = [
            "ouvert"=>$ouverture,
            "fermer" =>$fermeture
        ];
        $action = readline("entrez une nouvelle horaire (o/n)?");
        if($action === "n"){
            break;
        }
    }
}
// ouverture du magasin
echo "les horaire du magasin : \n";
foreach($horaires as $horaire){
    echo "-[{$horaire[ouvert]}H => {$horaire[fermer]}H] \n";
}
//visite clien

$heurClien = (int)readline("a quelle heur voulez vous passer aux magasin ?");
$heurTrouver = false;
foreach($horaires as $horaire){
    if($heurClien >= $horaire["ouvert"] && $heurClien <= $horaire["fermer"]){
        $heurTrouver = true;
    }
}
if($heurTrouver){
    echo "magasin ouvert \n";
}else{
    echo "magasin fermer \n";
}