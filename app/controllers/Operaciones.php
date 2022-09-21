<?php


class Operaciones extends Controlador{

   private $metodo;

   public function __construct(){
      $this->metodo = $this->modelo('OperacionesModel');
   }


   public function index()
   {
      echo 'Hola desde index en el controlador home';
   }


   public function sumar($numero1 = 0 , $numero2 = 0 )
   {
      $resultado = $this->metodo->sumar($numero1  , $numero2);

      $datos = [
         'numero1' => $numero1,
         'numero2' => $numero2,
         'resultado' => $resultado
      ];


      $this->vista('sumarVista' , $datos);

   }


}





 ?>
