<html>
<head>
<link rel = stylesheet TYPE = "text/css" href = "style.css">
<script language = "javascript">
function main(){
	document.location.href = "main.html"
}
</script></head>
<body bgcolor = "#f5f5ff">
<br><br><br><br><br><br><br>
<form name = "identify" method = "post" action = "main.html">
	<h1 class = signup>Successfully Done! Go to Main Page and LogIn!</h1>
	<p align = "center"><input class = signup type = "button" value = "LOGIN" onclick = "return main()"></p>
</form>
</body>
<?php
	$ID = $_POST['id'];
	$ENC = $_POST['enc'];
	$str = $ID."#".$ENC."&";
	$file = fopen('account.txt', 'r+');
	$filesize = filesize('account.txt'); 
	$string = fread($file, $filesize);
	if (!$string){
		fwrite($file, $str."^");
		fclose($file);
	}
	else {
		$string = str_replace("^", $str, $string);
		fwrite($file, $string);	
		fclose($file);
	}
?>
</html>
