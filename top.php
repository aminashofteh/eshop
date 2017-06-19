<!--tarik-->
<div id="tarik" style="width:100%; height:100%; position:fixed; background:#000; opacity:.6; z-index:12; display:none; cursor:pointer;">
</div>
<!--tarik/////-->



<!--line1-->
<div id="line1" style="width:100%; height:4px; background:#006;">
</div>
<!--line1/////-->



<!--ertebat-->
<div id="ertebat" style="width:1100px; height:44px; margin:0 auto; text-align:right; direction:rtl; line-height:35px;">
<a>بازگشت به صفحه اصلی</a>
<span>|</span>
<a>درباره ما</a>
<span>|</span>
<a>تماس با ما</a>
<a style="margin-right:180px;"> <img src="img/logo.png"></a>

<!--tosabad-->
<div id="tosabad" style="cursor:pointer; direction:rtl;">
<a style="float:left; box-shadow:1px 1px 8px #ccc; margin-top:3px; padding:0 7px; border-radius:8px;"> 

کالا در سبد خرید شما<img  src="img/sabad.png" style="margin-left:-8px;">
<span id="sabadtedad" style="float:right;margin-left:5px; margin-right:5px; font-weight:bold;">
<?php
	include('connect.php');
	$kalanum = 0;
	if(isset($_COOKIE['mybasket'])){
		$cookiename = $_COOKIE['mybasket'];
		$sqlquery = "select * from tblsabad where cookiename = $cookiename ";
		$stmt = $db -> prepare($sqlquery);
		$stmt -> execute();
		$kalanum = $stmt -> rowcount();
	}
	echo $kalanum;	
?> 
</span>
</a>
</div>
<!--tobasket-->

</div>
<!--ertebat/////-->



<!--line1-->
<div id="line1" style="width:100%; height:4px; background:#006;">
</div>
<!--line1/////-->
<!--sabad-->
<div id="sabad">
<img src="img/login_content_top.png">


<!--sabad1-->
<div id="sabad1">
<!--
<ul>
	<li><img src="img/mob2.jpg"><a>آیتم شماره اول</a><a>تعداد : 1 عدد</a><img src="img/remove.png" style="width:20px; height:14px;"></li>
	<li><img src="img/mob2.jpg"><a>آیتم شماره اول</a><a>تعداد : 1 عدد</a><img src="img/remove.png" style="width:20px; height:14px;"></li>	
</ul>
-->
</div>
<!--sabad1/////-->


</div>
<!--sabad/////-->

 


<!--top1-->
<div id="top1" style="width:100%; height:44px; background:#003; margin-top:3px;">
<!--menu-->
<div id="menu" style="width:1100px; height:100%; background:#150; margin:0 auto; position:relative;">
<ul>
	<li><img src="img/home.png">صفحه اصلی</li>
	<?php
		//include('connect.php');
		$sqlquery = "select title,img from tblmenu";
		$stmt = $db -> prepare ($sqlquery);
		$stmt -> execute();
		
		while ($result = $stmt -> fetch(PDO::FETCH_ASSOC)) {
			$onvan = $result['title'];
			$aks = $result['img'];
			
			echo "<li><img src=$aks>$onvan";
			
			$sqlquery2 = "select title from tblzirmenu where parent = '".$onvan."'";
			$stmt2 = $db -> prepare ($sqlquery2);
			$stmt2 -> execute();
			$num = $stmt2 -> rowcount();
				
			if ($num > 0) {			
				echo "<ul>";
				
				while($result2 = $stmt2 -> fetch(PDO::FETCH_ASSOC)) {					
					$onvan2 = $result2['title'];
					
					echo "<li>$onvan2</li>";										
				}	
				
				echo "</ul></li>";		
			}
		}			
		
		//$db = null;		
	?>	
</ul>
<!--menu1-->
<div id="menu1" style="width:100%; height:54px; background:#006; position:absolute; display:none; border-bottom-left-radius:19px; border-bottom-right-radius:19px;" >
</div>
<!--menu1/////-->
</div>
<!--menu/////-->
</div>
<!--top1/////-->
<!--shop1-->
<div id="shop1" style="width:100%; height:64px; background:#690;">
<!--user-->
<div id="user" style="width:1100px; height:54px; background:#eee; margin:0 auto; border-bottom-left-radius:19px; border-bottom-right-radius:19px; box-shadow:1px 1px 4px #000;">

<div id="login">
<a><img src="img/key.png">ورود کاربران</a>
</div>

<div id="register">
<a><img src="img/key.png">ثبت نام</a>
</div>

<div id="advasearch">
<a><img src="img/key.png">جستجوی پیشرفته</a>
</div>

<div id="search" style="width:499px; background:#fff; float:left; margin-left:14px;">
<form action="" style="width:100%; height:100%;">
<input type="text" style="border:none; width:470px; height:22px;" value=" جستجو کنید ..."></input>
<input type="submit" value="" style="float:left;; height:100%; width:24px; border:none; background:url(img/search.png) no-repeat;" >
</form>
</div>

</div>
<!--user/////-->
</div>
<!--shop/////-->
