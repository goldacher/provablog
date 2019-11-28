<!--   Cabeçalho   -->
<?php
require("inc_header.php");
require("db_conectar.php");
?>

<form action="cadastrar_usuario.php" method="post" class="container">
    <div class="input-field col s12 l6">
        Nome<input type="text" name="nome" required>
    </div>
    <div class="input-field col s12 l6">
        Email<input type="email" name="email" required>
    </div>
    <div class="input-field col s12 l6">
        Senha<input type="password" name="senha" required>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
    </button>
</form>

<?php
$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$senha = filter_input(INPUT_POST, "senha");

if (($nome) && ($email) && ($senha)) {
    require("db_conectar.php");
    $sql = "INSERT INTO usuarios (cod, nome, email, senha) VALUES (NULL, :nome, :email, :senha);";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha);

    if ($stmt->execute()) {

    echo "<script>alert('Usuário adicionado com sucesso..!')</script>";
    echo "<script>window.location = 'index.php'</script>";
    } else {
        echo "Erro: " . $stmt->errorCode();
    }
}
?>