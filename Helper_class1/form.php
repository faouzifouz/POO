<?php

class Form {


    public function create($action){
      

      return '<form action="'.$action.'"method="POST">' ;
     }


    public function input1($firstname, $placeholder){
      
      echo'<input type="text" name="'.$firstname.'"placeholder="'.$placeholder.'">';
      

    }
    public function input2($lastname, $placeholder){
      
      echo'<input type="text" name="'.$lastname.'"placeholder="'.$placeholder.'">';
      

    }


    public function selected(){

      echo'<select>';

    }

    public function option($val, $id){

      echo '<option value="'.$val.'">'.$id.'</option>';
      echo '<option value="'.$val.'">'.$id.'</option>';

    }
    public function unselected(){

      echo'</select><br>';

    }
    public function text($rows, $cols, $texte)
    {
        echo '<textarea rows="'.$rows.'" cols="'.$cols.'">'.$texte.'</textarea>';
    }



    public function submit($value){

      echo'<input type="submit" name="'.$value.'">';
    }

    public function rad($id, $name, $value)
    {
        echo '<input type="radio" id="' . $id . '" name="' . $name .'" value="' . $value . '">';
    }
    public function check($id, $name){
      echo '<input type="checkbox" id="'.$id.'" name="' .$name.'">';
    }

    public function endform(){
      echo '</form>';
    }



}
     $form = new Form(); // Instanciation de la classe form
     echo'<h1>Formulaire POO</h1>';
     $form->create("#");
     $form->input1("nom","Nom");
     $form->input2("prenom", "Prenom");
     $form->selected();
     $form->option("monsieur", "Monsieur");
     $form->option("madame", "Madame");
     $form->unselected();
     $form->text("5", "33", "Bonjour Becode");
     $form->rad("toc", "toctoc", "toc");
     $form->check("test", "test2");
     $form->submit("envoyer");
     $form->endform();
     



?>