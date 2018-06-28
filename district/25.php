<html>
<title>Jungnang-Gu</title>
<body>
<p align = "center"><img src = "../pictures/cafestagram2.PNG"></p>
<p align = "center"><img src = "./map/25.png" width = "25%"></p>
	<?php
	$cafe = $_POST['cafe'];
	$review = $_POST['text'];
	echo "<p align = 'center'><font face = 'Dubai' size = '6'>Cafe | ".$cafe."<br>Review | ".$review."</font></p>";
	$file_tmp_name = $_FILES['filename']['tmp_name'];
	$file_name = $_FILES['filename']['name'];
	$words = explode(".", $file_name);
	$ext = $words[1];
	if ($ext==NULL){
		echo "<p align = 'center'>NO IMAGE</p>";
	}
	else if ($ext == "png" || $ext = "jpg" || $ext == "gif" || $ext == "PNG" || $ext = "JPG" || $ext == "GIF") {
		$file_name = str_replace(".", "_".$cafe.".", $file_name);
		move_uploaded_file($file_tmp_name, './upload/'.$file_name);
		echo "<p align = 'center'><img src = './upload/{$file_name}' width = '25%' border = '5'></p>";
	}
	else{
		echo "Upload Failed<br>";
	}
	echo "<p align = 'center'><a href = 'javascript:window.close();'>Go To HomePage...</a></p><br><br>";
?>
</body>
</html>
