<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 6</title>
</head>
<body>
<h2>Ejercicio 1</h2>
<p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
<?php
include 'src/funciones.php';

if (isset($_GET['numero'])) {
    $num = $_GET['numero'];
    if (esMultiploDe5y7($num)) {
        echo '<h3>R= El número ' . $num . ' SÍ es múltiplo de 5 y 7.</h3>';
    } else {
        echo '<h3>R= El número ' . $num . ' NO es múltiplo de 5 y 7.</h3>';
    }
}
?>

<h2>Generación de Secuencias</h2>
<?php
list($secuencias, $iteraciones) = generarSecuencia();

echo "<h2>Secuencias Generadas</h2>";
echo "<table border='1'>";
foreach ($secuencias as $secuencia) {
    echo "<tr>";
    foreach ($secuencia as $num) {
        echo "<td>$num</td>";
    }
    echo "</tr>";
}
echo "</table>";

$totalNumeros = $iteraciones * 3;
echo "<p>$totalNumeros números obtenidos en $iteraciones iteraciones</p>";
?>
<h2>Encontrar Múltiplo</h2>
<?php
if (isset($_GET['multiplo'])) {
    $multiplo = $_GET['multiplo'];

    list($numeroWhile, $iteracionesWhile) = encontrarMultiploWhile($multiplo);
    echo "<p>Usando while: Número encontrado = $numeroWhile en $iteracionesWhile iteraciones</p>";

    list($numeroDoWhile, $iteracionesDoWhile) = encontrarMultiploDoWhile($multiplo);
    echo "<p>Usando do-while: Número encontrado = $numeroDoWhile en $iteracionesDoWhile iteraciones</p>";
} else {
    echo '<p>Por favor, proporciona un número en la URL usando el parámetro "multiplo".</p>';
}
?>
<h2>Arreglo ASCII</h2>
<?php
$arreglo = crearArregloAscii();

echo '<table border="1">';
echo '<tr><th>Índice</th><th>Valor</th></tr>';
foreach ($arreglo as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo '</table>';
?>

<h2>Formulario de Edad y Sexo</h2>
<form action="" method="post">
    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad" required><br>
    <label for="sexo">Sexo:</label>
    <select name="sexo" id="sexo" required>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
    </select><br>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];

    if ($sexo == "femenino" && $edad >= 18 && $edad <= 35) {
        echo "<p>Bienvenida, usted está en el rango de edad permitido.</p>";
    } else {
        echo "<p>Error: No cumple con los requisitos.</p>";
    }
}
?>

