
<?php require_once "configphp.php"; ?>
<?php require_once DBAPI; ?>
oi gustavo amor
<?php include(HEADERIN_TEMPLATE); ?>
<?php $db = open_database(); ?>

			<h1>Controle</h1>
			<hr>
			<?php if ($db) : ?>

			<div class="row">
				<div class="col-xs-6 col-sm-3 col-md-2">
					<a href="customers/add.php" class="btn btn-primary">
						<div class="row">
							<div class="col-xs-12 text-center">
								<i class="fa fa-plus fa-5x"></i>
							</div>
							<div class="col-xs-12 text-center">
								<p>Nova Revista</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-6 col-sm-3 col-md-2">
					<a href="customers" class="btn btn-primary">
						<div class="row">
							<div class="col-xs-12 text-center">
							<i class="fa-solid fa-book-open fa-5x"></i>
							</div>
							<div class="col-xs-12 text-center">
								<p>Revistas</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<br>
			<hr>
			<br>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col-md-2">
					<a href="clientes/customers/add.php" class="btn btn-primary">
						<div class="row">
							<div class="col-xs-12 text-center">
								<i class="fa fa-plus fa-5x"></i>
							</div>
							<div class="col-xs-12 text-center">
								<p>Novo Cliente</p>
							</div>
						</div>
					</a>
				</div>
				
				<div class="col-xs-6 col-sm-3 col-md-2">
					<a href="clientes/customers/index.php" class="btn btn-primary">
						<div class="row">
							<div class="col-xs-12 text-center">
							<i class="fa-solid fa-user-group fa-5x"></i>
							</div>
							<div class="col-xs-12 text-center">
								<p>Clientes</p>
							</div>
						</div>
					</a>
				</div>
			</div>

			<?php else : ?>
				<div class="alert alert-danger" role="alert">
					<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
				</div>
			
			<?php endif; ?>

<?php include(FOOTER_TEMPLATE); 
?>
			<style>
				.btn-primary{
					background-color: #2b3035;
					border-color: black;
					box-shadow: 3px -2px white;
					padding-top: 10px;
				}
				.btn-primary:hover{
					background-color: #636161;
					border-color: black;
				}
				body{
					background-color: #191a1b;
				}
				h1{
					color: white;
				}
				hr{
					color: white;
				}
			</style>
