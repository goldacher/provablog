<!--   Cabeçalho   -->
<?php
require("inc_header.php");
require("db_mz_funcoes.php");
require("db_conectar.php");
?>

<form action="cadastrar_post.php" method="post" class="container">
    <div class="input-field col s12 l6">
        <textarea id="descricao" name="descricao" class="materialize-textarea"></textarea>
        <label for="descricao">Descrição</label>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
    </button>
</form>

<?php
$descricao = filter_input(INPUT_POST, "descricao");

if (($descricao)) {
    require("db_conectar.php");
    $sql = "INSERT INTO artigos (cod, descricao) VALUES (NULL, :descricao);";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':descricao', $descricao);
    if ($stmt->execute()) {
        echo "<script>alert('Registro adicionado com sucesso..!')</script>";
        echo "<script>window.location = 'index.php'</script>";
    } else {
        echo "Erro: " . $stmt->errorCode();
    }
}
?>