<!--right-->
<div id="right">
<!--pishnahadi-->
<div class ="pishnahadicl" id="pishnahadi">
<h2><img src="img/dots.png"></img>کالاهای پیشنهادی</h2>
<!--line4-->
<div id="line4">
</div>
<!--line4/////-->
<ul>
	<?php
		//include('connect.php');
		$sqlquery = "select title from tblmahsoulhaa where pishnahad = 1";
		$stmt = $db -> prepare($sqlquery);
		$stmt -> execute();
		
		while ($result = $stmt -> fetch(PDO::FETCH_ASSOC)) {
			
			$onvan = $result['title'];
			echo "<li><a><img src='img/dot.png'>$onvan</a></li>";

		}
		
		//$db = null;
	?>
</ul>
</div>
<!--pishnahadi/////-->
<!--porbahstarin(pishnahadi)-->
<div class ="porbahstarin" id="pishnahadi" style="margin-top:40px;">
<h2><img src="img/dots.png"></img>پر بحث ترین کالاها</h2>
<!--line4-->
<div id="line4">
</div>
<!--line4/////-->
<ul>
	<?php
		//include('connect.php');
		$sqlquery = "select title from tblmahsoulhaa order by commented desc limit 5";
		$stmt = $db -> prepare($sqlquery);
		$stmt -> execute();
		
		while ($result = $stmt -> fetch(PDO::FETCH_ASSOC)) {
			
			$onvan = $result['title'];
			echo "<li><a><img src='img/dot.png'>$onvan</a></li>";
		}
		
		//$db = null;
	?>
</ul>
</div>
<!--porbahstarin(pishnahadi)/////-->
</div>
<!--right/////-->

