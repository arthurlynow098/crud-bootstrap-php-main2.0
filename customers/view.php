<?php 
    require_once('functions.php'); 
    view($_GET['id']);
    include(HEADER_TEMPLATE); 
?>      
<body>

<div class="container mt-5">
    <h2 class="mb-4">Revista <?php echo $revista['id']; ?></h2>
    <hr>

    <?php if (!empty($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['type']; ?>">
            <?php echo $_SESSION['message']; ?>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">Detalhes da Revista</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Nome:</strong></td>
                    <td class="value-color"><?php echo htmlspecialchars($revista['nome']); ?></td>
                </tr>
                <tr>
                    <td><strong>Ano:</strong></td>
                    <td class="value-color"><?php echo htmlspecialchars($revista['ano']); ?></td>
                </tr>
                <tr>
                    <td><strong>Edição:</strong></td>
                    <td class="value-color"><?php echo htmlspecialchars($revista['edicao']); ?></td>
                </tr>
                <tr>
                    <td><strong>Data de Cadastro:</strong></td>
                    <td class="value-color"><?php echo formatadata($revista['datacadastro'], "d/m/Y - H:i:s"); ?></td>
                </tr>
                <tr>
                    <td><strong>Foto:</strong></td>
                    <td>
                        <?php if (empty($revista['foto'])): ?>
                        <p>Sem foto disponível</p>
                        <?php else: ?>
                            <img src="<?php echo $revista['foto']?>" width="150" height="180px" />
                    <?php endif; ?>
                </td>
                 </tr>

            </tbody>
        </table>
    </div>

    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="edit.php?id=<?php echo $revista['id']; ?>" class="btn btn-primary">
                <i class="fa-solid fa-pencil"></i> Editar
            </a>
            <a href="index.php" class="btn btn-danger">
                <i class="fa-solid fa-left-long"></i> Voltar
            </a>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #191a1b !important;
    }

    h2 {
        color: white !important;
    }

    hr {
        color: white !important;
    }

    .alert {
        margin-bottom: 20px;
    }

    .btn-primary, .btn-danger {
        margin-right: 10px;
    }

    .value-color {
        color: #dc3545 !important; 
        font-weight: bold;
    }

    .table {
        margin-top: 20px;
        color: #cbced0 !important;
    }

    .table th {
        text-align: center;
        border-bottom: 2px solid white;
    }

    .table td {
        background-color: #2c2d2e;
    }
</style>

<?php include(FOOTER_TEMPLATE); ?>
