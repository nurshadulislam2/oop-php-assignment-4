<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iron Man</title>
</head>

<body>
    <?php
    require_once "SuperPower.php";

    class IronMan extends SuperPower
    {
    }

    $ironman = new IronMan();
    echo $ironman->laserEye();
    ?>
</body>

</html>