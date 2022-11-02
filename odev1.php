<?php
class Math {
   private $say1,$say2,$say3;
   public function __construct($sayi1,$sayi2,$sayi3)
   {
    $num1=$sayi1;
    $num2=$sayi2;
    $num3=$sayi3;
   }

   
   public function TakeSquare($inputsay){
    return $inputsayi*$inputsayi;
   }

    public function Total($inputsay){
    for ($i=0; $i < $inputsay; $i++) { 
        echo $i*$i;
        echo "<br>";
    }
    }
}

$myclass = new Calculator(1,2,3);
$myclass->Total(8);
?>