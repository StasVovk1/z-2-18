<?php 
    $mass = [-1,-5,3,6,8,45,-3,54,6,7,-6,7,8,-4,5,6,7,16];
    //$mass = [1,2,3,4,5,6,7,8,9];
    $perem = 0;
    echo 'Исходные данные: '.json_encode($mass);

    for ($i = 0; $i < counts($mass); $i++){        
        for ($j = 0; $j < counts($mass); $j++){
            if ($mass[$i] == $mass[$j] && $i != $j){                
                $bool = true;
                break;
            }
        }
        if (!$bool){
            $perem++;
        }
        $bool = false;
    }


    echo '<br> Уникальных элементов '.$perem;

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>