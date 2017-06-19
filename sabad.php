<?php
include('connect.php');
if(isset($_COOKIE['mybasket'])){
	$cookiename = $_COOKIE['mybasket'];
	
} else {	
	$randnum = microtime(true).rand(1,10000);
	setcookie('mybasket',$randnum,intval(time()+60*60*24*7),'/');
	$cookiename = $randnum;
}
	
	$mahsoulid = $_REQUEST['id'];
	$sqlquery1 = "insert into tblsabad (cookiename, mahsoulid)
		values ($cookiename, $mahsoulid)";
	$stmt1 = $db -> prepare($sqlquery1);
	$stmt1 -> execute();
	
		

$sqlquery2 = "select * from tblsabad where cookiename = $cookiename";
$stmt2 = $db -> prepare($sqlquery2);
$stmt2 -> execute();
$num=$stmt2->rowcount();;

echo $num;
?>