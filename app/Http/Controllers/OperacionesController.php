<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function suma($num1,$num2){
        
        $suma = $num1 + $num2;

        return $suma;

    }


    public function resta($num1,$num2){
        
        $resta = $num1 - $num2;

        return $resta;

    }

    public function primo($num1){
        $cont=0;
        for ($i=1; $i <= $num1; $i++) { 

            if($num1 % $i == 0){
                $cont++;
            }
                  
        }
        if($cont == 2){
            echo "El número ", $num1," es primo";
        }else{
            echo "El número ", $num1," no es primo";
        }
    }

    public function amigos($num1,$num2){
        $cont1=0;
        $cont2=0;

        for ($i=1; $i < $num1; $i++) { 

            if($num1 % $i == 0){
                $cont1 = $cont1 + $i;
            }
            
        }
        // echo $cont1;
        for ($i=1; $i < $num2; $i++) { 

            if($num2 % $i == 0){
                $cont2 = $cont2 + $i;
            }
            
        }
        // echo $cont2;
        if($cont1==$num2 &&  $cont2==$num1){
            echo $num1," y ",$num2," son números amigos";
        } else{
            echo $num1, " y ", $num2, " no son números amigos";
        }

    }

}
