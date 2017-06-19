<!--jadidtarinhaa-->
<div id="jadidtarinhaa">
<h2><img src="img/dots.png"></img>جدیدترین کالاها</h2>
<ul>

<?php
	//include('connect.php');
	$sqlquery = "select title,img from tblmahsoulhaa order by id desc limit 4";
	$stmt = $db -> prepare($sqlquery);
	$stmt -> execute();
	
	while($result = $stmt -> fetch(PDO::FETCH_ASSOC)) {
		$aks = $result['img'];
		$onvan = $result['title'];
		echo "<a><li><img src=$aks></img><br><p>$onvan</p></li></a>";		
	}
	
	//$db = null;
?>

</ul>
</div>
<!--jadidtarinhaa/////-->