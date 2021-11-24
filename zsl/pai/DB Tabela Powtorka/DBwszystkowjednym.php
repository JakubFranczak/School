<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Dazy Banych</title>
  </head>
  <body>
    <h4>Użyszkodnicy</h4><br>
    <?php
    $connect = new mysqli("localhost","root","","3gi2t_g1");
    $sql = "SELECT * FROM `users` JOIN `cities` ON `users`.`cityid`=`cities`.`cityid` ORDER BY `id`";
    $result = $connect->query($sql);

    echo <<< TABELA
    <table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>City</th>
    <th>Birthday</th>
    <th>Creation Date</th>
    </tr>
TABELA;
    while ($user=$result->fetch_assoc()){
    echo <<< DATA
      <tr>
      <td>$user[id]</td>
      <td>$user[name]</td>
      <td>$user[surname]</td>
      <td>$user[cityname]</td>
      <td>$user[birthday]</td>
      <td>$user[create_date]</td>
      <td><a href="delete2.php?id=$user[id]">USUN</a></td>
      </tr>
DATA;
    }
    echo "</table>";
    if(isset($_GET['error'])){
      if ($_GET['error']=="Nieprawidlowo") {
        ?>
        <script>
          alert("Wystąpił błąd, spróbuj ponownie");
        </script>
        <?php
      }else {
        ?>
        <script>
          alert("Kolumny zostaly poprawnie usuniete");
        </script>
        <?php
      }
    }
    ?>

  </body>
</html>
