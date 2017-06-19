<!--left-->
<div id="left">
<!--porforush-->
<div class="porforushcl" id="porforush">
<h2><img src="img/dots.png"></img>پرفروشترین کالاها</h2>
<!--line4-->
<div id="line4">
</div>
<!--line4/////-->
<ul>
	<?php
		//include('connect.php');
		$sqlquery = "select title,id,img,price,selled,mojoudi from tblmahsoulhaa order by selled desc limit 8";
		$stmt = $db -> prepare($sqlquery);
		$stmt -> execute();
				
		while($result = $stmt -> fetch(PDO::FETCH_ASSOC)) {
			$id = $result['id'];
			$onvan = $result['title'];
			$aks = $result['img'];
			$gheimat = $result['price'];
			$mojoudi = $result['mojoudi'];			
						
			echo "<li><img src=$aks></img>
			<!--tozihat-->
			<div id='tozihat'>
			<a class='ta1' id='$id'>افزودن به سبد خرید</a>
			<a class='ta2'>جزئیات محصول</a>
			<a class='ta3'>مشاهده محصولات مشابه</a>
			</div>
			<!--tozihat/////-->			
			<a>	$onvan ";
			
			if ( $mojoudi == 0) { 
				$mojoudi = 'ناموجود';
				echo "<span style='background:gray'>$mojoudi</span></a>";
			} else { 
				$mojoudi = "موجود"; 
				echo "<span style='background:green'>$mojoudi</span></a>";
			}
			echo "<a style='padding-top:2px;color:green;height:31px;'> قیمت : $gheimat تومان</a>	
			</li>";			
		}

		//$db = null;
	?>

</ul>	
</div>
<!--porforush/////-->

<!--mahbubtarin(porforush)-->
<div class="mahbubtarin" id="porforush" style="margin-top:40px; float:right;">
<h2><img src="img/dots.png"></img>پر بازدیدترین کالاها</h2>
<!--line4-->
<div id="line4">
</div>
<!--line4/////-->
<ul>
	<?php
		//include('connect.php');
		$sqlquery = "select id,title,img,price,viewed,mojoudi from tblmahsoulhaa order by viewed desc limit 4";
		$stmt = $db -> prepare($sqlquery);
		$stmt -> execute();
				
		while($result = $stmt -> fetch(PDO::FETCH_ASSOC)) {
			$id = $result['id'];
			$onvan = $result['title'];
			$aks = $result['img'];
			$gheimat = $result['price'];
			$mojoudi = $result['mojoudi'];			
						
			echo "<li><img src=$aks></img>
			<!--tozihat-->
			<div id='tozihat'>
			<a class='ta1' id='$id'>افزودن به سبد خرید</a>
			<a class='ta2'>جزئیات محصول</a>
			<a class='ta3'>مشاهده محصولات مشابه</a>
			</div>
			<!--tozihat/////-->			
			<a>	$onvan ";
			
			if ( $mojoudi == 0) { 
				$mojoudi = 'ناموجود';
				echo "<span style='background:gray'>$mojoudi</span></a>";
			} else { 
				$mojoudi = "موجود"; 
				echo "<span style='background:green'>$mojoudi</span></a>";
			}
			echo "<a style='padding-top:2px;color:green;height:31px;'> قیمت : $gheimat تومان</a>	
			</li>";			
		}

		//$db = null;
	?>
	
</ul>	
</div>
<!--mahbubtarin(porforush)/////-->

</div>
<!--left/////-->