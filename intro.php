<!--Agregar estilos con CSS-->
<style>
    p {
        text-align: justify;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>


<h1>EJEMPLO CON PHP</h1>
<h2>Opción 1</h2>
<?php
    echo "Hoy es " . date("l") . ". ";
?>
Aquí están las noticias más recientes.
<br>

<h2>Opción 2</h2>
Hoy es <?php echo date("l");?>. Aquí están las noticias más recientes. 
<br> <br>

<h1>EJEMPLO CON JAVASCRIPT</h1>
<h2>Opción 1 (A menos que se necesite especificar una versión concreta de Javascript, se incluye "type: "text/javascript"")</h2>
<script type="text/javascript">
    document.write("Hoy es " + Date());
</script>
<br>

<h2>Opción 2</h2>
<script>
    document.write("Hoy es ", Date());
</script>
<br> <br>

<h1>EJEMPLO "Hello world" CON ESTRUCTURA PHP</h1>
<?php 
    echo "Hello world";

    // Comentarios en PHP de una línea
    /* Comentarios en
    PHP multilínea */
?>
<br>

<h1>Sintaxis básica</h1>
<?php 
    echo 'Siempre finalizar la sentencia con punto y coma (;). Por ejemplo: $x += 10;';
    echo "<br>";
    echo 'Las variables inician con $ (como el ejemplo anterior). <br /> Por ejemplo:';
    echo  "<br>";
    echo '$myCounter = 1';
    echo "<br>";
    echo '$myString = "Hello"';
    echo "<br>";
    echo '$myArray = array("One", "Two", "Three")';
?>
<br><br>

<h1>Variables</h1>
<h2>String o Cadena</h2>
<?php
    echo '$username = "Yuly Álvarez"';
    echo "<br>";
    echo 'echo $username';
    echo "<br>";
    $username = "Yuly Álvarez";
    echo $username;
    echo "<br><br>";
    
    echo '$currentUser = $username';
    echo "<br>";
    echo 'echo $currentUser';
    echo "<br>";
    $currentUser = $username;
    echo $currentUser;
?>
<br>

<h2>Numéricas</h2>
<?php
    echo '$count = 17';
    echo "<br>";
    $count = 17;
    echo $count;
    echo "<br><br>";
    echo "Números decimales o con punto flotante (float) <br>";
    echo '$count = 17.5';
    echo "<br>";
    $count = 17.5;
    echo $count;
?>
<br>

<h2>Matrices</h2>
<h2>Matriz unidimensional</h2>
<?php 
    echo '$team = array("Bill", "Mary", "Mike", "Chris", "Anne")';
    echo "<br>";
    echo '$team[3]';
    echo "<br>";
    $team = array("Bill", "Mary", "Mike", "Chris", "Anne");
    echo $team[3];
?>
<br>

<h2>Matriz multidimensional</h2>
<?php 
    echo 'Ejemplo con juego de "triqui" o "tres en raya"';
    echo "<br>";
    echo '$triqui = array(';
    echo "<br>";
    echo 'array("X", " ", "O"),';
    echo "<br>";
    echo 'array("O", "O", "X"),';
    echo "<br>";
    echo 'array("X", "O", " "))';
    echo "<br>";
    echo '$triqui[1] [2]';
    echo "<br>";

    $triqui = array(array('X', ' ', 'O'),
                    array('O', 'O', 'X'),
                    array('X', 'O', ' '));
    echo $triqui[1] [2];
?>
<br>

<h2>Reglas para denominar variables</h2>
<ul>
    <li>Los nombres deben empezar con una letra del alfabeto o el caracter '_'.</li>
    <li>Sólo pueden contener caracteres alfanuméricos o '_'</li>
    <li>No deben contener espacios. Si contiene más de una palabra puede usarse '_' o camelCase.</li>
    <li>Los nombres de las variables distinguen mayúsculas de minúsculas.</li>
</ul>
<br><br>

<h1>Pruebas de ejercicios de incremento y decremento de variables</h1>
<?php
    echo '$x = 9';
    echo "<br>";
    echo 'if (++$x == 10) echo $x;';
    echo "<br>";
    $x = 9;
    if (++$x == 10) echo $x;
    echo "<br>";
    echo "Aumenta el valor de la variable ANTES de probar el valor.";
    echo "<br><br>";

    echo '$x = 9';
    echo "<br>";
    echo 'if ($x++ == 10) echo $x;';
    echo "<br>";
    $x = 9;
    if ($x++ == 10) echo $x;
    echo "<br>";
    echo 'Aumenta el valor de la variable DESPUÉS de probar el valor.';
    echo "<br><br>";

    echo '$x = 0';
    echo "<br>";
    echo 'if (--$x == 10) echo $x;';
    echo "<br>";
    $y = 0;
    if (--$x == 10) echo $x;
    echo "<br>";
    echo 'Disminuye el valor de la variable ANTES de probar el valor.';
    echo "<br><br>";

    echo '$x = 0';
    echo "<br>";
    echo 'if ($x-- == 10) echo $x;';
    echo "<br>";
    $y = 0;
    if ($x-- == 10) echo $x;
    echo "<br>";
    echo 'Disminuye el valor de la variable DESPUÉS de probar el valor.';
?>
<br>

<h1>Concatenación</h1>
<?php
    echo "Ejemplo 1: Se utiliza el '.' para unificar cadenas de caracteres. <br>";
    echo '$msgs = 5';
    echo "<br>";
    echo 'echo "Tienes " . $msgs . " mensajes."';
    echo "<br>";
    $msgs = 5;
    echo "Tienes " . $msgs . " mensajes.";
    echo "<br><br>";
    
    echo "Ejemplo 2: Se utiliza '.=' para unificar cadenas de caracteres. <br>";
    echo '$boletin = "Boletín de noticias "';
    echo "<br>";
    echo '$newsFlash = " Flash de noticias."';
    echo "<br>";
    echo 'echo $boletin .= $newsFlash';
    echo "<br>";
    $boletin = "Boletín de noticias ";
    $newsFlash = " Flash de noticias.";
    echo $boletin .= $newsFlash;
?>
<br>

<h2>Tipos de cadenas</h2>
<p>Dependen del tipo de comillas que se usen.</p>
<ul>
    <li>Si se usan comillas simples, se mostrará el contenido del código literal.</li>
    <li>Si se usan comillas dobles, PHP evaluará el valor de las variables que hayan en las cadenas de código.</li>
</ul>
<?php 

?>