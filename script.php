<script>
$('#menu > ul > li').hover(function() 	{
	$(this).css('background','url(img/line2.jpg) no-repeat center right');
	var number = $(this).find('ul').length;
	if (number > 0 ) { 
			$('#menu1').slideDown(600);
			$(this).find('ul').show(600);
	}	
	else {
			$('#menu1').slideUp(300);

	}
	},
	function() 	{
		$(this).find('ul').hide();
		$(this).css('background','url(img/line1.jpg) no-repeat center right');

}
)
	


	
	
$('#menu').mouseleave(
	function() {
		$('#menu1').slideUp(300);
}
)





$('#slideshow').cycle({
		fx:'fade',
		timeout:5000,
		next:'#next',
		prev:'#prev'
}
)





$('#slides').hover(
	function(){
		$('#next,#prev').show(0);
		$('#next,#prev').animate({opacity:1},600);
	},
	function(){
		$('#next,#prev').animate({opacity:0},600);
		$('#next,#prev').hide(0);
}
)




		
$('#porforush ul li').hover(function(){
	$(this).find('#tozihat').animate({opacity:0.8},600);
	$(this).addClass('liBorder');
}, function(){
	$(this).find('#tozihat').animate({opacity:0},300);
	$(this).removeClass('liBorder');
}
)

	
	
	
	
$('#tosabad').click(function(){
	$('#tarik').show();
	$('#tarik').animate({opacity:.7},600);	
	$('#sabad').show();
	$('#sabad').animate({opacity:1},600);	
	
	var xhttpinner = new XMLHttpRequest();
	xhttpinner.onreadystatechange = function() {		
	document.getElementById('sabad1').innerHTML = this.responseText;	
	}	
		
	xhttpinner.open('GET','sabadinner.php',true);
	xhttpinner.send(); 	
	
}
)





$('#tarik').click(function() {
	$('#tarik').animate({opacity:0},600);
	$('#tarik').hide(0);
	$('#sabad').animate({opacity:0},1200);
	$('#sabad').hide(0);
}
)





$('#porforush #tozihat .ta1').click(function(){
	
	var id = $(this).attr('id');
			
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {		
	document.getElementById('sabadtedad').innerHTML = this.responseText;	
	}	
		
	xhttp.open('GET','sabad.php?id=' + id,true);
	xhttp.send();
}
)
</script>