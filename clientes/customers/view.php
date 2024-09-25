<?php 
    require_once('functions.php'); 
    view($_GET['id']);
    include(HEADER_TEMPLATE); 
?>      
<body>

<div class="container mt-5">
    <h2 class="mb-4">Cliente <?php echo $customer['id']; ?></h2>
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
                    <th colspan="2" class="text-center">Detalhes do Cliente</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Nome / Razão Social:</strong></td>
                    <td class="value-color"><?php echo ($customer['name']); ?></td>
                </tr>
                <tr>
                    <td><strong>CPF / CNPJ:</strong></td>
                    <td class="value-color"><?php echo formatacpf ($customer['cpf_cnpj']); ?></td>
                </tr>
                <tr>
                    <td><strong>Data de Nascimento:</strong></td>
                    <td class="value-color"><?php echo formatadata($customer['birthdate'], "d/m/Y"); ?></td>
                </tr>
                <tr>
                    <td><strong>Endereço:</strong></td>
                    <td class="value-color"><?php echo ($customer['address']); ?></td>
                </tr>
                <tr>
                    <td><strong>Bairro:</strong></td>
                    <td class="value-color"><?php echo ($customer['hood']); ?></td>
                </tr>
                <tr>
                    <td><strong>CEP:</strong></td>
                    <td class="value-color"><?php echo formatacep($customer['zip_code']); ?></td>
                </tr>
                <tr>
                    <td><strong>Cidade:</strong></td>
                    <td class="value-color"><?php echo ($customer['city']); ?></td>
                </tr>
                <tr>
                    <td><strong>UF:</strong></td>
                    <td class="value-color"><?php echo ($customer['state']); ?></td>
                </tr>
                <tr>
                    <td><strong>Telefone:</strong></td>
                    <td class="value-color"><?php echo telefone($customer['phone']); ?></td>
                </tr>
                <tr>
                    <td><strong>Celular:</strong></td>
                    <td class="value-color"><?php echo telefone($customer['mobile']); ?></td>
                </tr>
                <tr>
                    <td><strong>Inscrição Estadual:</strong></td>
                    <td class="value-color"><?php echo number_format($customer['ie'], 0, ",", "."); ?></td>
                </tr>
                <tr>
                    <td><strong>Data de Cadastro:</strong></td>
                    <td class="value-color"><?php echo formatadata($customer['created'], "d/m/Y - H:i:s"); ?></td>
                </tr>
                <tr>
                    <td><strong>Última Atualização:</strong></td>
                    <td class="value-color"><?php echo formatadata($customer['modified'], "d/m/Y - H:i:s"); ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">
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
