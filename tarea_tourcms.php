<?php
require_once 'vendor/autoload.php'; //To include the TourCMS API 


//Credentials Setup 
$api_key = '5aed2d3d69ea';
$marketplace_id = 126;
$timeout = 0;
$channel_id = 0;



//TourCMS instance
use TourCMS\Utils\TourCMS as TourCMS;
$tourcms = new TourCMS($marketplace_id, $api_key, 'simplexml', $timeout);


//Variables de testeo
$titulo ="TOURS DE ESPAÑA";
$autor ="Irene Garrido Vives";


// Define search parameters
$params = "country=ES&product_type=4";

//Api call to search for the tours with the parameters
$result = $tourcms->search_tours($params, $channel_id);
  
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .producto { border: 1px solid #ddd; padding: 10px; margin: 10px 0; }
        .producto img { width: 100px; height: auto; }
    </style>
</head>
<body>

    <h1><?= $titulo ?></h1>
    <p><strong>Autor:</strong> <?= $autor ?></p>

    <h2>Lista de Tours</h2>
    <?php foreach ($result->tour as $tour) : ?>
        <div class="tour">
            <h2><a href="<?= $tour->tour_url ?>" target="_blank"><?= $tour->tour_name ?></a></h2>
            <p><strong>Ubicación:</strong> <?= $tour->location ?></p>
            <p><strong>Duración:</strong> <?= $tour->duration_desc ?></p>
            <p><strong>Precio desde:</strong> <?= $tour->from_price ?>€</p>
            <p><?= $tour->summary ?></p>
            <?php if (!empty($tour->thumbnail_image)) : ?>
                <img src="<?= $tour->thumbnail_image ?>" alt="<?= $tour->tour_name ?>">
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    

</body>
</html>