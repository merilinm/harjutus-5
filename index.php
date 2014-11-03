<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-5 - Andmetüübid (3)</title>
</head>
<body>

	<h2>Booleans</h2>
	<?php
		$result1 = true;
		$result2 = false;
		$result3 = hippo;
		echo "Result 1: $result1";
		echo "<br>";
		echo "Result 2: $result2";
		echo "<br>";
		echo "Kas result 1 on boolean?". is_bool($result1);
		echo "<br>";
		echo "Kas result 2 on boolean?". is_bool($result2);
		echo "<br>";
		echo "Kas result 3 on boolean?". is_bool($result3);		
	?>
	<h2>Andmetüüpide olekud</h2>
	<h3>NULL</h3>
	<h2>NULL</h2>
	<?php 
	$var1 = null;
	$var2 = "";
	$var3 = 0;
	echo "Kas var1 on NULL?". is_null($var1); 
	echo "<br>";
	echo "Kas var2 on NULL?". is_null($var2); 
	echo "<br>";
	echo "Kas var3 on NULL?". is_null($var3); 
	echo "<br>";
	echo "Kas var4 on NULL?". is_null($var4); 
	?>
	<h3>Set</h3>
	<?php
	echo "Kas var1 on väärtustatud?". isset($var1);
	echo "<br>";
	echo "Kas var2 on väärtustatud?". isset($var2);
	echo "<br>";
	echo "Kas var3 on väärtustatud?". isset($var3);
	echo "<br>";
	echo "Kas var4 on väärtustatud?". isset($var4);
	?>
	<h3>Empty</h3>
	<?php
	echo "Kas var1 on empty?". empty($var1);
	echo "<br>";
	echo "Kas var2 on empty?". empty($var2);
	echo "<br>";
	echo "Kas var3 on empty?". empty($var3);
	echo "<br>";
	echo "Kas var4 on empty?". empty($var4);
	?>
	<h2>Andmetüüpide teisendamine</h2>
	<?php
	$count = 2;
	echo $count;
	echo "<br>";
	echo gettype($count);
	echo settype($count, string);
	echo "<br>";
	echo gettype($count);
	echo settype($count, float);
	echo "<br>";	
	?>
	<pre>
	<?php
	$count = array(2);
	echo gettype($count);
	echo "<br>";
	echo print_r($count);
	echo settype($count, array($count));
	?>
	</pre>
	<?php
	$count = true;
	echo gettype($count);
	echo settype($count, boolean);
	?>
	<h2>Konstandid</h2>
	<?php
	define("MAX_WIDTH", 980);
	echo MAX_WIDTH;
	define("MAX_WIDTH", 1000);
	echo MAX_WIDTH;
	/*MAX_WIDTH = MAX_WIDTH +5;*/
	?>
</body>
</html>