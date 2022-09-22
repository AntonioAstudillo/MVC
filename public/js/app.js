(() => {

   window.onload = main;

   function main()
   {
      let boton = document.getElementById('btnPruebas');
      document.getElementById('numero1').value = getRandomInt();
      document.getElementById('numero2').value = getRandomInt();

      document.getElementById('btnReset').addEventListener('click' , restaurar);

      boton.addEventListener('click' , prueba);
   }

   function prueba()
   {
      if(document.getElementById('resultado').value !== '')
      {
         const req = new XMLHttpRequest();
         const formData = new FormData();

         req.open('POST', '/repaso/mvc/operaciones/sumar');

         formData.append( 'resultado' ,document.getElementById('resultado').value);
         formData.append( 'numero1' ,document.getElementById('numero1').value);
         formData.append( 'numero2' ,document.getElementById('numero2').value);

         req.onreadystatechange = function()
         {

            if(req.readyState == 4 && req.status == 200)
            {
               console.log(req.responseText);

               if(req.responseText == document.getElementById('resultado').value)
               {
                  alert('Resultado correcta');
               }
               else{
                  alert('Resultado incorrecta');
               }
            }
         }

         req.send(formData);
      }
      else
      {
         alert('Debe ingresar un resultado');
      }

   }//cierra funcion prueba

   function getRandomInt() {
     return Math.floor(Math.random() * 99);
   }

   function restaurar(){
      window.location.reload();
   }

})();
