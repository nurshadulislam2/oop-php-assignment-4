<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>

<body>
    <?php
    class MyName
    {
        private $name = "Nurshadul Islam";
        public function printName()
        {
            return $this->name;
        }
    }

    $name = new MyName();
    echo "My name is " . $name->printName();
    ?>
</body>

</html>