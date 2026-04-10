<?php
$celsius = 37.841;

echo "Fahrenheit (F) = " . number_format(celcius_to_fahrenheit($celsius), 4, ",") . "<br />";
echo "Reamur (R) = " . number_format(celcius_to_reamur($celsius), 4, ",") . "<br />";
echo "Kelvin (K) = " . number_format(celcius_to_kelvin($celsius), 4, ",") . "<br />";

function celcius_to_fahrenheit($celsius) {
    $fahrenheit = $celsius * 9 / 5 + 32;
    return $fahrenheit;
}

function celcius_to_reamur($celsius) {
    $reamur = $celsius * 4 / 5;
    return $reamur;
}

function celcius_to_kelvin($celsius) {
    $kelvin = $celsius + 273.15;
    return $kelvin;
}
?>