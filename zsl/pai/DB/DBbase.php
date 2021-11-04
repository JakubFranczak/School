<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
        $connect = new mysqli("localhost","root","", "3gi2t_g1");
        $sql = "SELECT * FROM `users` JOIN `cities` ON users.cityid=cities.id";
        $result = $connect->query($sql);
        // $user = $result->fetch_assoc(); //tylko jeden row
        // print_r($user);
        // echo "<br>",$user["id"],"<br>";

        while ($user = $result->fetch_assoc()) {   //do czasu kiedy = TRUE wykonuje, FALSE = next 
            echo $user["id"],"<br>";
            echo $user["name"],"<br>";
            echo $user["surname"],"<br>";
            echo $user["birthday"],"<br><br><br>";
        }
    ?>
</body>
</html>