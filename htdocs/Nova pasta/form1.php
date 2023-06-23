<?php

// função de insert - ajustar para tabela destino
function db_insert_teste($nome, $numero, $endereco, $complemento) {
	global $conn;
	$sql = "INSERT INTO tb_endereco (nome, numero, endereco, complemento) VALUES ('$nome', '$numero', '$endereco', '$complemento')";
    $conn->query($sql);
	//echo $sql;
	//return $conn->insert_id;
	return null;
}

require_once("./banco.php");

// verificação da chegada de dados
var_dump($_REQUEST);

// atribuição dos campos para variáveis
$nome = $_REQUEST['nome'];
$numero = $_REQUEST['numero'];
$endereco = $_REQUEST['endereco'];
$complemento = $_REQUEST['complemento'];

// chamada da função
db_insert_teste($nome, $numero, $endereco, $complemento);

?>