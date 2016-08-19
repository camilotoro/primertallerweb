<?php

$num = -3;

if($num<0){
	echo "a. el numero es negativo.<br><br>;"
}else {
	echo "a.el numero no es negativo. <br><br>;";
}


//b.
$var=true;

if($var) {
		echo "b. Verdadero.<br><br>";
	}else {
		echo "b. Falso.<br><br>";
	}

	//c.
	$num1 = 6;
	$primo = 0;
	 
	for ($b = 1; $b < $num1; $b++) {
	    if ($num1 % $b == 0) {
	        $primo++;
	    }
	}
	 
	if ($primo >= 3) {
	    echo "c. El numero ".$num1." no es primo.<br><br>";
	} else {
	    echo "c. El numero ".$num1." es primo.<br><br>";
	}

	//d.
	$num2 = 36;

	if($num2 > 35) {
		echo "d. ".$num2." es mayor que 35.<br><br>";
	}else {
		echo "d. ".$num2." es menor que 35.<br><br>";
	}

	//e.
	$num3 = 99;

	if($num3 >= 0 && $num3 < 100) {
		echo "e. ".$num3." es positivo y menor que 100.<br><br>";
	}else {
		echo "e. ".$num3." es negativo y menor que 100.<br><br>";
	}

	//f.
	$num4 = 1;

	if($num4 >= -3 && $num4 <= 27) {
		echo "f. ".$num4." pertenece al intervalo -3, 27.<br><br>";
	}else {
		echo "f. ".$num4." no pertenece al intervalo -3, 27.<br><br>";
	}

	//g.
	$num5 = 51;

	if($num5 >= 25 && $num5 <= 50) {
		echo "g. ".$num5." pertenece al intervalo 25, 50.<br><br>";
	}else {
		echo "g. ".$num5." no pertenece al intervalo 25, 50.<br><br>";
	}

	//h.
	$num6 = 6;

	if($num6 % 1 < 15) {
		echo "h. El modulo de ".$num6." es menor que 15.<br><br>";
	}else {
		echo "h. El modulo de ".$num6." es mayor que 15.<br><br>";
	}

	//i.
	$num7 = 7;

	if($num7 % 2 == 0) {
		echo "i. ".$num7." no es un numero impar.<br><br>";
	}else {
		echo "i. ".$num7." es un numero impar.<br><br>";
	}

	//j.
	$num8 = 4;
	$resultado;

	if($num8 % 2 == 0) {
		$resultado = $num8 ** 2;
		echo "j. El resultado de elevar ".$num8." al cuadrado es ".$resultado.".<br><br>";
	}else {
		$resultado = $num8 ** 3;
		echo "j. El resultado de elevar ".$num8." al cubo es ".$resultado.".<br><br>";
	}

	//k.
	$num9 = 77;
	$num10 = 32;

	if($num9 < $num10) {
		echo "k. El maximo entre ".$num9." y ".$num10." es ".$num10.".<br><br>";
	}else {
		echo "k. El maximo entre ".$num9." y ".$num10." es ".$num9.".<br><br>";
	}

	//l.
	$num11 = 10;
	$num12 = 20;
	$num13 = 30;

	if($num11 < $num12 && $num12 > $num13) {
		echo "l. El maximo entre ".$num11.", ".$num12." y ".$num13." es ".$num12.".<br><br>";
	}else if($num11 > $num12 && $num11 > $num13) {
		echo "l. El maximo entre ".$num11.", ".$num12." y ".$num13." es ".$num11.".<br><br>";
	}else if($num11 < $num12 && $num12 < $num13) {
		echo "l. El maximo entre ".$num11.", ".$num12." y ".$num13." es ".$num13.".<br><br>";
	}

	//m.
	$num14 = 8;
	$num15 = 10;

	if($num14 < $num15) {
		echo "m. Orden de menor a mayor ".$num14.", ".$num15.".<br><br>";
	}else {
		echo "m. Orden de menor a mayor ".$num15.", ".$num14.".<br><br>";
	}

	//n.
	$num16 = 1;
	$num17 = 4;
	$num18 = 10;

	if($num16 > $num17 && $num17 > $num18) {
		echo "n. Orden de mayor a menor ".$num16.", ".$num17.", ".$num18.".<br><br>";
	}else if($num16 < $num17 && $num17 < $num18) {
		echo "n. Orden de mayor a menor ".$num18.", ".$num17.", ".$num16.".<br><br>";
	}else if($num16 < $num17 && $num18 < $num16) {
		echo "n. Orden de mayor a menor ".$num17.", ".$num16.", ".$num18.".<br><br>";
	}else if($num16 < $num17 && $num18 > $num16) {
		echo "n. Orden de mayor a menor ".$num17.", ".$num18.", ".$num16.".<br><br>";
	}else if($num16 > $num18 && $num18 > $num17) {
		echo "n. Orden de mayor a menor ".$num16.", ".$num18.", ".$num17.".<br><br>";
	}else if($num16 < $num18 && $num16 > $num17) {
		echo "n. Orden de mayor a menor ".$num18.", ".$num16.", ".$num17.".<br><br>";
	}

	//o.
	
	$cadena = "gafas";
	
	if(strlen($cadena) > 5) {
		echo "o. La longitud de la cadena es de ".strlen($cadena)." caracteres y el texto es largo.<br><br>";
	}else {
		echo "o. La longitud de la cadena es de ".strlen($cadena)." caracteres y el texto es corto.<br><br>";
	}

	//p.
	
	if(isset($miVar)) {
		echo "p. La variable existe.<br><br>";
	}else {
		echo "p. La variable no existe.<br><br>";
	}

	
	//q.
	$variable;

	if(empty($var)) {
		echo "q. La variable esta vacia.<br><br>";
	}else {
		echo "q. La variable tiene datos.<br><br>";
	}
?>




