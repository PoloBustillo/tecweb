<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
<h2>Ejercicio 1</h2>
<p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
<p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
<?php
//AQUI VA MI CÓDIGO PHP
$_myvar;
$_7var;
//myvar;       // Inválida
$myvar;
$var7;
$_element1;
//$house*5;     // Invalida

echo '<h4>Respuesta:</h4>';

echo '<ul>';
echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
echo '<li>$myvar es válida porque inicia con una letra.</li>';
echo '<li>$var7 es válida porque inicia con una letra.</li>';
echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
echo '</ul>';

$a = "ManejadorSQL";
$b = 'MySQL';
$c = &$a;
print_r($a . "\n"); // ¿Qué valor tiene $a? La respuesta es ManejadorSQL porque $a es "ManejadorSQL".
print_r($b . "\n"); // ¿Qué valor tiene $b? La respuesta es MySQL porque $b es 'MySQL'.
print_r($c . "\n"); // ¿Qué valor tiene $c? La respuesta es ManejadorSQL porque $c es una referencia a $a.
$a = "PHP server";
$b = &$a;
print_r($a . "\n"); // ¿Qué valor tiene $a? La respuesta es PHP server porque $a es "PHP server".
print_r($b . "\n"); // ¿Qué valor tiene $b? La respuesta es PHP server porque $b es una referencia a $a.

unset($a, $b, $c);

$a = "PHP5";
print_r($a . "\n"); // ¿Qué valor tiene $a? La respuesta es PHP5 porque $a es "PHP5".
$z[] = &$a;
print_r($z . "\n"); // ¿Qué valor tiene $z? La respuesta es PHP5 porque $z es un array que contiene una referencia a $a.
$b = "5a version de PHP";
print_r($b . "\n"); // ¿Qué valor tiene $b? La respuesta es 5a version de PHP porque $b es "5a version de PHP".
$c = $b*10;
print_r($c . "\n"); // ¿Qué valor tiene $c? La respuesta es Warning: A non-numeric value porque $b no es un número.
$a .= $b;
print_r($a . "\n"); // ¿Qué valor tiene $a? La respuesta es PHP55a version de PHP porque $a es "PHP5" y $b es "5a version de PHP".
$b *= $c;
print_r($b . "\n"); // ¿Qué valor tiene $b? La respuesta es Warning: A non-numeric value porque $b no es un número.
$z[0] = "MySQL";
print_r($z . "\n"); // ¿Qué valor tiene $z? La respuesta es MySQL porque $z es un array que contiene una referencia a $a.

unset($a, $b, $c, $z);

$GLOBALS['a'] = "PHP5";
print_r($GLOBALS['a'] . "\n"); // ¿Qué valor tiene $a? La respuesta es PHP5 porque $a es "PHP5".
$GLOBALS['z'][] = &$GLOBALS['a'];
print_r($GLOBALS['z'] . "\n"); // ¿Qué valor tiene $z? La respuesta es PHP5 porque $z es un array que contiene una referencia a $a.
$GLOBALS['b'] = "5a version de PHP";
print_r($GLOBALS['b'] . "\n"); // ¿Qué valor tiene $b? La respuesta es 5a version de PHP porque $b es "5a version de PHP".
$GLOBALS['c'] = $GLOBALS['b'] * 10;
print_r($GLOBALS['c'] . "\n"); // ¿Qué valor tiene $c? La respuesta es Warning: A non-numeric value porque $b no es un número.
$GLOBALS['a'] .= $GLOBALS['b'];
print_r($GLOBALS['a'] . "\n"); // ¿Qué valor tiene $a? La respuesta es PHP55a version de PHP porque $a es "PHP5" y $b es "5a version de PHP".
$GLOBALS['b'] *= $GLOBALS['c'];
print_r($GLOBALS['b'] . "\n"); // ¿Qué valor tiene $b? La respuesta es Warning: A non-numeric value porque $b no es un número.
$GLOBALS['z'][0] = "MySQL";
print_r($GLOBALS['z'] . "\n"); // ¿Qué valor tiene $z? La respuesta es MySQL porque $z es un array que contiene una referencia a $a.

unset($a, $b, $c, $z);

$a = "7 personas";
print_r($a . "\n"); // ¿Qué valor tiene $a? La respuesta es 7 personas porque $a es "7 personas".
$b = (integer) $a;
print_r($b . "\n"); // ¿Qué valor tiene $b? La respuesta es 7 porque $b es un entero.
$a = "9E3";
print_r($a . "\n"); // ¿Qué valor tiene $a? La respuesta es 9E3 porque $a es "9E3".
$c = (double) $a;
print_r($c . "\n"); // ¿Qué valor tiene $c? La respuesta es 9000 porque $c es un número decimal.
?>
</body>
</html>