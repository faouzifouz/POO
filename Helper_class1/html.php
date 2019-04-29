<?php
class Html {

    public function css($cssLink){

        echo '<link rel="stylesheet" href="'.$cssLink.'">';
    }
    public function meta($name){

        echo '<meta name="'.$name.'">';
    }
    public function img($src){

        echo '<img src="'.$src.'">';
    }
    public function lien($href){

        echo '<a href="'.$href.'"></a>';
    }
}

$html = new Html();
$html->css("lien css");
$html->meta("balise meta");
$html->img("../carpark/img/audi.jpg");
$html->lien("www.google.be");


?>