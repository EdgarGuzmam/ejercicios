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
        <title>Menu</title>
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
        <br><br><center><form><p><h1>¡¡Bienvenidos!!</h1></form></center>
    </body>
</html>