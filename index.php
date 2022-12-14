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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels list</title>

    <!-- link bootstrap  -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>

</head>

<body>

    <div class="container p-3 text-center">

        <form action="index.php" method="get" class="mb-3">

            <label for="votes">Filtro per valutazione hotel</label>

            <select name="votes" id="votes">
                <option value="1">1 stella</option>
                <option value="2">2 stelle</option>
                <option value="3">3 stelle</option>
                <option value="4">4 stelle</option>
                <option value="5">5 stelle</option>
            </select>

            <label for="parking">Presenza parcheggio </label>

            <select name="parking" id="parking">
                <option value="true">Si, ?? presente un parcheggio</option>
                <option value="false">No, il parcheggio non ?? presente</option>
            </select>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="row row-cols">

            <?php foreach ($hotels as $key => $hotel) : ?>

                <div class="col">

                    <div class="card p-3">

                        <h3><?php echo $hotel['name'] ?></h3>

                        <p><?php echo $hotel['description'] ?></p>

                        <p>Valutazione hotel: <?php echo $hotel['vote'] ?> stelle</p>

                    </div>

                </div>

            <?php endforeach ?>

        </div>

        <span><?php echo $valutation ?></span>

        <span><?php echo $parkingLot ?></span>

    </div>



    <!-- script bootstrap -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>

</body>

</html>