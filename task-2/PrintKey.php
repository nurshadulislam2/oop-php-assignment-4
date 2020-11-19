<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key</title>
</head>

<body>
    <?php
    class PrintKey
    {
        private $key;
        public function setter($key)
        {
            $this->key = $key;
        }

        public function getter()
        {
            echo $this->key;
        }
    }

    $key = new PrintKey();
    $key->setter(10);
    $key->getter();
    ?>
</body>

</html>