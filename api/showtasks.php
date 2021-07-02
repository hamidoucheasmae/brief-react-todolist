<?php
$dbh = new PDO("mysql:host=localhost;dbname=to-do-list","root","solicode123");
$sql = " SELECT * FROM tasks ";
$TaskQuery = $dbh->query($sql);
$getTask = $TaskQuery->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($getTask));
?>