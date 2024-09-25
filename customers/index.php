<?php
    include("functions.php");
    index();
    include(HEADER_TEMPLATE);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <script src="../js/main.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revistas</title>
    <style>
        body {
            background-color: #191a1b !important;
        }
        h2 {
            color: white !important;
        }
        hr {
            border-top: 1px solid white !important;
        }
        th, td{
            background-color: #191a1b !important;
            color: #cbced0 !important;
            padding: 18px !important;
        }
        .table-hover tbody tr:hover {
            background-color: #636161;
        }
        .table th, .table td {
            color: white;
        }
        .table thead th {
            border-bottom: 2px solid white;
        }
        .btn-secondary, .btn-light, .btn-sm {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-2">
        <header>
            <div class="row">
                <div class="col-sm-6">
                    <h2>Revistas</h2>
                </div>
                <div class="col-sm-6 text-right h2">
                    <a class="btn btn-info" href="add.php"><i class="fa fa-plus"></i> Nova Revista</a>
                    <a class="btn btn-warning" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
                </div>
            </div>
        </header>

        <?php if (!empty($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <hr>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th width="30%">Nome</th>
                    <th>Ano</th>
                    <th>Edição</th>
                    <th>Atualizado em</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($revistas)) : ?>
                    <?php foreach ($revistas as $revista) : ?>
                    <tr>
                        <td><?php echo $revista['id']; ?></td>
                        <td><?php echo ($revista['nome']); ?></td>
                        <td><?php echo ($revista['ano']); ?></td>
                        <td><?php echo ($revista['edicao']); ?></td>
                        <td><?php echo formatadata($revista['modified'], "d/m/Y - H:i:s"); ?></td>
                        <td class="actions text-right">
                            <a href="view.php?id=<?php echo $revista['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
                            <a href="edit.php?id=<?php echo $revista['id']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Editar</a>
                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal"
							data="<?php echo $revista['id']; ?>">
                                <i class="fa fa-trash"></i> Excluir
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                <tr>
                    <td colspan="6">Nenhum registro encontrado.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>   
    </div>

    <?php include('modal.php'); ?>
    <?php include(FOOTER_TEMPLATE); ?>
</body>
</html>
