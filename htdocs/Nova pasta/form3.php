<?php

// função de insert - ajustar para tabela destino
function db_insert_teste($notas, $notap, $comentario) {
	global $conn;
	$sql = "INSERT INTO tb_avaliacao (notas, notap, comentario) VALUES ('$notas', '$notap', '$comentario')";
    $conn->query($sql);
	//acho $sql;
	//return $conn->insert_id;
	return null;
}

require_once("./banco.php");

// verificação da chegada de dados
var_dump($_REQUEST);

// atribuição dos campos para variáveis
$notas = $_REQUEST['notas'];
$notap= $_REQUEST['notap'];
$comentario = $_REQUEST['comentario'];

// chamada da função
db_insert_teste($notas, $notap, $comentario);

?>