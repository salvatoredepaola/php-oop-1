<?php 

require __DIR__ . '/models/movie.php';
require __DIR__ . '/models/genre.php';

$movie = [
    new Movie(
        "nome film", 
        120 , 
        new Genre("animazione"), 
        "https://picsum.photos/200/300"),
    new Movie(
        "nome film2", 
        100 , 
        new Genre("horror"), 
        "https://picsum.photos/200/300")
];

var_dump($movie);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php foreach($movie as $film) { ?>

        <div>
            <h2><?= $film->nome ?></h2>
            <h3> durata: <?=  $film->durata ?> minuti</h3>
            <h4>genere: <?= $film->genere->nome ?></h4>
            <img src="<?= $film->poster ?>" alt="<?= $film->nome ?>">
        </div>

    <?php } ?>

</body>
</html>