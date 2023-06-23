<?php

// função de insert - ajustar para tabela destino
function db_insert_teste($quantidade, $complementos) {
	global $conn;
	$sql = "INSERT INTO tb_complemento (quantidade, complementos) VALUES ('$quantidade', '$complementos')";
    $conn->query($sql);
	//echo $sql;
	//return $conn->insert_id;
	return null;
}

require_once("./banco.php");

// verificação da chegada de dados
var_dump($_REQUEST);

// atribuição dos campos para variáveis
$quantidade = $_REQUEST['quantidade'];
$complementos = $_REQUEST['complementos'];

// chamada da função
db_insert_teste($quantidade, $complementos);

?>