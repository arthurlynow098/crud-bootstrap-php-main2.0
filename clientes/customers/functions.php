<?php
 
	include("../configphp.php");
	include(DBAPI);
 
	$customers = null;
	$customer = null;
 
	/**
	 *  Listagem de Clientes
	 */
	function index() {
		global $customers;
		$customers = find_all("customers");
	}
    function view($id = null) {
        global $customer;
        $customer = find('customers', $id);
      }

/**
 *  Cadastro de Clientes
 */
	function add() {
	
		if (!empty($_POST['customer'])) 
		{
   			$today = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));

    		$customer = $_POST['customer'];
    		$customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
    
			save('customers', $customer);
			header('location: index.php');
  		}
	}
	
		/**
	 *	Atualizacao/Edicao de Cliente
	*/
	function edit() {

		$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	
		if (isset($_GET['id'])) {
	
		$id = $_GET['id'];
	
		if (isset($_POST['customer'])) {
	
			$customer = $_POST['customer'];
			$customer['modified'] = $now->format("Y-m-d H:i:s");
	
			update('customers', $id, $customer);
			header('location: index.php');
		} else {
	
			global $customer;
			$customer = find('customers', $id);
		} 
		} else {
		header('location: index.php');
		}
	}

			/**
		 *  Exclusão de um Cliente
		 */
		function delete($id = null) {

			global $customer;
			$customer = remove('customers', $id);
		
			header('location: index.php');
		}
		
		/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove( $table = null, $id = null ) {

	$database = open_database();
	  
	try {
	  if ($id) {
  
		$sql = "DELETE FROM " . $table . " WHERE id = " . $id;
		$result = $database->query($sql);
  
		if ($result = $database->query($sql)) {   	
		  $_SESSION['message'] = "Registro Removido com Sucesso.";
		  $_SESSION['type'] = 'success';
		}
	  }
	} catch (Exception $e) { 
  
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
	}
  
	close_database($database);
  }
?>