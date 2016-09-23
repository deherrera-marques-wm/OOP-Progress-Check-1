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
$obj = new car_model('Nissan' , 'Toyota' , 'Buick');

echo 'Model: ' . $obj->get_model() , '</br>';
echo 'Engine: ' . $obj->get_engine(), '</br>';

$fast = new car_model('Ferrari' , 'SUV' , 'Mustang');

echo 'Model: ' . $fast->get_model() , '</br>';
echo 'Engine: ' . $fast->get_engine() , '</br>';


var $color = new shiningColor();
$color->color='yellow';
$color->name='Mustang';
echo $color->describe();
?>
</body>
</html>
