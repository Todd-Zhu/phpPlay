<?php
	// PHP 算术运算符
	$x=10;
	$y=6;
	echo ($x + $y); // 输出16
	echo "<br>";
	echo ($x - $y); // 输出4
	echo "<br>";
	echo ($x * $y); // 输出60
	echo "<br>";
	echo ($x / $y); // 输出1.6666666666667
	echo "<br>";
	echo ($x % $y); // 输出4
	echo "<br>";
	echo 'a'. '+' .'b'; // 连接字符串，并置
	echo "<br>";
	echo intdiv($x,$y); // 算整除 输出1，PHP 7.1

	// PHP 递增/递减运算符
	echo "<br>";
	$x=10;
	$a = ++$x;
	echo "++x; retrun $a;x = $x";

	echo "<br>";
	$x=10;
	$a = $x++;
	echo "x++; retrun $a;x = $x";

	echo "<br>";
	$x=10;
	$a = --$x;
	echo "--x; retrun $a;x = $x";

	echo "<br>";
	$x=10;
	$a = $x--;
	echo "x--; retrun $a;x = $x";

	// PHP 数组运算符,+并不能取合集
	$arr = [1,2] + [3,4];
	$arr = json_encode($arr);
	$am = array_merge([1,2],[3,4]);
	$am = json_encode($am);
	echo "<br>";
	echo "[1,2] + [3,4] != $arr";
	echo "<br>";
	echo "array_merge([1,2],[3,4]) == $am";
?>