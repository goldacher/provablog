<?php 

require_once("db_conectar.php");

require("inc_header.php");
require("db_mz_funcoes.php");

$sql = "SELECT * FROM produtos LIMIT :qtd OFFSET :ini";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtd', 10, PDO::PARAM_INT);
$stmt->bindValue(':ini', 0, PDO::PARAM_INT);

if($stmt->execute()) {
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<div class="container">';
    echo '<div class="row">';
    //require("db_mz_menulateral.php");
    foreach ($resultado as $campo) {
    //echo $campo['cod'] . " - " . $campo['nome']. '<br>';
    exibir_card($campo['local_img'], $campo['nome'], $campo['preco'], $campo['descricao']);
    }
    echo "</div>";
    echo "</div>";
} else {
    echo "Erro na consulta: " . $stmt->errorCode();
}

$conexao=null; // fechar conexão;

require("inc_rodape.php");
?>