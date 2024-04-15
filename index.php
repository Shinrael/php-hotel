<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <header class="d-flex text-center justify-content-center ">
    <form method="GET" class="mb-4">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="parking" id="parkingCheckbox" value="1">
        <label class="form-check-label" for="parkingCheckbox">
            Mostra Hotel con parcheggio
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Vai</button>
    </form>    
  </header>
  <div class="container d-flex pt-5">    
    <?php 
    $hotels_filtrati = $hotels;
    if (isset($_GET['parking']) and $_GET['parking'] == '1') {
        $hotels_filtrati = array_filter($hotels_filtrati, function($hotel) {
            return $hotel['parking'];
        });
    }
    
    foreach($hotels_filtrati as $hotel) : 
      $nome_albergo = $hotel['name'];
      $descrizione = $hotel['description'];
      $parcheggio = $hotel['parking'] ? 'si' : 'no';
      $voto = $hotel['vote'];
      $distanza_dal_centro = $hotel['distance_to_center'];
      ?>
        <div class="card me-3" style="width: 18rem;">
          <div class="card-body text-center ">
            <h5 class="card-title mb-4"><?php echo $nome_albergo ?></h5>
            <h6 class="card-subtitle mb-4 text-body-secondary"><?php echo $descrizione ?></h6>
            <p class="card-text">Parcheggio: <?php echo $parcheggio ?></p>
            <p class="card-text">Voto: <?php echo $voto ?></p>
            <p class="card-text">Distanza dal centro: <?php echo $distanza_dal_centro ?> km</p>
          </div>
        </div>
    <?php endforeach ?>
  </div>
</body>
</html>