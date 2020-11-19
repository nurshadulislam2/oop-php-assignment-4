<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captain America</title>
</head>

<body>
    <?php
    require_once "SuperPower.php";

    class CaptainAmerica extends SuperPower
    {
    }

    $captainAmerica = new CaptainAmerica();
    echo $captainAmerica->superHumans();
    ?>
</body>

</html>