<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 4</title>
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
echo("<h2>Ejercicio 2</h2>");
echo("<div>$a </div>"); // ¿Qué valor tiene $a? La respuesta es ManejadorSQL porque $a es "ManejadorSQL".
echo('¿Qué valor tiene $a? La respuesta es ManejadorSQL porque $a es "ManejadorSQL"');
echo("<div>$b </div>"); // ¿Qué valor tiene $b? La respuesta es MySQL porque $b es 'MySQL'.
echo('¿Qué valor tiene $b? La respuesta es MySQL porque $b es \'MySQL\'');
echo("<div>$c </div>"); // ¿Qué valor tiene $c? La respuesta es ManejadorSQL porque $c es una referencia a $a.
echo('¿Qué valor tiene $c? La respuesta es ManejadorSQL porque $c es una referencia a $a');
echo("<br />");
echo("<br />");

$a = "PHP server";
$b = &$a;
echo("<div>$a </div>"); // ¿Qué valor tiene $a? La respuesta es PHP server porque $a es "PHP server".
echo('¿Qué valor tiene $a? La respuesta es PHP server porque $a es "PHP server"');
echo("<div>$b </div>"); // ¿Qué valor tiene $b? La respuesta es PHP server porque $b es una referencia a $a.
echo('¿Qué valor tiene $b? La respuesta es PHP server porque $b es una referencia a $a');

unset($a, $b, $c);
echo("<br />");
echo("<br />");

echo("<h2>Ejercicio 3</h2>");
$a = "PHP5";
echo("<div>$a </div>"); // ¿Qué valor tiene $a? La respuesta es PHP5 porque $a es "PHP5".
echo('¿Qué valor tiene $a? La respuesta es PHP5 porque $a es "PHP5"');
$z[] = &$a;
echo("<div>$z[0] </div>"); // ¿Qué valor tiene $z? La respuesta es PHP5 porque $z es un array que contiene una referencia a $a.
echo('¿Qué valor tiene $z? La respuesta es PHP5 porque $z es un array que contiene una referencia a $a');
$b = "5a version de PHP";
echo("<div>$b </div>"); // ¿Qué valor tiene $b? La respuesta es 5a version de PHP porque $b es "5a version de PHP".
echo('¿Qué valor tiene $b? La respuesta es 5a version de PHP porque $b es "5a version de PHP"');
@$c = $b*10;
echo("<div>$c </div>"); // ¿Qué valor tiene $c? La respuesta es 50 porque $b es "5a version de PHP".
echo('¿Qué valor tiene $c? La respuesta es 50 porque $b es "5a version de PHP"');
$a .= $b;
echo("<div>$a </div>"); // ¿Qué valor tiene $a? La respuesta es PHP55a version de PHP porque $a es "PHP5" y $b es "5a version de PHP".
echo('¿Qué valor tiene $a? La respuesta es PHP55a version de PHP porque $a es "PHP5" y $b es "5a version de PHP"');
@$b *= $c;
echo("<div>$b </div>"); // ¿Qué valor tiene $b? La respuesta es 250 porque $b es "5a version de PHP".
echo('¿Qué valor tiene $b? La respuesta es 250 porque $b es "5a version de PHP"');
$z[0] = "MySQL";
echo("<div>$z[0] </div>"); // ¿Qué valor tiene $z? La respuesta es MySQL porque $z es un array que contiene una referencia a $a.
echo('¿Qué valor tiene $z? La respuesta es MySQL porque $z es un array que contiene una referencia a $a');

unset($a, $b, $c, $z);
echo("<br />");
echo("<br />");

