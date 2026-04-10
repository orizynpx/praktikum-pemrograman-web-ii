<?php
$height = 5.4;
$length = 8.9;
$side = 7.9;

echo "Volume prisma beralas segitiga: ";

$prism_volume = calculate_prism_volume($height, $length, $side);

echo number_format($prism_volume, 3, ",") . " m3 <br>";

function calculate_prism_volume($height, $length, $side) {
    $base_area = 0.5 * $length * $side;
    $prism_volume = $base_area * $height;

    return $prism_volume;
}
?>