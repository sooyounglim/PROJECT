<html>
<head>
<link rel = stylesheet TYPE = "text/css" href = "style.css"></head>
<body bgcolor = "#f5f5ff">
<br><br><br><br><br><br>
<?php
	$ID = $_POST['id'];
	$str = $ID."#";
	$file = fopen('check.txt', 'r+');
	$filesize = filesize('check.txt');
	$string = fread($file, $filesize);
	if (!$string){
		fwrite($file, $str."&");
		fclose($file);?>
		<?php echo ("<script language = 'javascript'>alert('You can use this ID!');document.location.href = 'signup.html';</script>"); ?>
	<?php }
	else {
		$words = explode("#", $string);
		foreach ($words as $word) {
			if ($word == $ID) {
				fclose($file); ?> 
				<?php echo  ("<script language = 'javascript'>alert('This ID has already existed! Use another ID');document.location.href = 'signup.html';</script>"); ?>
	<?php }}; ?>
		<?php
		$string = str_replace("&", $str, $string);
		fwrite($file, $string);
                fclose($file);?>
                <?php echo ("<script language = 'javascript'>alert('You can use this ID!');document.location.href = 'signup.html';</script>"); ?>
	<?php }; ?>
</body>
</html>
