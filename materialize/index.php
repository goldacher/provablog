<!--   Cabeçalho   -->
<?php
require("inc_header.php");
require("db_conectar.php");
require("db_mz_funcoes.php");
session_start();
?>

<div class="container">
    <div class="col s12 m9">
      <section>
        <?php cards_principal(); ?>
      </section>
    </div>
  </div>
</div>


<!--  Rodape-->
<?php include("inc_rodape.php"); ?>

<!--  Scripts-->
<?php include("inc_scripts.php"); ?>