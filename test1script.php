<script>
function translateit() {
	var myvar = new XMLHttpRequest();
	myvar.onreadystatechange = function() {		
		document.getElementById('demo').innerHTML = this.responseText;	
	}	
		
	myvar.open('GET','test1ajax.php',true);
	myvar.send();
}
</script>
