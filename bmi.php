<?php
	include "header.php";
	include "menu.php"; 
	$height = 1.74;
	$weight = 85;

	$bmi = $weight / $height ** 2;
	echo "<hr>";
	echo "身高：" . $height . "公尺<br>";
	echo "體重：" . $weight . "公斤<br>";
	echo "你的BMI是" . round($bmi, 2);
	echo "<hr>";
	include "footer.php";
?>