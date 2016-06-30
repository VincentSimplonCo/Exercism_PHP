<?php

function isPangram($string){

  $stringLower = strtolower($string);
  $alphabet = range('a', 'z');
  $i = 0;

  do {
    if(stristr($stringLower, $alphabet[$i]) == true){
      // echo "<p>".$alphabet[$i]." trouve! <p>";
    }
    else if (stristr($stringLower, $alphabet[$i]) == false){
      echo $string." "."<h1><Cette phrase n'est pas un pangram</h1>";
      echo "<p>".$alphabet[$i]." introuvable! <p>";
      return false;
      break;
    }
    $i++;
  } while ($i < count($alphabet));
  echo $string." "."<h1>Cette phrase est un pan(TA)gram, be careful!<h1>";
  return true;
}

isPangram("Victor jagt zwölf Boxkämpfer quer über den großen Sylter Deich");

?>



<?php
// $i = 0;
// do {
//   if(stristr($stringLower, $alphabet[$i]){
//     echo "<br>".$alphabet[$i]." trouve! </br>";
//   }
//   else {
//     echo "Cette phrase n'est pas un pangram";
//     break;
//   }
//   $i++;
// } while ($i < count($alphabet));


 ?>
