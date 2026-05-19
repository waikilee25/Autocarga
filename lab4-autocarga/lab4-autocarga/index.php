<?php

require_once __DIR__ . '/vendor/autoload.php';


use App\Controllers\usuario;


$cliente = new usuario();

echo "<h1>Prueba de Autoload PSR-4</h1>";
echo "<p>" . $cliente->obtenerDatos() . "</p>";