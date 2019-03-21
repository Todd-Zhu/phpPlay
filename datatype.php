<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数据类型</title>
</head>
<body>
	<?php
		include 'define.php';
		// String 字符串
		echo gettype('a');
		echo '<br>';

		// Integar 整数
		echo gettype(1);
		echo '<br>';

		// Float 浮点型
		echo gettype(1.11);
		echo '<br>';

		// Boolean 布尔型
		echo gettype(true);
		echo '<br>';

		// Array 数组
		echo gettype([1,2]);
		echo '<br>';

		// Object 对象 (必须使用class关键字声明类对象)
		class foo
		{
		    function do_foo()
		    {
		        echo "Doing foo.";
		    }
		}
		$bar = new foo;

		echo gettype($bar);
		echo '<br>';

		// NULL 空
		$null;
		echo gettype($null);
		echo '<br>';

		echo SOME_ONE;
	?>
</body>
</html>