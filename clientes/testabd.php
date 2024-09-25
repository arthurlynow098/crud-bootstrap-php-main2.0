
<?php require_once "configphp.php"; ?>
<?php require_once DBAPI; ?>

<?php 
	try {
		$db = open_database();
		echo '<h1>Banco de Dados Conectado!</h1>';
		
	} catch (Exception $e) {
		echo "<h3>Ocorreu um erro: <br>\n" . $e->getMessage() . "</h3>\n";
	}
	/*
	if ($db) {
		echo '<h1>Banco de Dados Conectado!</h1>';
	} else {
		echo '<h1>ERRO: Não foi possível Conectar!</h1>';
	}
	*/
?>