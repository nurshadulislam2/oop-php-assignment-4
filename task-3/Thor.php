<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thor</title>
</head>

<body>
    <?php
    require_once "SuperPower.php";

    class Thor extends SuperPower
    {
    }

    $thor = new Thor();
    echo $thor->flying();
    ?>
</body>

</html>