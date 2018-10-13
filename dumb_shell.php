<?php
$arquivo = "dumb_search_engine_base.dse";
$titulo = $_POST["titulo"];
$pagina = $_POST["pagina"];
$salva = "if (pass=='$titulo') {
    var pass = true;
    window.location= '$pagina' ;
}";

$fd = fopen($arquivo, "a+");
      fwrite($fd, $salva);
      fclose($fd);
?>
<?php header( 'Location: dumb_input.php' ) ; ?>
