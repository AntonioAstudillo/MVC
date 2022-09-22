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


   public function sumar()
   {

      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
         $numero1 = $_POST['numero1'];
         $numero2 = $_POST['numero2'];
         $resultado = $this->metodo->sumar($numero1  , $numero2);

         echo $resultado;
      }else{
         $this->vista('sumarVista');
      }



   }

}





 ?>
