<html>
<head><link rel = stylesheet TYPE = "text/css" href = "style.css">
</head>
<?php
	$ID = $_POST['ID'];
	$ENC = $_POST['ENC'];
	$str = $ID."#".$ENC;
//	echo $str."<br>";
	$file = fopen('account.txt', 'r');
	$filesize = filesize('account.txt');
	$string = fread($file, $filesize);
	$words = explode("&", $string);
//	foreach ($words as $word){
//		echo $word."<br>";
//	}
        foreach ($words as $word){
		if ($word == $str){ 
			fclose($file); ?>
			<?php echo ("<script language = 'javascript'>document.location.href = 'home.html';</script>"); ?>
	<?php }; ?>
	<?php }; ?>
	<?php fclose($file); ?>
	<?php echo ("<script language = 'javascript'>alert('Check your EMAIL and PASSWORD!');</script>"); ?>
	<?php echo ("<script language = 'javascript'>document.location.href = 'main.html';</script>"); ?>
</html>
