<?php
$frase = 'Hotel Rooms';
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
    <title>Php Hotel Rooms Array</title>
</head>

<body>
    <h1 class="text-center"><?php echo $frase; ?></h1>
    <div class="row">
        <?php
        foreach ($hotels as $hotel) {
        ?>
        <!--<div class="col-4">
            <h2><?php echo $hotel['name'] ?></h2>
            <p><?php echo $hotel['description'] ?></p>
            <p><?php echo $hotel['parking'] ?></p>
            <p>Vote: <?php echo $hotel['vote'] ?></p>
            <p>Distance: <?php echo $hotel['distance_to_center'] ?> km </p>
        </div>-->

        <table class="table text-white table-bordered text-center m-3">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td><?php echo $hotel['name'] ?></td>
                    <td><?php echo $hotel['description'] ?></td>
                    <td><?php echo $hotel['vote'] ?> / 10</td>
                    <td><?php echo $hotel['distance_to_center'] ?> km</td>
                </tr>
            </tbody>
        </table>
        <?php
        } ?>
    </div>
    </div>
</body>

</html>