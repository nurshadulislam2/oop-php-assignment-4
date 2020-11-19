<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Satatus</title>
</head>

<body>
    <?php
    require_once "Gorib.php";

    class MyStatus implements Gorib
    {
        public function lowMoney()
        {
            echo "No money!!! <br>";
        }
        public function Homeless()
        {
            echo "No home!!!";
        }
    }
    $myStatus = new MyStatus();
    $myStatus->lowMoney();
    $myStatus->Homeless();
    ?>
</body>

</html>