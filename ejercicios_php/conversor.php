<?php
  $inicio = "/ejercicios_php/index.php";
  $ejercicio1 = "/ejercicios_php/agenda.php";
  $ejercicio2 = "/ejercicios_php/conversor.php";
  $ejercicio3 = "/ejercicios_php/registro_familiar.php";
?>
<!DOCTYPE html>
<html>  
    <head>
        <title>Conversor de decimales a romanos</title>
        <meta charset="utf-8">
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
    <br><br><form action="#" method="post">
        <p><label for="numero">Ingrese un numero: </label>
        <input type="number" name="numero" style="WIDTH: 70px" min="1" max="1000" autofocus>
        <p><fieldset>
            <legend>¿Como desea que se escriba el numero?</legend>
            <input type="radio" name="seleccion" value="romanos" checked>Romanos<br>
            <input type="radio" name="seleccion" value="letras">Letras
        </fieldset>
        <p><input type="submit" value="Comprobar">
    </form>
<?php
    $seleccion=$_POST['seleccion'];
    $numero=$_POST['numero'];
    
    if($seleccion=="romanos"){
        //Conversion a numeros romanos
        
        function to_roman($num) {
            $tnum="";
            if ($num <0 || $num >9999) {return -1;}
            $r_ones = array(1=>"I", 2=>"II", 3=>"III", 4=>"IV", 5=>"V", 6=>"VI", 7=>"VII", 8=>"VIII", 9=>"IX");
            $r_tens = array(1=>"X", 2=>"XX", 3=>"XXX", 4=>"XL", 5=>"L", 6=>"LX", 7=>"LXX", 8=>"LXXX", 9=>"XC");
            $r_hund = array(1=>"C", 2=>"CC", 3=>"CCC", 4=>"CD", 5=>"D", 6=>"DC", 7=>"DCC", 8=>"DCCC", 9=>"CM");
            $ones = $num % 10;
            $tens = ($num - $ones) % 100;
            $hundreds = ($num - $tens - $ones) % 1000;
            $tens = $tens / 10;
            $hundreds = $hundreds / 100;
            if ($hundreds) {$tnum .= $r_hund[$hundreds];}
            if ($tens) {$tnum .= $r_tens[$tens];}
            if ($ones) {$tnum .= $r_ones[$ones];}
            
            return $tnum;
        }
        
        if(is_numeric(@$_POST['numero'])){
            echo 'En numeros romanos: '.to_roman(@$_POST['numero']);
        }
        echo"<br>";
    }
    else{
        //CONVERCION DE NUMEROS A LETRAS
        
        function unidad($nu){
            switch ($nu){
                    case 9:{
                        $num = "nueve";
                        break;
                    }
                    case 8:{
                        $num = "ocho";
                        break;
                    }
                    case 7:{
                        $num = "siete";
                        break;
                    }
                    case 6:{
                        $num = "seis";
                        break;
                    }
                    case 5:{
                        $num = "cinco";
                        break;
                    }
                    case 4:{
                        $num = "cuatro";
                        break;
                    }
                    case 3:{
                        $num = "tres";
                        break;
                    }
                    case 2:{
                        $num = "dos";
                        break;
                    }
                    case 1:{
                        $num = "uno";
                        break;
                    }
                }
                return $nu;
            }
        
        if($numero>=0 && $numero<=9){
            if(is_numeric(@$_POST['numero'])){
                echo 'En letras: '.unidad($_POST['numero']);
            }
            echo"<br>";
        }
        
        function decena($nume){
                if ($nume >= 90 && $nume <= 99){
                    $num_letra = "noventa ";
                    if ($nume > 90){
                        $num_letra = $num_letra." y ".unidad($nume - 90);
                    }
                }else if ($nume >= 80 && $nume <= 89){
                    $num_letra = "ochenta ";
                    if ($nume > 80){
                     $num_letra = $num_letra."y ".unidad($nume - 80);   
                    }
                }else if ($nume >= 70 && $nume <= 79){
                    $num_letra = "setenta ";
                    if ($nume > 70){
                        $num_letra = $num_letra."y ".unidad($nume - 70);
                    }
                }else if ($nume >= 60 && $nume <= 69){
                    $num_letra = "sesenta ";
                    if ($nume > 60){
                        $num_letra = $num_letra."y ".unidad($nume - 60);
                    }
                }else if ($nume >= 50 && $nume <= 59){
                    $num_letra = "cincuenta ";
                    if ($nume > 50){
                        $num_letra = $num_letra."y ".unidad($nume - 50);
                    }
                }else if ($nume >= 40 && $nume <= 49){
                    $num_letra = "cuarenta ";
                    if ($nume> 40){
                        $num_letra = $num_letra."y ".unidad($nume - 40);
                    }
                }else if ($nume >= 30 && $nume <= 39){
                $num_letra = "treinta ";
                    if ($nume > 30){
                        $num_letra = $num_letra."y ".unidad($nume - 30);
                    }
                }else if ($nume >= 20 && $nume <= 29){
                    if ($nume == 20){
                        $num_letra = "veinte ";
                    }else{
                        $num_letra = "veinte y ".unidad($nume - 20);
                    }
                }else if ($nume >= 10 && $nume <= 19){
                    switch ($nume)
                    {
                        case 10:
                            {
                                $num_letra = "diez ";
                                break;
                            }
                    case 11:
                        {
                            $num_letra = "once ";
                            break;
                        }
                    case 12:
                        {
                            $num_letra = "doce ";
                            break;
                        }
                    case 13:
                        {
                            $num_letra = "trece ";
                            break;
                        }

                    case 14:
                        {
                            $num_letra = "catorce ";
                            break;
                        }
                    case 15:
                        {
                            $num_letra = "quince ";
                            break;
                        }
                    case 16:
                        {
                            $num_letra = "dieciseis ";
                            break;
                        }
                    case 17:
                        {
                            $num_letra = "diecisiete ";
                            break;
                        }
                    case 18:
                        {
                            $num_letra = "dieciocho ";
                            break;
                        }
                    case 19:
                        {
                            $num_letra = "diecinueve ";
                            break;
                        }
                }
                return $nume;
            }else{
                    $num_letra = unidad($nume);
                }
            return $num_letra;   
        }
        
        if($numero>=10 && $numero<=99){
            if(is_numeric(@$_POST['numero'])){
                echo 'En letras: '.decena(@$_POST['numero']);
            }
           echo"<br>";
        }
        
                  function centena($nume){
                if ($nume >= 100){
                    if ($nume >= 900 & $nume <= 999){
                        $num_letra = "novecientos ";
                    }
                    if ($nume > 900){
                        $num_letra = $num_letra.decena($nume - 900);   
                    }
                }else if ($nume>= 800 && $nume <= 899){
                    $num_letra = "ochocientos ";
   
                    if ($nume > 800){
                        $num_letra = $num_letra.decena($nume - 800);
                    }    
                }else if ($nume >= 700 && $nume <= 799){
                    $num_letra = "setecientos ";
                    
                    if ($nume > 700){
                        $num_letra = $num_letra.decena($nume - 700);
                    }
                }else if ($nume >= 600 && $nume <= 699){
                    $num_letra = "seiscientos ";

                    if ($nume > 600){
                        $num_letra = $num_letra.decena($nume - 600);
                    }
                }else if ($nume >= 500 && $nume <= 599){
                    $num_letra = "quinientos ";
   
                    if ($nume > 500){
                        $num_letra = $num_letra.decena($nume - 500);
                    }
                }else if ($nume >= 400 && $nume <= 499)  {
                    $num_letra = "cuatrocientos ";
   
                    if ($nume > 400){
                        $num_letra = $num_letra.decena($nume - 400);
                    }
                }else if ($nume >= 300 && $nume <= 399){
                    $num_letra = "trescientos ";

                    if ($nume > 300){                    
                        $num_letra = $num_letra.decena($nume - 300);
                    }    
                }else if ($nume >= 200 && $nume <= 299){
                    $num_letra = "doscientos ";
   
                    if ($nume > 200){
                        $num_letra = $num_letra.decena($nume - 200);
                    }
                }else if ($nume >= 100 && $nume <= 199) {
                    if ($nume == 100){
                        $num_letra = "cien ";
                    }else{
                        $num_letra = "ciento ".decena($nume - 100);
                    }
                }else{
                $num_letra = decena($nume);
            }
            return $num_letra;
        }

        if($numero>=100 && $numero<=999){
            if(is_numeric(@$_POST['numero'])){
                echo 'En letras: '.centena(@$_POST['numero']);
            }
        }
    }
?>
    </body>
</html>

 