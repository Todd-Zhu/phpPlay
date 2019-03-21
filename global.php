<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>global关键字</title>
</head>
<body>

<?php
	$x = 1;
	$y = 2;

	function sum(){
		global $x,$y;
		$y = $x + $y;
	}
	sum();
	echo "变量 y 为: $y";

	// GLOBALS
	function testGlobals(){
		$GLOBALS['y'] = $GLOBALS['y'] + $GLOBALS['x'];
	}
	testGlobals();
	echo '<br>';
	echo "变量 y 为: $y";

?>

</body>
</html>