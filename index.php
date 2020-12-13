<?php
    require_once __DIR__ . '/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Au-Au Bibliotecas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-size:20px">
      <a class=" navbar-brand" href="#" style="font-size:20px">New World Sistems</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="margin-left: 700px;">
      <ul class=" navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#" style="padding-right: 20px;">Home</a>
        </li>
        <li class="nav-item" style="padding-right: 20px;">
          <a class="nav-link" href="http://localhost/ProjetoScr1pt/Views/ApresentacaoView/apresentacao.php">Pagina Inicial</a>
        </li>
        <li class="nav-item" style="padding-right: 20px;">
          <a class="nav-link"  href="http://localhost/ProjetoScr1pt/Views/Tela%203/index.php?">Acesso</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="http://localhost/ProjetoScr1pt/Views/Tela%202/cadastro.php?">Cadastro</a>
        </li>
      </ul>
    </div>
  </nav>
  <section class="d-flex justify-content-center row" style="background-color:currentcolor; height:550px;">
      <div class="mt-5 title">
        <p class="mt-5"style="color:white;font-size:200px">CRUD PDO</p>
      </div>
  </section>
</body>
