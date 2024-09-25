<?php 
  require_once('functions.php'); 
  add();
  include(HEADER_TEMPLATE); 
?>

<h2 class="mb-4">Novo Cliente</h2>

<form action="add.php" method="post">
    <!-- área de campos do formulário -->
    <hr />
    <div class="row mb-4">
        <div class="form-group col-md-7">
            <label for="name">Nome / Razão Social</label>
            <input type="text" class="form-control" maxlength="255" name="customer['name']" required placeholder="Insira o nome / razão social">
        </div>

        <div class="form-group col-md-3">
            <label for="cpf_cnpj">CNPJ / CPF</label>
            <input type="text" class="form-control" maxlength="14" name="customer['cpf_cnpj']" required placeholder="Insira o CNPJ ou CPF">
        </div>

        <div class="form-group col-md-2">
            <label for="birthdate">Data de Nascimento</label>
            <input type="date" class="form-control" name="customer['birthdate']" required placeholder="Insira a data de nascimento">
        </div>
    </div>

    <div class="row mb-4">
        <div class="form-group col-md-5">
            <label for="address">Endereço</label>
            <input type="text" class="form-control" maxlength="255" name="customer['address']" required placeholder="Insira o endereço">
        </div>

        <div class="form-group col-md-3">
            <label for="hood">Bairro</label>
            <input type="text" class="form-control" maxlength="100" name="customer['hood']" required placeholder="Insira o bairro">
        </div>
        
        <div class="form-group col-md-2">
            <label for="zip_code">CEP</label>
            <input type="text" class="form-control" maxlength="8" name="customer['zip_code']" required placeholder="Insira o CEP">
        </div>
        
        <div class="form-group col-md-2">
            <label for="created">Data de Cadastro</label>
            <input type="datetime" class="form-control" name="customer['created']" required disabled>
        </div>
    </div>

    <div class="row mb-4">
        <div class="form-group col-md-5">
            <label for="city">Município</label>
            <input type="text" class="form-control" maxlength="100" name="customer['city']" required placeholder="Insira o município">
        </div>
        
        <div class="form-group col-md-2">
            <label for="phone">Telefone</label>
            <input type="text" class="form-control" maxlength="11" name="customer['phone']" required maxlength="11" placeholder="Insira o telefone">
        </div>
        
        <div class="form-group col-md-2">
            <label for="mobile">Celular</label>
            <input type="text" class="form-control" maxlength="11" name="customer['mobile']" required maxlength="11" placeholder="Insira o celular">
        </div>
        
        <div class="form-group col-md-1">
            <label for="state">UF</label>
            <input type="text" class="form-control" name="customer['state']" maxlength="2" required placeholder="UF">
        </div>
        
        <div class="form-group col-md-2">
            <label for="ie">Inscrição Estadual</label>
            <input type="text" class="form-control" maxlength="15" name="customer['ie']" required placeholder="Insira a inscrição estadual">
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

<?php include(FOOTER_TEMPLATE); ?>

<style>
    .btn-success {
        margin-right: 13px;
        width: 100px;
    }

    .fa-sd-card {
        padding-right: 10px;
    }

    body {
        background-color: #191a1b;
    }

    h2, label {
        color: white;
    }

    hr {
        color: white;
    }

    .form-control {
        background-color: #333;  
        color: white !important;
        border: 1px solid #555;
        padding: 10px; 
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
