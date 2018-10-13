<script>

// DSE V1.0---autor:lgct13
var pass = prompt("O que deseja buscar?","");
function myFunction() {
    location.reload();
}
<?php
include "dumb_search_engine_base.dse" ;
?>
if (pass!=true) {
    setTimeout(myFunction, 5000);
    alert("Nada encontrado...");
}
</script>
