<html>
    <body>
	<hr>
	Operator Aritmatika
	<hr>
    <?php
    $x = 10;
    $y = 5;
    
	//echo $x $y dan echo <br>
    echo $x + $y;	echo "<br>";
	echo $x - $y;	echo "<br>";
	echo $x * $y;	echo "<br>";
	echo $x / $y;	echo "<br>";
	echo $x % $y; 	echo "<br>";
	
	echo "<hr>";
	echo "Comparison Operator";
	echo "<hr>";
	$perbandingan = $x == $y; var_export($perbandingan);	echo "<br>";
	$perbandingan = $x === $y; var_dump($perbandingan);	echo "<br>";
	$perbandingan = $x != $y; var_dump($perbandingan);	echo "<br>";
	$perbandingan = $x <> $y; var_dump($perbandingan);	echo "<br>";
	$perbandingan = $x !== $y; var_dump($perbandingan); echo "<br>";
	$perbandingan = $x > $y; var_dump($perbandingan);	echo "<br>";
	$perbandingan = $x < $y; var_dump($perbandingan);	echo "<br>";
	$perbandingan = $x >= $y; var_dump($perbandingan);	echo "<br>";
	$perbandingan = $x <= $y; var_dump($perbandingan);	echo "<br>";
	
	echo "<hr>";
	echo "Logical Operator";
	echo "<hr>";
	if ($x == 10 and $y == 50){
		echo "Hello World";
		}
		else	
			echo "Bad Day";
	
	echo "<hr>";
	echo "If Statement";
	echo "<hr>";
	if ($x > $y) {
		echo "Lebih Besar";
	} 
	else if ($x != 0){
		echo "Tidak sama dengan 0";
	}	
	echo "<br>";
	$t = date("H");
	if ($t < "20"){
		echo "have a good day!";
	}
	echo "<br>";
	
	echo "<hr>";
	echo "Switch Statement";
	echo "<hr>";	
	
	$favcolor = "red";
	
	switch ($favcolor){
		case "red":
			echo "your favorit color is red!";
			break;
		case "blue":
			echo "your favorit color is blue!";
			break;
		case "green":
			echo "your favorit color is green!";
			break;
		case "yellow":
			echo "your favorit color is yellow";
			break;
		default:
			echo "your favorit color is neither red, blue, nor green";
	}
	echo "<hr>";
	echo "Loop";
	echo "<hr>";
	for ($x = 0; $x <= 10; $x++){
			echo "The Number is : #x <br>";
	}
	echo "<br>";
	for ($x = 1; $x <= 10; $x++){
			for ($j = 1; $j <= $x; $j++ ){
			echo "*";
			}
			echo "<br>";
	}
	echo "<br>";
	$x = 1;
	while ($x <= 5){
			echo "the number is: $x <br>";
			$x++;
	}
    ?>
    </body>
</html>