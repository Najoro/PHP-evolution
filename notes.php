<?php
/**
 * demander a l'utilisater les liste des notes ou taper fin
 * chaque note est sauvegarder dans une tableuax $note 
 * a la fin on addicher le tableaux des notes que l'utilisateur a entrer
 */
//-------------------------------------------------------------------------------------
// $notes= [];
// $user = null;

// while($user !== "fin"){
//   $user = readline("entrer votre note ou 'FIN' : ");
  
//   if($user !== "fin" && $user === (int)$user){
//     $notes[] = $user;
//   }elseif(!(int)$user && $user !== "fin"){
//     echo ("pas de chaine de caracter autre que 'FIN' \n");
//   }
// }
// foreach($notes as $note){
//   echo("- $note \n");
// }
//-------------------------------------------------------------------------------------
$notes = [];
while(true){
  $action = readline("entrer votre nots ou tape \"fin\" :");
  if($action === "fin"){
    break;
  }elseif((int)$action){
    $notes[] = $action;
  }else{
    echo("entre une nombre ou taper fin \n");
  }
}
foreach($notes as $note){
  echo("- $note \n");
}
