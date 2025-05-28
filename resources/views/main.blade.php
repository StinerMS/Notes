<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome View and Blade!</h1>
    <hr>
    <h3>The value is {{$value}}</h3>
    <@php
        // Foi dito que {{}} é utilizado para Blade, "substituindo" a forma tradicional que seria:
        // <?= $value ?>
        // <?php echo $value ?>
    @endphp
</body>
</html>