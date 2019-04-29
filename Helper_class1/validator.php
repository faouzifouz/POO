<?php


class Validator{

    public function santiTString($string){

        return filter_input(INPUT_POST, $string , FILTER_SANITIZE_STRING);


    }

    public function sanitNumber($num){

        $numSat = filter_input(INPUT_POST, $num , FILTER_SANITIZE_NUMBER_INT);

        return filter_input(INPUT_POST, $numSat , FILTER_VALIDATE_INT);

    }

    public function sanitDecimal($decim){

        return filter_input(INPUT_POST, $decim , FILTER_VALIDATE_FLOAT);


    }
    public function sanitEmail($email){

        return filter_input(INPUT_POST, $email , FILTER_VALIDATE_EMAIL);


    }

}



?>