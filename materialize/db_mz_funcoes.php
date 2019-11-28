<?php function exibir_card($descricao)
{ ?>
  <div class="col s12 m6 l4">
    <div class="container">
        <p style="color: blue"><?= $descricao ?></p>
        <br>
  </div>
<?php } ?>

<?php
function cards_principal()
{
  require("db_conectar.php");

    $sql = "SELECT * FROM artigos";
    $stmt = $conexao->prepare($sql);

  if ($stmt->execute()) {
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<div class="container">';
    foreach ($resultado as $campo) {
      exibir_card($campo['descricao']);
    }
    echo "</div>";
  } else {
    echo "Erro na consulta: " . $stmt->errorCode();
  }

  $conexao = null; // fechar conexão;
  $stmt = null;
  $resultado = null;
}

//add para o login
function validar_sessao()
{
  if (isset($_COOKIE["usuario"])) {
    $_SESSION["usuario"] = $_COOKIE["usuario"];
    $_SESSION["nome"] = $_COOKIE["nome"];
  }
  if (!isset($_SESSION["usuario"])) {
    $_SESSION["erros"] = "Favor efetuar o login";
    echo    "<script>
            document.location=\"db_login.php\";
        </script>";
    exit;
  }
}

//Exibir o usuario logado
function usuario_logado()
{
  if (isset($_COOKIE["usuario"])) {
    $_SESSION["usuario"] = $_COOKIE["usuario"];
    $_SESSION["nome"] = $_COOKIE["nome"];
  }
  if (isset($_SESSION["usuario"])) {
    echo "<h3>Usuario: " . $_SESSION["nome"];
    echo " (<a href=db_logout.php>Sair</a>)</h3>";
  }
}
?>