<?php
$parqueVehicular = [
    'ABC1234' => [
        'Auto' => [
            'Marca' => 'Toyota',
            'Modelo' => 2020,
            'Tipo' => 'sedan'
        ],
        'Propietario' => [
            'Nombre' => 'Juan Perez',
            'Ciudad' => 'Ciudad de México',
            'Dirección' => 'Calle Falsa 123'
        ]
    ],
    'DEF5678' => [
        'Auto' => [
            'Marca' => 'Honda',
            'Modelo' => 2019,
            'Tipo' => 'hachback'
        ],
        'Propietario' => [
            'Nombre' => 'Maria Lopez',
            'Ciudad' => 'Guadalajara',
            'Dirección' => 'Avenida Siempre Viva 456'
        ]
    ],
    'GHI9012' => [
        'Auto' => [
            'Marca' => 'Ford',
            'Modelo' => 2018,
            'Tipo' => 'camioneta'
        ],
        'Propietario' => [
            'Nombre' => 'Carlos Sanchez',
            'Ciudad' => 'Monterrey',
            'Dirección' => 'Boulevard de los Sueños 789'
        ]
    ],
    'JKL3456' => [
        'Auto' => [
            'Marca' => 'Chevrolet',
            'Modelo' => 2021,
            'Tipo' => 'sedan'
        ],
        'Propietario' => [
            'Nombre' => 'Ana Martinez',
            'Ciudad' => 'Puebla',
            'Dirección' => 'Calle de la Amargura 101'
        ]
    ],
    'MNO7890' => [
        'Auto' => [
            'Marca' => 'Nissan',
            'Modelo' => 2017,
            'Tipo' => 'hachback'
        ],
        'Propietario' => [
            'Nombre' => 'Luis Gomez',
            'Ciudad' => 'Tijuana',
            'Dirección' => 'Avenida de la Paz 202'
        ]
    ],
    'PQR1234' => [
        'Auto' => [
            'Marca' => 'Mazda',
            'Modelo' => 2016,
            'Tipo' => 'camioneta'
        ],
        'Propietario' => [
            'Nombre' => 'Laura Hernandez',
            'Ciudad' => 'León',
            'Dirección' => 'Calle de la Alegría 303'
        ]
    ],
    'STU5678' => [
        'Auto' => [
            'Marca' => 'Volkswagen',
            'Modelo' => 2015,
            'Tipo' => 'sedan'
        ],
        'Propietario' => [
            'Nombre' => 'Pedro Ramirez',
            'Ciudad' => 'Querétaro',
            'Dirección' => 'Avenida de los Insurgentes 404'
        ]
    ],
    'VWX9012' => [
        'Auto' => [
            'Marca' => 'BMW',
            'Modelo' => 2022,
            'Tipo' => 'hachback'
        ],
        'Propietario' => [
            'Nombre' => 'Sofia Torres',
            'Ciudad' => 'Mérida',
            'Dirección' => 'Boulevard de los Reyes 505'
        ]
    ],
    'YZA3456' => [
        'Auto' => [
            'Marca' => 'Audi',
            'Modelo' => 2021,
            'Tipo' => 'camioneta'
        ],
        'Propietario' => [
            'Nombre' => 'Miguel Diaz',
            'Ciudad' => 'Cancún',
            'Dirección' => 'Calle de los Sueños 606'
        ]
    ],
    'BCD7890' => [
        'Auto' => [
            'Marca' => 'Mercedes',
            'Modelo' => 2020,
            'Tipo' => 'sedan'
        ],
        'Propietario' => [
            'Nombre' => 'Elena Ruiz',
            'Ciudad' => 'Toluca',
            'Dirección' => 'Avenida de la Luz 707'
        ]
    ],
    'EFG1234' => [
        'Auto' => [
            'Marca' => 'Kia',
            'Modelo' => 2019,
            'Tipo' => 'hachback'
        ],
        'Propietario' => [
            'Nombre' => 'Jorge Morales',
            'Ciudad' => 'Chihuahua',
            'Dirección' => 'Calle de la Esperanza 808'
        ]
    ],
    'HIJ5678' => [
        'Auto' => [
            'Marca' => 'Hyundai',
            'Modelo' => 2018,
            'Tipo' => 'camioneta'
        ],
        'Propietario' => [
            'Nombre' => 'Patricia Fernandez',
            'Ciudad' => 'Saltillo',
            'Dirección' => 'Boulevard de los Héroes 909'
        ]
    ],
    'KLM9012' => [
        'Auto' => [
            'Marca' => 'Jeep',
            'Modelo' => 2017,
            'Tipo' => 'sedan'
        ],
        'Propietario' => [
            'Nombre' => 'Ricardo Ortiz',
            'Ciudad' => 'Aguascalientes',
            'Dirección' => 'Avenida de la Revolución 1010'
        ]
    ],
    'NOP3456' => [
        'Auto' => [
            'Marca' => 'Subaru',
            'Modelo' => 2016,
            'Tipo' => 'hachback'
        ],
        'Propietario' => [
            'Nombre' => 'Gabriela Castro',
            'Ciudad' => 'Morelia',
            'Dirección' => 'Calle de la Libertad 1111'
        ]
    ],
    'QRS7890' => [
        'Auto' => [
            'Marca' => 'Tesla',
            'Modelo' => 2022,
            'Tipo' => 'camioneta'
        ],
        'Propietario' => [
            'Nombre' => 'Fernando Vega',
            'Ciudad' => 'San Luis Potosí',
            'Dirección' => 'Boulevard de los Ángeles 1212'
        ]
    ]
];
echo "<h2>Parque Vehicular</h2>";
print_r($parqueVehicular);
?>
<h2>Consulta de Parque Vehicular</h2>
<form action="" method="post">
    <label for="matricula">Matrícula:</label>
    <input type="text" name="matricula" id="matricula"><br>
    <input type="submit" name="consulta" value="Consultar por Matrícula">
    <input type="submit" name="consulta" value="Consultar Todos">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $consulta = $_POST['consulta'];

    if ($consulta == "Consultar por Matrícula" && !empty($_POST['matricula'])) {
        $matricula = $_POST['matricula'];
        if (isset($parqueVehicular[$matricula])) {
            $vehiculo = $parqueVehicular[$matricula];
            echo "<h3>Detalles del Vehículo con Matrícula $matricula</h3>";
            echo "<p>Marca: " . $vehiculo['Auto']['Marca'] . "</p>";
            echo "<p>Modelo: " . $vehiculo['Auto']['Modelo'] . "</p>";
            echo "<p>Tipo: " . $vehiculo['Auto']['Tipo'] . "</p>";
            echo "<p>Propietario: " . $vehiculo['Propietario']['Nombre'] . "</p>";
            echo "<p>Ciudad: " . $vehiculo['Propietario']['Ciudad'] . "</p>";
            echo "<p>Dirección: " . $vehiculo['Propietario']['Dirección'] . "</p>";
        } else {
            echo "<p>No se encontró un vehículo con la matrícula $matricula.</p>";
        }
    } elseif ($consulta == "Consultar Todos") {
        echo "<h3>Todos los Vehículos Registrados</h3>";
        foreach ($parqueVehicular as $matricula => $vehiculo) {
            echo "<h4>Matrícula: $matricula</h4>";
            echo "<p>Marca: " . $vehiculo['Auto']['Marca'] . "</p>";
            echo "<p>Modelo: " . $vehiculo['Auto']['Modelo'] . "</p>";
            echo "<p>Tipo: " . $vehiculo['Auto']['Tipo'] . "</p>";
            echo "<p>Propietario: " . $vehiculo['Propietario']['Nombre'] . "</p>";
            echo "<p>Ciudad: " . $vehiculo['Propietario']['Ciudad'] . "</p>";
            echo "<p>Dirección: " . $vehiculo['Propietario']['Dirección'] . "</p>";
            echo "<hr>";
        }
    }
}
?>
<h2>Ejemplo de POST</h2>
<form action="http://localhost/tecweb/practicas/p04/index.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>
<br>
<?php
if(isset($_POST["name"]) && isset($_POST["email"]))
{
    echo $_POST["name"];
    echo '<br>';
    echo $_POST["email"];
}
?>
</body>
</html>