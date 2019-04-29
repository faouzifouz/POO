<?php
class voiture {

   
    public function img($image){
        echo"<img src=".$image."/>";
    
    }

    public function mat ($matricule){
        echo '<p>'.$matricule.'</p>';
        $origine = substr($matricule, 0, 2);
        switch ($origine) {
            case 'BE':
                echo 'Origine : Belgique';
                break;

            case 'FR':
                echo 'Origine : France';
                break;

            case 'DE':
                echo 'Origine : Allemagne';     
                break;

            default:
                echo'Pas homologuer';
                break;
        }
        

    } 
    public function datCirc($dateCirculation){
        echo '<p> Mise en circulation : '.$dateCirculation.'</p>';

    } 
    public function kilo($kilom) {
        echo '<p> Kilomètre : '.$kilom.'</p>';
        if ($kilom<100000) {
            echo'Low';

    } 
   elseif ($kilom>100000) {
       echo'Middle';
   }
   elseif ($kilom>200000) {
       echo'Hight';
   }
}
    public function rouler(){
           $this->$kilom +=100000; 

        
}
    public function mod($modele){
        echo '<p> Modèle : '.$modele.'</p>';
    } 
    public function marque ($marque){
        echo '<p> Marque : '.$marque.'</p>';
        if ($marque=="AUDI") {
            echo' Disponibilité : Réserver';
        }
        else {
            echo ' Disponibilité : Free';
        }
    } 
    public function col ($color){
        echo '<p> Couleur : '.$color.'</p>';
    } 
    public function  poids ($poids) {
        echo '<p> Poids : '.$poids.'</p>';
        if ($poids>=3.5) {
            echo' Usage : Utilitaire';
        }
        else {
            echo ' Usage : Commercial';
        }
    }
   
}



?>

