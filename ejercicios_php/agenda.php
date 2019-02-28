<?php
  $inicio = "/ejercicios_php/index.php";
  $ejercicio1 = "/ejercicios_php/agenda.php";
  $ejercicio2 = "/ejercicios_php/conversor.php";
  $ejercicio3 = "/ejercicios_php/registro_familiar.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta chaset="utf-8">
        <title>Agenda</title>
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
        <div id="header">
            <ul class="nav">
                <li><a href="<?php echo $inicio; ?>">Inicio</a></li>
                <li><a href="<?php echo $ejercicio1; ?>">Ejercicio1:Agenda</a></li>
                <li><a href="<?php echo $ejercicio2; ?>">Ejercicio2:Conversion</a></li>
                <li><a href="<?php echo $ejercicio3; ?>">Ejercicio3:Registro Familiar</a></li>
            </ul>
        </div>
        <br><br><form action="/ejercicios_php/lista_tareas.php" method="post">
            <fieldset style= "background:#EFF8FB">
                <legend>Creacion de Tarea</legend>
                <p><input type="text" name="tarea" style="WIDTH: 400px; HEIGHT: 98px" size="20" placeholder="Escriba la tarea que desea guardar"></p>
                <select name="horas">
                    <option value="1">01:00</option>
                    <option value="2">02:00</option>
                    <option value="3">03:00</option>
                    <option value="4">04:00</option>
                    <option value="5">05:00</option>
                    <option value="6">06:00</option>
                    <option value="7">07:00</option>
                    <option value="8">08:00</option>
                    <option value="9">09:00</option>
                    <option value="10">10:00</option>
                    <option value="11">11:00</option>
                    <option value="12">12:00</option>
                </select>
                <select name="horario">
                    <option value="a.m.">a.m.</option>
                    <option value="p.m">p.m.</option>
                </select>
                <p><input type="submit" name="Enviar"></p>
            </fieldset>
        </form>
    </body>
</html>