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
    echo "Siempre finalizar la sentencia con ';'. Por ejemplo: $ x += 10; <br />";
    echo "Las variables inician con '$' (como el ejemplo anterior, pero sin el espacio). <br /> Por ejemplo: <br />
    $ myCounter = 1; <br />
    $ myString = 'Hello'; <br />
    $ myArray = array('One', 'Two', 'Three'); <br />";
?>
<br><br>

<h1>Variables</h1>
<h2>String o Cadena</h2>
<?php 
    $username = "Yuly Álvarez";
    echo $username;
    echo "<br>";
    $currentUser = $username;
    echo $currentUser;
?>
<br>

<h2>Numéricas</h2>
<?php 
    $count = 17;
    echo $count;
    echo "<br>";
    echo "Números decimales o con punto flotante (float) <br>";
    $count = 17.5;
    echo $count;
?>
<br>

<h2>Matrices</h2>
<h2>Matriz unidimensional</h2>
<?php 
    $team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne');
    echo $team[3];
?>
<br>

<h2>Matriz multidimensional</h2>
<?php 
    //Ejemplo con juego de "triqui" o "tres en raya"
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

<!-- Pruebas de ejercicios de variables -->
<?php 
    $x = 9;
    if (++$x == 10) echo $x;

    $x = 9;
    if ($x++ == 10) echo $x;
?>
<br>

<h1>Concatenación</h1>
<?php
    // Ejemplo 1
    echo "Se utiliza el '.' para unificar cadenas de caracteres. <br>";
    $msgs = 5;
    echo "Tienes " . $msgs . " mensajes.";
    echo "<br> <br>";
    // Ejemplo 2
    echo "Se utiliza '.=' para unificar cadenas de caracteres. <br>";
    $boletin = "Boletín de noticias ";
    $newsFlash = " Flash de noticias.";
    echo $boletin .= $newsFlash;
?>