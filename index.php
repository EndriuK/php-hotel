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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP - Hotels</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2 class="text-center">Dati</h2>
            <?php foreach ($hotels as $hotel) { ?>
                <?php var_dump($hotel); ?>

            <?php } ?>
        </div>
        <div class="container">
            <h2 class="my-4 text-center">Lista degli Hotel</h2>
            <table class="table">
                <thead>
                    <?php foreach ($hotels[0] as $key => $value) { ?>
                        <th class="text-center">
                            <?php echo $key ?>
                        </th>
                    <?php } ?>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $hotel) { ?>
                        <tr>
                            <td class="text-center"><?php echo $hotel['name'] ?></td>
                            <td class="text-center"><?php echo $hotel['description'] ?></td>
                            <td class="text-center"><?php echo $hotel['parking'] ? 'Yes' : 'No' ?></td>
                            <td class="text-center"><?php echo $hotel['vote'] ?></td>
                            <td class="text-center"><?php echo $hotel['distance_to_center'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>