<?php
  if (!empty($_GET['id'])) {
    $connect = new mysqli("localhost", "root", "", "3gi2t_g1");
    $sql = "DELETE FROM `users` WHERE `users`.`id` = $_GET[id]";
    $connect->query($sql);
    if($connect->affected_rows){
      header('location: DBwszystkowjednym.php?error=Prawidlowo');
      exit();
    }else{
      header('location: DBwszystkowjednym.php?error=Nieprawidlowo');
      exit();
    }
  }
 ?>
