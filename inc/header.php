<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset="utf-8">
    <title>CRUD com Bootstrap</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?> ../css/awesome/awesome.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
  
  <!-- Inicio do menu !-->
    <nav class="navbar navbar-expand-xl bg-body-tertiary bg-dark fixed-top" data-bs-theme = "dark">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-gear"></i></i>CRUD - Centro de Revistas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="../customers/index.php" role="button" data-bs-toggle="" aria-expanded="false">
              <i class="fa-solid fa-eye"></i></i> Visualizar Revistas
              </a>
               </li>   
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="../customers/add.php" role="button" data-bs-toggle="" aria-expanded="false">
              <i class="fa-solid fa-plus"></i></i> Adicionar Revistas
              </a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="../index.php" role="button" data-bs-toggle="" aria-expanded="false">
              <i class="fa-solid fa-house"></i></i> Home
              </a>
               </li>             
        </div>
      </div>
    </nav>
    <br><br>
    <main class="container">

    <style>
      .dropdown{
        margin-left: 60px;
      }
      .fa-users, .fa-house{
        margin-right: 13px
      }
      .fa-gear{
        margin-right: 13px
      }
      .fa-book-open-reader{
        margin-right: 10px
      }
      .fa-plus, .fa-eye{
        margin-right: 18px
      }
      .navbar-nav .nav-link {
            text-decoration: none;
            color: white;
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after {
            transform: translateX(0);
        }

        .dropdown-menu a {
            text-decoration: none;
            color: white;
        }

        .dropdown-menu a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #000;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .dropdown-menu a:hover::after {
            transform: translateX(0);
        }
    </style>