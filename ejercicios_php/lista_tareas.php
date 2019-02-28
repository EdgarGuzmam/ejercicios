<?php
  $horario = $_POST['horario'];
  $horariof = horarios($horario);
function horarios($h){
    $horarioi="";
    if($h=="a.m."){
        $horario = "style=background:#F3F781";
    }else{
        $horario = "style=background:#0B0B3B color:#FAFAFA";
    }
}
?>
<html>
<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta chaset="utf-8">
        <title>Lista de Tareas</title>		
	</head>
	<body <?php echo $horariof; ?>>
        <?php 
        $tarea=$_POST['tarea'];
        $horas=$_POST['horas'];
        $horarios=$_POST['horario'];
        
        echo "<p> Tarea: ", $tarea, "<br>";
        echo "<p> Hora: ", $horas, " ", $horario;
        ?>
    <br><form action="/ejercicios_php/ejercicio1.php">
        <label for="regresar">Presione para volver</label>
        <input type="submit" value="Regresar" name="regresar">
    </form>
    </body>
</html>