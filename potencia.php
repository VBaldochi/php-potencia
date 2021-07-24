<?php

    function pot ($x , $y){

        // VERIFICAR SE EXPOENTE FOR 0 RETORNA 1

        if ($y ==0){
            return 1;
        }

        // VERIFICAR SE EXPOENTE É NEGATIVO

        if ($y < 0){
            $x = 1 / $x;
            $y = $y * -1;
        }

        $mult = $x;
        for ($i = 1; $i < $y; $i++){
            $mult = $mult * $x;
        }
        return $mult;

    }

    $num = $_POST['num'];
    $pot = $_POST['pot'];

    $result = pot($num , $pot);

    echo $result;
?>