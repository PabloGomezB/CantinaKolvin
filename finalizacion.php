<html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST["arrayComanda"]);
    $arrayObject = json_decode($_POST["arrayComanda"]);
    // print_r($arrayObject);
    foreach ($arrayObject as $object => $value) {
        echo "object: ".$value->nombre;
        echo "<br>";
        // echo "value: ".$value;
        // echo "<br>";
    }
}

?>

<body>
    <?php

    ?>
</body>

</html>