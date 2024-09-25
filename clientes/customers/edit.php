<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2 class="mb-4">Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
    <!-- área de campos do formulário -->
    <hr />
    <div class="row mb-4">
        <div class="form-group col-md-7">
            <label for="name">Nome / Razão Social</label>
            <input type="text" class="form-control" maxlength="255" name="customer['name']" value="<?php echo $customer['name']; ?>">
        </div>

        <div class="form-group col-md-3">
            <label for="cpf_cnpj">CNPJ / CPF</label>
            <input type="text" class="form-control" maxlength="14" name="customer['cpf_cnpj']" value="<?php echo $customer['cpf_cnpj']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="birthdate">Data de Nascimento</label>
            <input type="date" class="form-control" name="customer['birthdate']" value="<?php echo formatadata($customer['birthdate'], "Y-m-d"); ?>">
        </div>
    </div>

    <div class="row mb-4">
        <div class="form-group col-md-5">
            <label for="address">Endereço</label>
            <input type="text" class="form-control" maxlength="255" name="customer['address']" value="<?php echo $customer['address']; ?>">
        </div>

        <div class="form-group col-md-3">
            <label for="hood">Bairro</label>
            <input type="text" class="form-control" maxlength="100" name="customer['hood']" value="<?php echo $customer['hood']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="zip_code">CEP</label>
            <input type="text" class="form-control" maxlength="8" name="customer['zip_code']" value="<?php echo formatacep($customer['zip_code'] ); ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="created">Data de Cadastro</label>
            <input type="datetime" class="form-control" name="customer['created']" disabled value="<?php echo formatadata($customer['created'], "Y-m-d"); ?>">
        </div>
    </div>

    <div class="row mb-4">
        <div class="form-group col-md-5">
            <label for="city">Município</label>
            <input type="text" class="form-control" maxlength="100 " name="customer['city']" value="<?php echo $customer['city']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="phone">Telefone</label>
            <input type="text" class="form-control" name="customer['phone']" value="<?php echo $customer['phone']; ?>" maxlength="11">
        </div>

        <div class="form-group col-md-2">
            <label for="mobile">Celular</label>
            <input type="text" class="form-control" name="customer['mobile']" value="<?php echo $customer['mobile']; ?>" maxlength="11">
        </div>

        <div class="form-group col-md-1">
            <label for="state">UF</label>
            <input type="text" class="form-control" name="customer['state']" maxlength="2" value="<?php echo $customer['state']; ?>">
        </div>

        <div class="form-group col-md-2">
            <label for="ie">Inscrição Estadual</label>
            <input type="text" class="form-control" maxlength="15" name="customer['ie']" value="<?php echo $customer['ie']; ?>">
        </div>
    </div>

    <div id="actions" class="row mt-4">
        <div class="col-md-12 d-flex">
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-sd-card"></i> Salvar
            </button>
            <a href="index.php" class="btn btn-danger">
                <i class="fa-solid fa-rotate-left"></i> Cancelar
            </a>
        </div>
    </div>
</form>

<style>
    .btn-success {
        margin-right: 13px;
        width: 100px;
    }

    .fa-sd-card {
        padding-right: 10px;
    }

    body {
        background-color: #191a1b !important;
    }

    h2, label {
        color: white !important;
    }

    hr {
        color: white !important;
    }

    .form-control {
        background-color: #333 !important;
        color: white !important;
        border: 1px solid #555;
        padding: 10px;
        margin-top: 8px;
    }

    input[type="file"] {
        background-color: #333 !important;
        color: white;
        border: 1px solid #555;
        padding: 8px;
        margin-top: 8px;
    }

    input:disabled {
        background-color: #333 !important;
        color: #777;
        border: 1px solid #555;
    }

    .form-control::placeholder {
        color: #aaa;
        opacity: 1;
    }

    .form-control:focus {
        background-color: #444;
        border-color: #666;
        outline: none;
    }

    .row.mb-4 {
        margin-bottom: 2rem;
    }

    #actions {
        margin-top: 20px;
    }
</style>

<?php include(FOOTER_TEMPLATE); ?>
