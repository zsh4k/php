<?php
// Obtener los números ingresados como argumentos de la línea de comandos
$num1 = $argv[1];
$num2 = $argv[2];

// Verificar si se ingresaron los dos números
if (isset($num1) && isset($num2)) {
    // Realizar la suma
    $resultado = $num1 + $num2;
    echo "La suma de $num1 y $num2 es: $resultado\n";
} else {
    echo "Por favor, ingresa dos números como argumentos.\n";
}
?>
