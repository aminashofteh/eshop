<?php
include('connect.php');
if(isset($_COOKIE['mybasket'])){
	$cookiename = $_COOKIE['mybasket'];	
	echo "مواردی در سبد خرید شما موجود می باشد";
	echo "<ul>";
	$sqlquery1="select * from sabadtbl where cookiename = $cookiename";
	$stmt1 = $db -> prepare($sqlquery1);
	$stmt1 -> execute();	

	while($result=$stmt1 -> fetch(PDO::FETCH_ASSOC)){
		$mahsoulid = $result['mahsoulid'];
		
		$sqlquery2 = "select * from tblmahsoulhaa where id = $mahsoulid";
		$stmt2 = $db -> prepare($sqlquery2);
		$stmt2 -> execute();
		
		while($result2=$stmt2 -> fetch(PDO::FETCH_ASSOC)){
			$onvan = $result2['title'];
			$aks = $result2['img'];
			$gheimat = $result2['price'];
			
			echo "<li><img src=$aks><a>$onvan</a><a>تعداد : 1 عدد</a><img src='img/remove.png' style='width:20px; height:14px;'></li>";		
			
		}
		
		
	}
	echo "</ul>";
	
} else {	
	echo "هنوز هیچ کالایی در سبد خرید شما قرار نگرفته است"; 
}
?>