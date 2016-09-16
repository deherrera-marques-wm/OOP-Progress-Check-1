<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP Progress Check</title>
    <?php
        include_once "Classes.php";
    ?>
</head>
<body>
<?php
$obj = new car_model('Nissan' , 'Toyota' , 'Buick' , 'Hyundai' , 'Mitsubishi');

echo 'Model: ' . $obj->get_model() , '</br>';

$fast = new car_model('Ferrari' , 'SUV' , 'Mustang', '', '');

echo 'Cars: ' . $fast->get_model() , '</br>';
?>
</body>
</html>
