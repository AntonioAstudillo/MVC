


<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sumando numeros</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="<?php echo RUTA ?>css/estilos.css">

   </head>
   <body>
      <div class="container mt-5">
         <h1>Vista Suma</h1>
         <form>
            <div class="row">
               <div class="col-4">
                  <input id="numero1" readonly type="text" class="form-control">
               </div>
               <div class="col-4">
                  <input id="numero2" readonly type="text" class="form-control">
               </div>

               <div class="col-4">
                  <input type="text" class="form-control" id="resultado" placeholder="Ingresa el resultado">
               </div>
            </div>
         </form>

         <button class="btn btn-primary mt-3" type="button" name="button" id="btnPruebas">Sumar</button>
         <button class="btn btn-dark mt-3" type="button" name="button" id="btnReset">Restaurar</button>
      </div>


   </body>

<script src="<?php echo RUTA ?>js/app.js" charset="utf-8"></script>

</html>
