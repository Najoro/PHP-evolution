<?php
$mot = readline("entre un mot :");
$reverse = strrev($mot);
$lower = strtolower($reverse);
if($mot === $lower){
  echo("c'est un palendrome \n");
}else{
  echo("ce n'est pas un palendrome\n");
}