echo("<h2>Ejercicio 4 GLOBALS</h2>");
$GLOBALS['a'] = "PHP5";
echo("<div>" . $GLOBALS['a'] . "</div>"); // ¿Qué valor tiene $a? La respuesta es PHP5 porque $a es "PHP5".
echo('¿Qué valor tiene $a? La respuesta es PHP5 porque $a es "PHP5"');
$GLOBALS['z'][] = &$GLOBALS['a'];
echo("<div>" . $GLOBALS['z'][0] . "</div>"); // ¿Qué valor tiene $z? La respuesta es PHP5 porque $z es un array que contiene una referencia a $a.
echo('¿Qué valor tiene $z? La respuesta es PHP5 porque $z es un array que contiene una referencia a $a');
$GLOBALS['b'] = "5a version de PHP";
echo("<div>" . $GLOBALS['b'] . "</div>"); // ¿Qué valor tiene $b? La respuesta es 5a version de PHP porque $b es "5a version de PHP".
echo('¿Qué valor tiene $b? La respuesta es 5a version de PHP porque $b es "5a version de PHP"');
@$GLOBALS['c'] = $GLOBALS['b'] * 10;
echo("<div>" . $GLOBALS['c'] . "</div>"); // ¿Qué valor tiene $c? La respuesta es 50 porque $b es "5a version de PHP".
echo('¿Qué valor tiene $c? La respuesta es 50 porque $b es "5a version de PHP"');
$GLOBALS['a'] .= $GLOBALS['b'];
echo("<div>" . $GLOBALS['a'] . "</div>"); // ¿Qué valor tiene $a? La respuesta es PHP55a version de PHP porque $a es "PHP5" y $b es "5a version de PHP".
echo('¿Qué valor tiene $a? La respuesta es PHP55a version de PHP porque $a es "PHP5" y $b es "5a version de PHP"');
@$GLOBALS['b'] *= $GLOBALS['c'];
echo("<div>" . $GLOBALS['b'] . "</div>"); // ¿Qué valor tiene $b? La respuesta es 250 porque $b es "5a version de PHP".
echo('¿Qué valor tiene $b? La respuesta es 250 porque $b es "5a version de PHP"');
$GLOBALS['z'][0] = "MySQL";
echo("<div>" . $GLOBALS['z'][0] . "</div>"); // ¿Qué valor tiene $z? La respuesta es MySQL porque $z es un array que contiene una referencia a $a.
echo('¿Qué valor tiene $z? La respuesta es MySQL porque $z es un array que contiene una referencia a $a');
echo("<br />");
echo("<br />");

echo("<h2>Ejercicio 5</h2>");

$a = "7 personas";
echo("<div>$a </div>"); // ¿Qué valor tiene $a? La respuesta es 7 personas porque $a es "7 personas".
echo('¿Qué valor tiene $a? La respuesta es 7 personas porque $a es "7 personas"');
$b = (integer) $a;
echo("<div>$b </div>"); // ¿Qué valor tiene $b? La respuesta es 7 porque $b es un número entero.
echo('¿Qué valor tiene $b? La respuesta es 7 porque $b es un número entero');
$a = "9E3";
echo("<div>$a </div>"); // ¿Qué valor tiene $a? La respuesta es 9E3 porque $a es "9E3".
echo('¿Qué valor tiene $a? La respuesta es 9E3 porque $a es "9E3"');
$c = (double) $a;
echo("<div>$c </div>"); // ¿Qué valor tiene $c? La respuesta es 9000 porque $c es un número decimal.
echo('¿Qué valor tiene $c? La respuesta es 9000 porque $c es un número decimal');
unset($a, $b, $c);
echo("<br />");
echo("<br />");

$a = "0";
$b = "TRUE";
$c = FALSE;
$d = ($a OR $b);
$e = ($a AND $c);
$f = ($a XOR $b);
echo("<h2>Ejercicio 6</h2>");
echo '<h2>Valores Booleanos</h2>';
echo '<ul>';
echo '<li>$a: '; var_dump($a); echo '</li>';
echo '<li>$b: '; var_dump($b); echo '</li>';
echo '<li>$c: '; var_dump($c); echo '</li>';
echo '<li>$d: '; var_dump($d); echo '</li>';
echo '<li>$e: '; var_dump($e); echo '</li>';
echo '<li>$f: '; var_dump($f); echo '</li>';
echo '</ul>';

echo '<h2>Transformar valores booleanos var_export</h2>';
echo '<ul>';
echo '<li>$c: ' . var_export($c, true) . '</li>';
echo '<li>$e: ' . var_export($e, true) . '</li>';
echo '</ul>';
unset($a, $b, $c, $d, $e, $f);
?>
</body>
</html>