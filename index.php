<?php
    include_once("./CRUD/Funcoes/loginout.php");
    include_once("./Crud.php")
?>

<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #a2dff7; /* Azul claro */
        font-family: Arial, sans-serif; /* Fonte legível */
      }
      .container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
      }
      .login-form, .cadastro-form {
        background-color: #f5f5f5; /* Fundo claro para os formulários */
        padding: 30px; /* Aumentando o padding */
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        width: 320px; /* Largura um pouco maior */
        margin: 0 20px;
      }

      .btn-primary {
        background-color: #42c7ff; /* Azul claro */
        border: none;
      }

      .btn-primary:hover {
        background-color: #ffa600; /* Laranja ao passar o mouse */
      }

      .form-group label {
        font-weight: bold; /* Labels em negrito */
      }

      .blur {
        filter: blur(5px);
        opacity: 0.5;
        pointer-events: none;
      }
    </style>
  </head>
  <body>

    <!-- Formulário de login -->
    <div class="container">
      <div class="col-md-4 login-form" id="login-form">
        <h1 class="text-center">Login</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="form-horizontal">
          <div class="form-group">
            <label for="email" class="col-sm-12 control-label">Email:</label>
            <div class="col-sm-12">
              <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu email">
            </div>
          </div>
          <div class="form-group">
            <label for="senha" class="col-sm-12 control-label mt-2">Senha:</label>
            <div class="col-sm-12">
              <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha">
            </div>
          </div>          
          <div class="form-group">
            <div class="col-sm-12">
              <input type="submit" name="login" value="Login" class="btn btn-primary mt-3 w-100">
            </div>
          </div>

          <div class="form-group mt-3">
            <a href="./cadastro.php" class="text-center">Usuário novo? Se cadastre aqui</a>
          </div>
          
        </form>
      </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
  </body>
</html>