<?php

    $radius = floatval($_POST["radius-of-cylinder"]);
    $height = floatval($_POST["height-of-cylinder"]);
    // calculating the volume of the cylinder
    $volume = pi() * $radius ** 2 * $height;

    // calculating the surface area of the cylinder
    $surfaceArea = 2 * pi() * $radius * $height + 2 * pi() * $radius **2;

    echo "<h3>Results:</h3>";
    echo "The volume of the cylinder is " . number_format($volume, 2) . "cm<sup>3</sup> and the surface area of the cylinder is " . number_format($surfaceArea, 2) . "cm<sup>2</sup>.";
?>
