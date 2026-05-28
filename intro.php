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

<h1>Sintaxis básica</h1>
<?php 
    echo "Siempre finalizar la sentencia con ';'. Por ejemplo: $ x += 10; <br />";
    echo "Las variables inician con '$' (como el ejemplo anterior, pero sin el espacio). <br /> Por ejemplo: <br />
    $ myCounter = 1; <br />
    $ myString = 'Hello'; <br />
    $ myArray = array('One', 'Two', 'Three'); <br />";
 ?>

<h1>Variables</h1>
<h2>String o Cadena</h2>
<?php 
    $username = "Yuly Álvarez";
    echo $username;
    echo "<br>";
    $currentUser = $username;
    echo $currentUser;
?>

<h2>Numéricas</h2>
<?php 
    $count = 17;
    echo $count;
    echo "<br>";
    echo "Números decimales o con punto flotante (float) <br>";
    $count = 17.5;
    echo $count;
?>

<h2>Matrices</h2>
<?php 
    $team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne');
    echo $team[3];
?>