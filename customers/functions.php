<?php
 
	include("../configphp.php");
	include(DBAPI);
 
	$revistas = null;
	$revista = null;
 
	/**
	 *  Listagem de Clientes
	 */
	function index() {
		global $revistas;
		$revistas = find_all("revistas");
	}
    function view($id = null) {
        global $revista;
        $revista = find('revistas', $id);
      }

/**
 *  Cadastro de Clientes
 */
	function add() {
	
		if (!empty($_POST['revista'])) 
		{
   			$today = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));

    		$revista = $_POST['revista'];
    		$revista['modified'] = $revista['datacadastro'] = $today->format("Y-m-d H:i:s");
    
			      // Obter os dados do livro do formulário
				  // Inicializar a variável que armazenará o caminho da imagem
				  $revista['foto'] = null;
		  
				  // Lidar com o upload da imagem (se houver um arquivo enviado)
				  if (isset($_FILES['foto']['name']) && $_FILES['foto']['error'] == 0) {
					  $upload_dir = 'image/';
					  $file_extension = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
					  $new_file_name = uniqid() . '.' . $file_extension; // Gerar um nome único para a imagem
					  $uploaded_file = $upload_dir . $new_file_name;
		  
					  // Verificar e mover o arquivo enviado para o diretório de uploads
					  if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploaded_file)) {
						  $revista['foto'] = $uploaded_file; // Salvar o caminho da imagem no banco de dados
					  } else {
						  echo "Erro ao enviar a imagem.";
					  }
				  }

				  // Salvar o livro no banco de dados usando a função save
				  save("revistas", $revista);
		  
				  // Redirecionar o usuário de volta à página inicial após o salvamento
				  header('Location: index.php');
				  exit(); // Para garantir que o código pare após o redirecionamento
			  }
  		}

	
		/**
	 *	Atualizacao/Edicao de Cliente
	*/
	function edit() {
		$now = date_create("now", new DateTimeZone("America/Sao_Paulo"));
	
		if (isset($_GET["id"])) {
			$id = $_GET["id"];
			global $revista;
			
			// Buscar a revista pelo ID
			$revista = find('revistas', $id);
	
			if (isset($_POST['revista'])) {
				$revista_data = $_POST["revista"];
				$revista_data["modified"] = $now->format("Y-m-d H:i:s");
	
				// Verificar e lidar com o upload da imagem
				if (isset($_FILES['foto']['name']) && $_FILES['foto']['error'] == 0) {
					$upload_dir = 'image/';
					$file_extension = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
					$new_file_name = uniqid() . '.' . $file_extension;
					$uploaded_file = $upload_dir . $new_file_name;
	
					// Mover o arquivo enviado para o diretório de uploads
					if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploaded_file)) {
						$revista_data['foto'] = $uploaded_file;
					} else {
						echo "Erro ao enviar a imagem.";
					}
				}
	
				// Atualizar os dados no banco
				update("revistas", $id, $revista_data);
				header("location: index.php");
				exit();
			}
		} else {
			header('location: index.php');
			exit();
		}
	}
			/**
		 *  Exclusão de um Cliente
		 */
		function delete($id = null) {

			global $revista;
			$revista = remove('revistas', $id);
		
			header('location: index.php');
		}
		
		/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
 /**
  *  Remove uma linha de uma tabela pelo ID do registro
  */
?>