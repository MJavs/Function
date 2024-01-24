<?php
function pengulanganRambu($nolalulintas , $kt , $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7 ,$kt8 , $kt9 , $kt11 ,$kt12,$kt13 ,$kt14 , $kt15 ,$kt16  ,$kt17){


 

    for($nolalulintas; $nolalulintas <= $kt ; $nolalulintas++){ 
        if($nolalulintas <= $kt1 || $nolalulintas == $kt3 || $nolalulintas == $kt5 || $nolalulintas == $kt6 || $nolalulintas == $kt7 || $nolalulintas == $kt8 || $nolalulintas == $kt12 || $nolalulintas == $kt14 || $nolalulintas == $kt16 || $nolalulintas == $kt17){
            echo "Lampu lalu lintas no $nolalulintas lancar <br/>";
        }else if ($nolalulintas <= $kt2 || $nolalulintas == $kt4   || $nolalulintas == $kt9 || $nolalulintas == $kt11 || $nolalulintas == $kt15 ){
            echo "Lampu lalu lintas no $nolalulintas tidak lancar <br/>";

        }else if($nolalulintas == $kt13 ){
            echo "Lampu lalu lintas no $nolalulintas sedang diperbaiki<br/>";
        }
         
        
        else{
            echo "Lampu lalu lintas no $nolalulintas tidak berfungsi <br/>";
        }
    
    }
}

echo pengulanganRambu(1 , 20 , 1, 2, 3,4,6,7,8,9,10,12 , 15,16,17,18,19 , 20);  


?>