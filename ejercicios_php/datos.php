<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Datos</title>
    </head>
    <body>
      
         
             <?php
         $n_hijos = $_POST['n_hijos'];
               $valor = 0;
          
             echo 
            " 
            <form>             
            <fieldset>
            <legend>Hijos</legend>";
        
            do{ 
             
                $nombre_hijo = $_POST["nombre_h",valor++];
                $genero_hijo = $_POST["Genero",valor++];
              echo   "<p> Nombre: ", $nombre_hijo, "<br>";
               echo   "<p> Genero: ", $genero_hijo, "<br>";
               $valor++;
          } while ($valor < $n_hijos);
        
        
        echo "",$n_hijos;
        
           echo
            "</fieldset> <br> 
            </form>
            ";
             
            
             
             
            
      
      
                
         ?>
       
        
    </body>
</html>