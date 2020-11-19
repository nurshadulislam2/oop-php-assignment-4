<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audi</title>
</head>

<body>
    <?php
    require_once "Car.php";
    class Audi extends Car
    {
        public $color;
        public $seats;
    }

    $audi = new Audi();
    $audi->engineStatus = "great";
    $audi->bodyPart = "excelent";
    $audi->seats = 6;
    $audi->color = "black";
    echo $audi->engineStatus . " " . $audi->bodyPart . " " . $audi->color . " " . $audi->seats;
    ?>
</body>

</html>