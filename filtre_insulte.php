<?php
$insultes = ["merde", "con", "pute"];
$phrase = readline("phrase ? :");
$phrase = str_replace($insultes, ["****","*********", "*"], $phrase);
foreach($insultes as $insulte){
  $len  = strlen($insulte);
  $repeat = str_repeat("*", $len);
  $phrase = str_replace($insulte, $repeat, $phrase);
}
echo "$phrase \n ";
echo "$premier \n";
