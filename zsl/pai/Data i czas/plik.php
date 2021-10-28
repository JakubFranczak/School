<?php
    echo "Dzień-miesiąc-rok: ".date('d-m-Y'),"<br>";
    echo "Dzień-miesiąc-rok: ".date('d-m-y'),"<br>";
    echo "Dzień-miesiąc-rok: ".date('d-M-Y'),"<br>";
    echo "Dzień-miesiąc-rok: ".date('d-F-Y'),"<br>";

    setlocale(LC_ALL, 'polish');
    echo strftime('%d-%B-%Y'),"<br>";
    echo strftime('%F'),"<br>";

    echo date('G:i:s'),"<br>";
    echo date('G:i:sa'),"<br>";
    echo date('H:i:s'),"<br>";


    $date = getdate();
    print_r($date);
    echo $date['yday']; //liczy od 0, czyli jest 301 dzien roku
    echo $date['weekday'];
    echo $date['month'];
    echo $date['0'],"<br>"; //tyle sekund minęło od 1 stycznia 1970 roku 

    echo date('L'),"<br>"; //czy rok jest przestepny

    //mktime()

    $today= mktime(date('H'),date("i"),date('s'),date('m'),date('d'),date('Y')); //h,m,s,month,day,year
    echo $today,"<br>";

    $year=$today/(60*60*24*365);
    echo (int)$year,"<br>";

    $zeszlystyczen= mktime(0,0,0,1,1,2020); //h,m,s,month,day,year
    $tolastyear = $zeszlystyczen/(60*60*24*365);
    echo (int)$tolastyear;
?>
<script>
    setTimeout(function(){
        window.location.reload();    
    },1000);
</script>