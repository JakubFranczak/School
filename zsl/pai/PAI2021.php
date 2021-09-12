<?php
    echo "text<br>";
    echo "text<br>";
    $name="Krystyna";
    echo 'Imię: $name<br>';
    echo "Imię: $name<br>";

    //typy danych
    //całkowite
    $calkowite=10;
    $bin=0b1010;

    echo $calkowite;
    echo $bin;

    $oct=011;
    echo $oct;

    $hex=0x11;
    echo $hex;

    //zmiennoprzecinkowe
    $x=10.5;
    echo gettype($x);

    //logiczna
    $prawda=true;
    $fałsz=false; //nie zapisujemy nazw zmiennych polskimi znakami

    echo $prawda; //1
    echo $fałsz; //nic nie wyswietli

    //składnia heredoc
    echo <<< E
    <br><br>Imię: $name
    E;

    $tekst = <<< E
    <br><br>Imię: $name
    E;

    echo $tekst;


    //nowdoc
    echo <<< 'E'
    <br><br>Imię: $name<br><br>
    E;

    //konkatenacja
    echo "tekst1"."tekst2<br>";

    echo "Imię: \$name";



//test1


?>
