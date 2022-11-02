<?php

use Sinif as AllSinif;

    class Sinif{
        
        public function __construct(){
            $welcome="Merhabalar! Karşılama mesajı çalıştı.(Construct Metodu)";
            echo $hieveryone;
            echo "<br>";
        }

        public function __destruct()
        {
            echo "Yıkıcı metot çalıştı.(Destruct Metot)";
            echo "<br>";
        }

        public function Grade($vize,$final){
            
            $not=$vize*0.3 + $final*0.7;
            if ($not>=50) {
                echo "Geçtiniz,notunuz: " . $not;  
                echo "<br>";  
            }
            else{
                echo "Kaldınız";
                echo "<br>";
            }
        }

        public function factoriel($num){
            $total=1;
           for ($i=1; $i <= $num; $i++) { 
            $total=$i*$total;
           }
           echo "$num'ın faktöryeli ".$total;
           echo "<br>";
        }
    }

    $myClass = new Sinif();
    $myClass->Grade(50,80);
    $myClass->factoriel(5);
?>