<?php
require_once('functions.php'); 
add();
include(HEADER_TEMPLATE); 

?>

<h2 class="mb-4">Nova Revista</h2>

<form action="add.php" method="post" enctype="multipart/form-data">
    <hr />
    <div class="row mb-4"> 
        <div class="form-group col-md-4">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" maxlength="50" name="revista[nome]" required placeholder="Insira o nome da revista">
        </div>

        <div class="form-group col-md-4">
            <label for="ano">Ano</label>
            <input type="text" class="form-control" maxlength="4" name="revista[ano]" required placeholder="Insira o ano de lançamento">
        </div>

        <div class="form-group col-md-4">
            <label for="edicao">Edição</label>
            <input type="text" class="form-control" name="revista[edicao]" required placeholder="Insira a edição da revista">
        </div>
    </div>

    <div class="row mb-4"> 
        <div class="form-group col-md-2">
            <label for="datacadastro">Data de Cadastro</label>
            <input type="date" class="form-control" name="revista[datacadastro]" required value="<?php echo date('Y-m-d'); ?>" readonly>
        </div>
        <div class="form-group col-md-2">
            <label for="modified">Data de Atualização</label>
            <input type="date" class="form-control" name="revista[modified]" required value="<?php echo date('Y-m-d'); ?>" readonly>
        </div>

        <div class="form-group col-md-3">
        <label for="foto">Foto</label>
        <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
            <img id="preview" alt="Sua imagem" style="display: none; max-width: 200px; max-height: 200px; margin-top: 30px; margin-bottom: 15px;">
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

<script>
    document.getElementById('foto').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('preview');
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block'; 
            }
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none'; 
        }
    });
</script>

<?php 
include(FOOTER_TEMPLATE); 
?>

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

    input[type="file"] {
        background-color: #333 !important; 
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