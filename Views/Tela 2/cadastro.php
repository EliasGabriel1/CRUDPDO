<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Criar conta</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="estilos2.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
      <div class="box" style="width: 400px">
        <div class="logo_isolated">
          <img class="logo-1" src="https://image.flaticon.com/icons/png/512/702/702814.png" style="height:50px" alt="logo-Univem"> <span class="align-self-end">Inova Ideas</span>
        </div>
        <header style="padding-top: 0px;padding-bottom: 0px;">
            <div class="login" style="padding-top: 0px;padding-bottom: 0px;">
              <h1> Crie uma conta</h1>
            </div>
        </header>
        <div class="px-4 py-3">
          <div class="box">
            <form action="cadastrar.php" method="POST">
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">Digite seu nome</label>
                <input type="text" name="nome" class="form-control" id="exampleDropdownFormName" placeholder="JoÃ£o ricardo de sorza" style="width: 383px;">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" style="width: 383px;">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">LOGIN</label>
                <input type="text" name="usuario" class="form-control" id="ra" placeholder="ex:51237-5" style="width: 383px;">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" style="width: 383px;">
              </div>                
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Confirmar senha</label>
                <input type="password" name="confirmarsenha" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" style="width: 383px;">
              </div>
                <a href="http://localhost/ProjetoScr1pt/Views/ApresentacaoView/apresentacao.php" type="submit" name="cancelar" class="btn btn-light">Cancelar</a>
                <a href=""> <button type="submit" class="btn btn-primary">Criar conta</button> </a>              
            </form>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
