<?php
  $inicio = "/ejercicios_php/index.php";
  $ejercicio1 = "/ejercicios_php/agenda.php";
  $ejercicio2 = "/ejercicios_php/conversor.php";
  $ejercicio3 = "/ejercicios_php/registro_familiar.php";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Familia</title>
        <style type="text/css">
            #header{
                margin: auto;
                margin-top: 10px;
                width: 700px;
                font-family: Arial, Helvetica, sans-serif;
            }
            
            ul, ol {
                list-style: none;
            }
            
            .nav li a:hover{
                background-color: firebrick;
            }
            
            .nav li a{
                background-color: darkred;
                color: azure;
                text-decoration: none;
                padding: 10px 15px;
                display: block;
            }
            
            .nav > li {
                float: left;
            }
            
            .nav li ul {
                display: none;
                position: absolute;
                min-width: 140px;
            }
            
            .navli:hover >ul {
                display: block;
            }
        </style>
    </head>
    <body>
        <center><h1>Registro Familiar</h1></center>
        <div id="header">
            <ul class="nav">
                <li><a href="<?php echo $inicio; ?>">Inicio</a></li>
                <li><a href="<?php echo $ejercicio1; ?>">Ejercicio1:Agenda</a></li>
                <li><a href="<?php echo $ejercicio2; ?>">Ejercicio2:Conversion</a></li>
                <li><a href="<?php echo $ejercicio3; ?>">Ejercicio3:Registro Familiar</a></li>
            </ul>
        </div><br>
        <br><br><form action="/ejercicios_php/hijos.php" method="post">
           <fieldset>
          
           <p>Datos del padre</p><br>
            
            Nombre:<br>
            <input type="text" name="nombre_p" value=""><br>
            Direccion:<br>
            <input type="text" name="direccion_p" value=""><br>
             Profesion:<br>
            <input type="text" name="profesion_p" value=""><br>
             Lugar de trabajo:<br>
            <input type="text" name="trabajo_p" value=""><br><br>
           
             <br><br>
               
               <p>Datos de la madre</p><br>
            

          
        
            
            Nombre:<br>
            <input type="text" name="nombre_m" value=""><br>
            Direccion:<br>
            <input type="text" name="direccion_m" value=""><br>
             Profesion:<br>
            <input type="text" name="profesion_m" value=""><br>
             Lugar de trabajo:<br>
            <input type="text" name="trabajo_m" value=""><br><br>
           
         
            
             Numero de hijos que tienen los padres :
            <input type="text" name="numero_h" value=""> 
            <input type="submit" value="Guardar y registrar hijos"> 
                  </fieldset> <br>
           
            
         
    
        </form>
          <!-- <input type="submit" value="Submit"> 
                    <p> profesion
        <select name="profesion">
                <option value="Doctor">Doctor</option>
                <option value="Programador">Programador</option>
                <option value="Enfermera">Enfermera</option>
            </select><br>
            -->
        
        
      
    </body>
</html>