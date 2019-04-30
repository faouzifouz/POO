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
                <div class="card">
                <?php

                $audi= new Voiture(120000,"img/audi.jpg","Audi","Grise","A3", "BESUD523", 2016, 2.5 );
                echo $audi->rouler();
                echo $audi->display();  
                ?> 
            </div>
            </div>
            <div class="col-md-3">
            <div class="card">
                <?php
                 $alfa= new Voiture(90000,"img/alfa.jpg","Alfa","Grise","Gris clair", "FRSUD523", 2010, 3.5 );
                 echo $alfa->display();  
                     
                ?> 
            </div>
            </div>
            <div class="col-md-3">
            <div class="card">
                <?php
                 $vw= new Voiture(150000,"img/volkswagen.jpg","Golf","Blache","Beetle", "DESUD523", 2019, 1.5 );
                 echo $vw->display();  
                 echo $vw->rouler();
                     
                ?> 
            </div>
            </div>
            <div class="col-md-3">
            <div class="card">
                <?php
                 $alfa= new Voiture(90000,"img/alfa.jpg","Alfa","Grise","Romeo", "FRSUD523", 2010, 3.5 );
                 echo $alfa->display();  
                     
                ?> 
            </div>
            </div>
            
            
          
        </div>
    </div>
</body>
</html>
