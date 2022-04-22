<?php
function GenerateRandomColor ()
{
    $color = rand(0,999999);
    return "#" . $color;
}
function GenerateRandomShape(){
    $shape = rand(0,100) . "%" . " " .  rand(0,100) . "%" . ","  . rand(0,100) . "%" . " " .  rand(0,100) . "%" . ","  . rand(0,100) . "%" . " " .  rand(0,100) . "%" . ","  . rand(0,100) . "%" . " " .  rand(0,100) . "%" . ","  . rand(0,100) . "%" . " " .  rand(0,100) . "%" ;
    return $shape;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Random Color and Shape</title>
    <style>
        .generated{
            background-color: <?=GenerateRandomColor(); ?>;
            height: 500px;
            width:500px;
            clip-path: polygon(<?=GenerateRandomShape();?>);
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div class="generated"></div>
</body>
</html>