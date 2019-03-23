<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>static关键字</title>
</head>
<body>
	<?php
		function add(){
			static $x = 1;
			echo $x;
			$x++;
		}
		for ($i=0; $i < 5; $i++) {
			add();
			echo "<br>";
		}

		echo "随机数<br>";
		echo bin2hex(random_bytes(2));
		echo "<br>";
		echo random_int(1,10);

		phpinfo();
	?>
</body>
</html>