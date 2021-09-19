<?php
    echo PHP_VERSION; //7.4.8

    echo '<br>', 2**10, '<br>';
    $x=10;
    $y=100;

    echo $x<=>$y, "<br>"; //porównanie, potrójny operator porównania

    //równe lub identyczne
    $x=1;
    $y=1.0;

    if($x==$y){
        echo "równe";
    }else{
        echo "różne";
    }

    //sprawdzenie dodatkowo typu danych
    if($x===$y){
        echo "równe";
    }else{
        echo "różne";
    }

/*
  postinkrementacja $x++
  preinkrementacja ++$x
  postdekrementacja $x--
  predekrementacja --$x
*/

  $x=1;
  echo '<hr>',$x; //1
  echo ++$x; //2
  echo $x++; //2
  echo ++$x,'<hr>'; //4

  $x=1;
  echo $x; //1
  $x=$x++;
  echo $x; //1
  $x=++$x;
  echo $x; //2
  $y=++$x;
  echo $x; //3
  echo $y; //3
  $y=$x++;
  echo $x; //4
  echo "$y<br>"; //3

 ?>
