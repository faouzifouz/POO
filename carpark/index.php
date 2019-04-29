<?php
require 'car.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Parking</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-3">
                <?php

                $voiture= new voiture();
                $voiture->img("https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjFgL_kqfXhAhXI26QKHeEVCEQQjRx6BAgBEAU&url=https%3A%2F%2Fwww.audi-mediacenter.com%2Fen%2Fthe-new-audi-tt-and-audi-tts-11105%2Fchassis-11111&psig=AOvVaw2ZbtCfLto_gtt37DMX0qNT&ust=1556628091761930");
                $voiture->mat("BESUD523");
                $voiture->datCirc("2 aout 2016");
                $voiture->kilo("120000 km");
                $voiture->mod("A3");
                $voiture->marque("AUDI");
                $voiture->col("Black");
                $voiture->poids("2,5 tonne");
                

                ?> 
            </div>
            <div class="col-md-3">
                <?php
                $voiture= new voiture();
                $voiture->img("img/al+fa.jpg");
                $voiture->mat("FRSUD523");
                $voiture->datCirc("10 septembre 2015");
                $voiture->kilo("90000 km");
                $voiture->mod("Romeo");
                $voiture->marque("Alfa");
                $voiture->col("grise");
                $voiture->poids("1,5 tonne");               
                ?> 
            </div>
            
            
          
        </div>
    </div>
</body>
</html>
