<?php
    include("functions.php");
    index();
    include(HEADER_TEMPLATE);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<style>
    .central-div {
        background-color: #343a40;
        color: #ffffff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 800px;
        margin: 100px auto;
        margin-bottom: 40px;
        margin-top: 20px;
        text-align: center;
        position: relative;
    }

    .central-div h1 {
        margin-bottom: 20px;
        font-size: 2.5rem;
        color: #ffffff;
    }

    .central-div p {
        font-size: 1.2rem;
        color: #d1d1d1;
        line-height: 1.6;
    }

    .central-div::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -10px;
        width: 80%;
        height: 2px;
        background: #ffffff;
        transform: translateX(-50%);
        transition: transform 0.3s ease;
    }

    .central-div:hover::after {
        transform: translateX(-50%) scaleX(1.1);
    }

    body {
        background-color: #191a1b !important;
    }

    h1 {
        color: white;
    }

    hr {
        color: white !important;
    }
</style>
</head>
<body>
    <div class="container">
        <!-- Div centralizada -->
        <div class="central-div">
            <h1>Central de Venda de Revistas</h1>
            <p>
                Bem-vindo à nossa Central de Venda de Revistas, onde você pode explorar uma vasta coleção de revistas, desde as mais recentes publicações até edições antigas e raras. Nossa central oferece uma experiência de compra excepcional, com um atendimento ao cliente dedicado e uma seleção de revistas cuidadosamente curada para atender a todos os gostos e interesses.
                <br><br>
                Navegue por categorias, descubra novas edições e aproveite as ofertas especiais. Se você é um entusiasta de revistas ou está apenas procurando algo novo para ler, nossa central é o lugar certo para você.
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include(FOOTER_TEMPLATE); ?>
