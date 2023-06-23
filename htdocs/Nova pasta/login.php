<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
// senha ok
if ($senha == "123456") {
	session_start();
	$_SESSION["Bianca"] = $usuario;
	header("Location: pagina_principal.php");
} else {
	// senha errada
	header("Location: sesao_form.php");
}
?>