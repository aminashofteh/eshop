<!--slides-->
<div id="slides">
<div id="next"><img src="img/next.png"></div>
<div id="prev"><img src="img/prev.png"></div>
<!--slideshow-->
<div id="slideshow" style="width:720px; height:310px; border:2px solid #eee; float:right; border-radius:10px; overflow:hidden;">
<?php
	//include('connect.php');
	$sqlquery = "select img from tblmahsoulhaa where slide = 1";
	$stmt = $db -> prepare($sqlquery);
	$stmt -> execute();
	
	while($result = $stmt -> fetch(PDO::FETCH_ASSOC)) {
		$aks = $result['img'];
		
		echo "<a><img src=$aks></a>";		
	}

	//$db = null;
?>
</div>
<!--slideshow/////-->
</div>
<!--slides/////-->