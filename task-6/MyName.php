<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Name</title>
</head>

<body>
    <?php
    class MyName
    {
        public $name;

        function __construct($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            echo "welcome " . $this->name;
        }
    }

    $myname = new MyName("Sajal");
    $myname->getName();
    ?>
</body>

</html>