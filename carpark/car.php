<?php
class voiture {

   
    public function __construct($km, $img, $marque, $color,$modele, $immatriculation,  $dateCirculation,  $kilo){
        $this->kilometre = $km;
        $this->image = $img;
        $this->marque = $marque;
        $this->col = $color;
        $this->mod = $modele;
        $this->imma = $immatriculation;   
        $this->datCirc = $dateCirculation;
        $this->poids =$kilo; 

    }
            public function check (){
                $origine = substr($this->imma, 0, 2);
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
                if ($this->marque === "Audi") {
                    echo'<br> Disponibilité : Réserver';
                }
                else {
                    echo ' <br> Disponibilité : Free';
                }
                if ($this->poids>=3.5) {
                    echo'<br> Usage : Utilitaire';
                }
                else {
                    echo '<br> Usage : Commercial';
                }
                if (  $this->kilometre<100000) {
                    echo' <br> Moteur : Low';
        
            } 
           elseif (  $this->kilometre>100000) {
               echo'<br> Moteur : Middle';
           }
           elseif (  $this->kilometre>200000) {
               echo'<br> Moteur : Hight';
           }

            $datetime = date("Y")-$this->datCirc;
          

            echo '</br> Ancienneté du véhicule : '.$datetime.' ans';
            


                
        
            } 

    public function display(){
        echo "<img class='card-img-top' src='".$this->image."'/>";
        echo '<p>Marque du véhicule : '.$this->marque.'</p>';
        echo '<p> Modèle : '.$this->mod.'</p>';
        echo '<p> Couleur : '.$this->col.'</p>';
        echo '<p> Kilometrage : '.$this->kilometre.'</p>';
        echo '<p> Poids : '.$this->poids.' tonne </p>';
        echo '<p>Numero immatriculation : '.$this->imma.'</p>';
        echo '<p> Mise en circulation : '.$this->datCirc.'</p>';
        echo    $this->check();
        
    }
    public function rouler(){
        $this->kilometre +=100000;
    }
   

  
   
}
