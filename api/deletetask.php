<?php
    $id = $_POST["sid"];
    $dbh = new PDO("mysql:host=localhost;dbname=to-do-list", "root", "solicode123");
    $sql = "DELETE FROM tasks WHERE idtasks = $id";
    $getClasse = $dbh->prepare($sql) ;
    $getClasse->execute();
    ?>