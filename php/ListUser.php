
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    
    <link rel="icon" type="../image/png" sizes="16x16" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dynami :: Usuário</title>
   
</head>
<body>
  <div class="d-flex flex-column wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark border-bottom shadow-sm mb-3">
        <div class="container">
            <a class="navbar-brand" href="geral.php"><b></b>
                <img src="../img/logo.png" class="d-none d-md-block" width="60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="ListUser.php">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="ListProd.php">Produtos</a>
                    </li>
                </ul>
                <div class="align-self-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" onclick="Sair()" class="nav-link text-dark">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

  <section class=" gradient-form">
    <!-- campos do cadastro de produto -->
    <div id="Campos" >
        <div class="row">
            <form class="row g-3">
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
              <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Código</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-active">
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                        <label class="form-check-label" for="flexRadioDefault1"></label>
                      </div>
                    </td>
                    <td>01</td>
                    <td>Câmera</td>
                    <td>Ativo</td>
                  </tr>
                  <tr>
                </tbody>
              </table>
            
        </div>
      </div>
      
      
                  <div class="col-md-3" id="Btn-ADC">
                    <a href="#"  class="btn btn-danger gradient-custom-2">Deletar</a>
                    <a href="cadastro.php"  class="btn btn-info gradient-custom-2">Novo</a>
                    <a href="#"  class="btn btn-success gradient-custom-2">Alterar</a>
                    <a href="#"  class="btn btn-warning gradient-custom-2">Visualizar</a>
                  </form>
    </section>
    <footer class="border-top text-muted bg-light">
      <div class="container">
          <div class="row py-3">
              <div class="col-12 col-md-4 text-center">
                  &copy; 2023 - Dynali Ltda ME<br>
                  Rua Virtual Inexistente, 171, Compulândia/PC <br>
                  CPNJ 99.999.999/0001-99
              </div>
              <div class="col-12 col-md-4 text-center">
                  <a href="privacidade.php" class="text-decoration-none text-dark">
                      Política de Privacidade
                  </a><br>
                  <a href="termos.php" class="text-decoration-none text-dark">
                      Termos de Uso
                  </a><br>
                  <a href="quemsomos.php" class="text-decoration-none text-dark">
                      Quem Somos
                  </a><br>
                  <a href="trocas.php" class="text-decoration-none text-dark">
                      Trocas e Devoluções
                  </a>
              </div>
              <div class="col-12 col-md-4 text-center">
                  <a href="contato.php" class="text-decoration-none text-dark">
                      Contato pelo Site
                  </a><br>
                  E-mail: <a href="mailto:email@dominio.com" class="text-decoration-none text-dark">
                      email@dominio.com
                  </a><br>
                  Telefone: <a href="phone:28999990000" class="text-decoration-none text-dark">
                      (28) 99999-0000
                  </a>
              </div>
          </div>
      </div>
  </footer>
  </div >
  </body>
</html>