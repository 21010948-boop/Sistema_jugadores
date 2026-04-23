<?php

// 1. Array asociativo (nombre => puntuación y fecha)
$jugadores = [
    "pixel_hero96" => ["puntuacion" => 1200, "fecha" => "2024-06-15"],
    "cyber_ninja22" => ["puntuacion" => 1500, "fecha" => "2024-07-02"],
    "storm_wolf" => ["puntuacion" => 1800, "fecha" => "2024-07-10"],
    "galactic_gamer" => ["puntuacion" => 1100, "fecha" => "2024-06-30"],
    "arcade_master" => ["puntuacion" => 1600, "fecha" => "2024-07-15"],
    "star_chaser91" => ["puntuacion" => 1400, "fecha" => "2024-05-25"],
    "vortex_warrior" => ["puntuacion" => 1700, "fecha" => "2024-07-20"],
    "lone_wolf47" => ["puntuacion" => 1300, "fecha" => "2024-06-05"],
    "game_wizard99" => ["puntuacion" => 1450, "fecha" => "2024-07-28"],
    "cosmic_rider22" => ["puntuacion" => 1550, "fecha" => "2024-04-10"]
];


// 2. Calcular promedio con bucle
$suma = 0;
$total = count($jugadores);

foreach ($jugadores as $jugador) {
    $suma += $jugador["puntuacion"];
}

$promedio = $suma / $total;


// 3. Filtrar jugadores de julio 2024 (función de orden superior)
$filtrados = array_filter($jugadores, function($jugador) {
    return strpos($jugador["fecha"], "2024-07") === 0;
});

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados del Sistema</title>
</head>
<body>

    <h2>Promedio de puntuaciones:</h2>
    <p><?php echo $promedio; ?></p>

    <h2>Resultado del filtro (Julio 2024):</h2>

    <ul>
        <?php foreach ($filtrados as $nombre => $datos): ?>
            <li>
                <?php echo "$nombre: {$datos['puntuacion']}, fecha: {$datos['fecha']}"; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>