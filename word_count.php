<?php

function wordCount($string){
  $tableauDeMotEtChiffre = str_word_count($string, 1, '123456789');
  $enLowerCase  = array_map('strtolower', $tableauDeMotEtChiffre);
  $compteurDeMot = array_count_values($enLowerCase);


  print_r($compteurDeMot);
}

wordCount("go Go GO Stop stop");
?>
