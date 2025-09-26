<!--Agregar estilos con CSS-->
<style>
    p {
        text-align: justify;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<!--EJEMPLO CON PHP-->
<!--Opción 1-->
<?php
    echo "Hoy es " . date("l") . ". ";
?>
Aquí están las noticias más recientes.
<br>

<!--Opción 2-->
Hoy es <?php echo date("l");?>. Aquí están las noticias más recientes. 
<br> <br>

<!--EJEMPLO CON JAVASCRIPT-->
<!--Opción 1 (A menos que se necesite especificar una versión concreta de Javascript, se incluye "type: "text/javascript"")-->
<script type="text/javascript">
    document.write("Hoy es " + Date());
</script>
<br>

<!--Opción 2-->
<script>
    document.write("Hoy es ", Date());
</script>

