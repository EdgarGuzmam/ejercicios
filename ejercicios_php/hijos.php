<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Hijos</title>
    </head>
    <body>
      
         <form action="/ejercios_php/datos.php" method="post">
      <fieldset>
             <?php
          
          
              $nombre_papa = $_POST['nombre_p'];
             $direccion_papa = $_POST['direccion_p'];
             $profesion_papa = $_POST['profesion_p'];
             $trabajo_papa = $_POST['trabajo_p'];
             
                $nombre_mama = $_POST['nombre_m'];
             $direccion_mama = $_POST['direccion_m'];
             $profesion_mama = $_POST['profesion_m'];
             $trabajo_mama = $_POST['trabajo_m'];
          
        
        
             echo 
            " 
            <form>             
           
            <p>Datos del padre",
            
        "<p> Nombre: ", $nombre_papa, "<br>",
        "<p> Direccion: ", $direccion_papa, "<br>",
        "<p> Profesion: ", $profesion_papa, "<br>",
        "<p> Lugar de trabajo: ", $trabajo_papa, "<br><br><br><br>",
          
           "Datos de la madre",

           "<p> Nombre: ", $nombre_mama, "<br>",
        "<p> Direccion: ", $direccion_mama, "<br>",
        "<p> Profesion: ", $profesion_mama, "<br>",
        "<p> Lugar de trabajo: ", $trabajo_mama, "<br>",
          
            
         
           
           " </form>
            ";
             
          
         $n_hijos = $_POST['numero_h'];
        
        echo "<h1>Registre sus ",$n_hijos," hijos</h1>";
        
        
        $valor = 0;
        do{
            
        echo "<form>
            Nombre de hijo # ",$valor +1,":<br>
            <input type=","text","name=","nombre_h",$valor +1,"value=","","><br>
            
            <select name=","Genero",$valor+1,">
                <option value=","M",">M</option>
                <option value=","F",">F</option>
                
            </select><br>
            
        </form>";
             $valor++;
        } while ($valor < $n_hijos);
          echo
         "<input type=","hidden"," name=","n_hijos"," value=",$n_hijos,">";
        ?>
         
             <input type="submit" value="Guardar y revisar"> 
          </fieldset>
       </form>
       
        
    </body>
</html>