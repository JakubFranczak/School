<?php
  $text = <<<T
    zsl - Zespół
    Szkół
    Łączności
T;

  echo "$text<br>";
  echo nl2br($text),'<br>';

  $name="jaNuSz";
// zamiana na małe litery
  echo strtolower($name); //janusz
// zamiana na duże litery
  echo strtoupper($name); //JANUSZ

  $data="jaNUSz koWALski";
// zamiana pierwszej litery na dużą
  echo ucfirst($data); //JaNUSz koWALski
// zamiana każdej pierwszej litery na dużą
  echo ucwords($data); //JaNUSz KoWALski

$lorem="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo "<hr>$lorem<hr>";
$col=wordwrap($lorem,40,"<br>");
// $col=wordwrap($lorem,40,"<hr>");
echo $col;

// czyszczenie zawartości bufora
ob_clean();

// usuwanie białych znaków
$name="Anna";
$name1="  Anna ";

echo "Długość \$name: ",strlen($name),'<br>'; //4
echo "Długość \$name1: ",strlen($name1),'<br>'; //7
echo strlen(ltrim($name1)); //5
echo strlen(rtrim($name1)); //6
echo strlen(trim($name1)); //4

// przeszukiwanie ciągów znaków
echo strstr("janusz@gmail.com","@"); //@gmail.com
echo stristr("janusz@gmail.com","G"),'<hr>'; //gmail.com

$name="Janusz";
echo substr($name,2); //nusz
echo substr($name,2,3); //nus
echo substr($name,-2); //sz
echo substr($name,-2,1); //s
echo substr(strstr("janusz@gmail.com","@"),1); //gmail.com

// dokończyć str_replace
 ?>
