<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sumando numeros</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   </head>
   <body>
      <div class="container">
         <h1>Vista Suma</h1>
         <p> <span class="text-dark"> <?php echo $data['numero1']; ?> </span> + <span class="text-dark"> <?php echo $data['numero2']; ?></span>  = <span class="text-success"> <?php echo $data['resultado']; ?>  </span></p>
      </div>
   </body>
</html>
