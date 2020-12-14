<?php
session_start();
?>

<!DOCTYPE html>
<html>
  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Login - Entrar com RA </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="estilos3.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="container">
        <div class="box">
            <header>
            <div class="logo_isolated">
              <img class="logo-1" src="https://image.flaticon.com/icons/png/512/702/702814.png" style="height:50px" alt="logo"> <span class="align-self-end">Inova Ideas</span>
            </div>
                <div class="login" style="padding-top: 0px;padding-bottom: 0px;">
                  <h1> LOGIN </h1>
                </div>
            </header>
                
            <form action="login.php" method="POST">
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">Login</label>
                <input type="text" name="usuario" class="form-control" id="exampleDropdownFormEmail1" placeholder="ex: 51237-5" style="width: 383px;">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Password</label>
                  <input name="senha" type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" style="width: 383px;">                      </div>
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dropdownCheck">
                  <label class="form-check-label" for="dropdownCheck">
                    Remember me
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="http://localhost/ProjetoScr1pt/Views/Tela%202/cadastro.php">New around here? Sign up</a>
              <a class="dropdown-item" href="http://localhost/ProjetoScr1pt/Views/esqueceu%20a%20senha/esqueceu%20a%20senha.php">Forgot password?</a>
        </div>
    </div>
    

</body></html>
