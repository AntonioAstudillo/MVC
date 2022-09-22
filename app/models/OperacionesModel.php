<?php

class OperacionesModel
{

   public function sumar($numero1 , $numero2)
   {
      return $numero1 + $numero2;
   }

   public function restar($numero1 , $numero2)
   {
      return $numero1 - $numero2;
   }

   public function multiplicar($numero1 , $numero2)
   {
      return $numero1 * $numero2;
   }

   public function dividir($numero1 , $numero2)
   {
      //debemos hacer validacion del numero mayor
      return $numero1 / $numero2;
   }

}



 ?>
