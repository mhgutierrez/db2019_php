<h1>hola mundo</h1>
Esto está escrito en html
y no hay saltos de línea
<?php
//mostrar la hora en php
echo date('H:i:s');
//salto de línea en php
echo '<br/>';
//podemos hacer cálculos matemáticos en php
echo 2+5;
echo '<br/>';
//Las variables en php se definen como símbolo de dolar + nombre de variable
$ahora=time();
//Queremos mostrar los días que faltan para que finalice el curso
//primero convertimos la fecha actual que introducimos como un string a formato fecha UNIX
$final= strtotime('2019-09-25');
/*Después restamos la fecha final del curso menos la actual y como el resultado
está en segundos lo dividimos por 60, 60 y 24 para obtener días*/
$dias=($final-$ahora)/60/60/24;
echo $dias;
echo '<br/>';
echo (strtotime('25 September 2019')-time())/(60*60*24);
//También se pueden hacer comentarios
#iniciando la línea con una almohadilla

//Calcular cuantos años tenemos
$fecha_nacimiento=strtotime('1985-05-29');
$ahora = time();
$edad = ($ahora-$fecha_nacimiento)/60/60/24/365;
echo '<br/>';
echo "Tengo: " .$edad." años";
//redondeando función round 
echo '<br/>';
echo '<br/>';
echo "FUNCIONES DE REDONDEO";
echo '<br/>';
echo "Redondeando... " .round($edad)." años";

//truncar función floor
//para concatenar una cadena y el resultado de una función o una variable utilizamos .funcion(). o .$variable
echo '<br/>';
echo "Truncando... " .floor($edad)." años";
echo '<br/>';
//como se hace un bucle for
//$i = $i+2 == $i++
echo '<br/>';
echo "PRIMER BUCLE FOR";
echo '<br/>';
for($i=0;$i<10;$i++){
	echo $i;
	echo '<br/>';
}
//tabla de potencias de 2
echo '<br/>';
echo "LA TABLA DEL 2 DE MULTIPLICAR";
echo '<br/>';
for($i=1;$i<11;$i++){
	echo "2*".$i."=".(2*$i);
	echo '<br/>';
}
echo '<br/>';
echo "LA TABLA DE POTENCIAS DE 2";
echo '<br/>';
for($i=1;$i<11;$i++){
	echo "La potencia ".$i." de 2 es: ".(2**$i);
	echo '<br/>';
}
echo '<br/>';
echo "CUADRADOS";
echo '<br/>';
for($i=1;$i<11;$i++){
	echo "El cuadrado de: ".$i." es: ".($i**2);
	echo '<br/>';
}
echo '<br/>';
echo "SUCESIÓN DE FIBONACCI";
echo '<br/>';
$n1=1;
$n2=0;
echo$n2;
echo '<br/>';
echo$n1;
echo '<br/>';
for($i=0;$i<11;$i++){
	$suma=$n1+$n2;
	$n1=$n2;
	$n2=$suma;
	echo $suma."";
	
	echo '<br/>';
}
echo '<br/>';
echo "SUCESIÓN DE FIBONACCI HECHA CON VECTORES";
echo '<br/>';
$f[0]=0;
$f[1]=1;
for($i=2;$i<=10;$i++){
	$f[$i] = $f[$i-1] + $f[$i-2];
	
}
echo '<pre>';
print_r($f);
echo '</pre>';
echo "FACTORIALES";
echo '<br/>';
$acumulador=1;
echo "El factorial de 0 es: ".$acumulador;
echo '<br/>';
for($i=1;$i<=10;$i++){
	$acumulador=$acumulador*$i;
	echo "El factorial de ".$i." es: ".$acumulador;
	echo '<br/>';
}
echo '<br/>';
echo "Números primos del 1 al 100";
echo '<br/>';
for($i=2;$i<=100;$i++){
	for($j=2;$j<=100;$j++){
		if(!isset($no_primos[$i])){
			$no_primos[$i*$j]=1;
		}
	}
}
for($i=1;$i<100;$i++){
	if(!isset($no_primos[$i])){ 
		echo $i.'<br/>';
	}
}
/*
mostrar no primos
echo '<pre>';
print_r($no_primos);
echo '</pre>';
*/
echo '<br/>';
//array asociativo en el que se incluya nombre y apellido y la mesa en la que estoy
$alumnos=[
	'nombre'=>'María',
	'apellido'=>'Hoyos', 
	'mesa'=>'704',
];
echo '<pre>';
print_r($alumnos);
echo '</pre>';

$alumnos[]=[
	'nombre'=>'Roberto',
	'apellido'=>'Hernández', 
	'mesa'=>'702',
];
echo '<pre>';
print_r($alumnos);
echo '</pre>';
//$alumnos[];
$alumnos[]=[
	'nombre'=>'David',
	'apellido'=>'Blanco', 
	'mesa'=>'700',
];
echo '<pre>';
print_r($alumnos);
echo '</pre>';

echo $alumnos[2]['nombre'];

$alumnos[1]['lenguajes']=['HTML',
						'CSS',
];
echo '<pre>';
print_r($alumnos);
echo '</pre>';

?>

