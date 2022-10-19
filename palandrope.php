<?php
while(true){
  $mot = readline("entrer un mot :");

  if($mot === "" || $mot === " "){
    exit("Fin du programe \n");
  }
  $reverseMot = strtolower(strrev($mot));
  if(strtolower($mot) === $reverseMot){
    echo "c'est un palendrome \n";
  }else{
    echo "ce n'est pas un palendrome";
  }
}