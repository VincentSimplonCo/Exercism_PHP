<?php

function isIsogram($string){
  $stringLower = strtolower($string);
  $tableauCaracteres = str_split($stringLower);
  $nbIteration = array_count_values($tableauCaracteres);
  print_r($nbIteration);

  $i = range('a', 'z');
  $j = array_push($i,"é");

  for ($j = $j[0]; $j <= count($nbIteration); $j[0]++){
    if ($nbIteration[$j] > 1){
      echo "Ce n'est pas un isogram";
      return false;
    }
    else{
      echo $string." "."est un isogram!";
      return true;
    }
  }
}

isIsogram(utf8_decode("éléphant"));

?>
