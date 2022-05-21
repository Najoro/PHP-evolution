<?php
$notes = [10,20,13];
$sum = array_sum($notes);
$compte = count($notes);
echo("vous avez " . (round(($sum / $compte), 2)) . " de moyenne \n");
