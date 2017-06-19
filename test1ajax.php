<?php
include('connect.php');
$sqlquery = "select * from tblsabad";
$stmt = $db -> prepare($sqlquery);
$stmt -> execute();
$num=$stmt->rowcount();
echo $num;
?>