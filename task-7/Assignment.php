<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>

<body>
    <?php
    class Assignment
    {
        public $assignment;

        function __construct($assignment)
        {
            $this->assignment = $assignment;
        }

        public function wordCount()
        {
            return str_word_count($this->assignment);
        }

        public function lowestNumber()
        {
            $arr = explode(" ", $this->assignment);


            if (strlen($arr[0]) < strlen($arr[1]) && strlen($arr[0]) < strlen($arr[2]) && strlen($arr[0]) < strlen($arr[3])) {
                echo "Smallest word is " . $arr[0] . " and length is " . strlen($arr[0]);
            } elseif (strlen($arr[1]) < strlen($arr[0]) && strlen($arr[1]) < strlen($arr[2]) && strlen($arr[1]) < strlen($arr[3])) {
                echo "Smallest word is " . $arr[1] . " and length is " . strlen($arr[1]);
            } elseif (strlen($arr[2]) < strlen($arr[0]) && strlen($arr[2]) < strlen($arr[1]) && strlen($arr[2]) < strlen($arr[3])) {
                echo "Smallest word is " . $arr[2] . " and length is " . strlen($arr[2]);
            } else {
                echo "Smallest word is " . $arr[3] . " and length is " . strlen($arr[3]);
            }
        }

        public function replace()
        {
            $sentence = str_replace("APPLICATION", "WEBSITE", $this->assignment);
            echo $sentence;
        }
    }

    $assignment = new Assignment("ADVANCED WEB APPLICATION DEVELOPMENT");
    echo "Total word is " . $assignment->wordCount() . "<br> ";
    $assignment->lowestNumber();
    echo "<br>";
    $assignment->replace();
    ?>
</body>

</html>