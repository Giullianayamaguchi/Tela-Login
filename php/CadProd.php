
<!DOCTYPE php>
<php lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileImage" content="../img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" type="../image/png" sizes="16x16" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Dynami :: Cadastro Produto</title>
   
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
      <div class="container py-5 h-100" id="Cadastro" >
          <div class="row d-flex justify-content-center align-items-center h-100">
              <form class="row g-5">
  <!-- 1 linha de informações a serem preenchidas -->
                  <div class="col-md-2">
                    <div class="form-outline">
                      <label for="validationCustom01" class="form-label">Código</label>
                      <input type="text" id="Cod_Prod" class="form-control"/>
                    </div>
                  </div>
  
                  <div class="col-md-2">
                    <div class="form-outline">
                      <label for="validationCustom01" class="form-label">Código de barra</label>
                      <input type="text"class="form-control" id="Cod_Barra" />                    
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">Departamento/Setor</label>
                    <select class="form-control" id="Setor">
                      <option value="0">Escolher...</option>
                      <option value="1">Analista</option>
                      <option value="2">RH</option>
                    </select>  
                  </div>
                  
                  <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Status</label>
                    <select class="form-control" id="Status">
                      <option value="0" selected>Escolher...</option>
                      <option value="1">Ativo</option>
                      <option value="2">Inativo</option>
                    </select>  
                  </div>
  <!-- 2 linha de informações a serem preenchidas -->
                  <div class="col-md-7">
                    <div class="form-outline">
                      <label for="validationCustom01" class="form-label">Nome do produto</label>
                      <input type="text" class="form-control" id="Nome_Prod" />
                    </div>
                  </div>
  
                  <div class="col-md-4">
                    <div class="form-outline">
                      <label for="validationCustom01" class="form-label">Nome abreviado</label>
                      <input type="text" class="form-control" id="Nome_Abre" />
                    </div>
                  </div>
  <!-- 3 linha de informações a serem preenchidas -->
                  <div class="col-md-2">
                    <div class="form-outline">
                        <label for="validationCustom01" class="form-label">Preço</label>
                        <input type="text" class="form-control" id="Preco" />
                    </div>
                  </div>
  
                  <div class="col-md-2">
                    <div class=" form-outline">
                        <label for="validationCustom01" class="form-label">Margem %</label>
                        <input type="text" class="form-control" id="margem" />
                    </div>
                  </div>
  
                  <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">Tipo cadastro</label>
                    <select class="form-control" id="Tipo">
                      <option value="0" selected>Escolher...</option>
                      <option value="1">Mercadoria para Revenda </option>
                      <option value="2">Embalagem</option>
                    </select>  
                  </div>
  
                  <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Disponível para venda</label>
                    <select class="form-control" id="Disponivel">
                      <option value="0" selected>Escolher...</option>
                      <option value="1">Sim</option>
                      <option value="2">Não</option>
                    </select>  
                  </div>
  <!-- 4 linha de informações a serem preenchidas -->
                  <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">Un. Medida</label>
                    <select class="form-control" id="Unidade">
                      <option value="0" selected>Escolher...</option>
                      <option value="1">Metro</option>
                      <option value="2">Centímetro</option>
                    </select>  
                  </div>
  
                  <div class="col-md-2">
                    <label for="validationCustom01" class="form-label">Família</label>
                    <p>
                      <input type="text" class="form-control" id="Familia" />
                      <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                        <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </p>
                  </div>
  
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content" id="Familia">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Familia">Família</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Fechar"></button>
                        </div>
                        <table class="table" id="tabela-familia">
                          <thead>
                            <tr>
                              <th scope="col"></th>
                              <th scope="col">Classificação</th>
                              <th scope="col">Nome</th>
                              <th scope="col">Sigla</th>
                              <th scope="col">Tipo</th>
                              <th scope="col">Ativo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="table-active">
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" id="Preencha" name="flexRadioDefault" id="flexRadioDefault1"/>
                                  <label class="form-check-label" for="flexRadioDefault1"></label>
                                </div>
                              </td>
                                <td>01</td>
                                <td>Câmera</td>
                                <td>CA</td>
                                <td>Câmera</td>
                                <td>Sim</td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" id="Preencha" name="flexRadioDefault" id="flexRadioDefault1"/>
                                  <label class="form-check-label" for="flexRadioDefault1"></label>
                                </div>
                              </td>
                                <td>02</td>
                                <td>Sacola</td>
                                <td>PR</td>
                                <td>Analítico</td>
                                <td>Não</td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          <button type="button" class="btn btn-primary" onclick="Escolha()" >Escolher</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <label for="validationCustom01" class="form-label">Descrição</label>
                    <textarea class="form-control" name="Desc" id="Desc" rows="8"></textarea>
                  </div >
                    <div class="col-md-5" id="Btn-Opcao">
                    <button href="ListProd.php" type="button" class="btn btn-danger">Cancelar</button>
                    <input type="submit" name="SalvarItem" class="btn btn-info gradient-custom-2" value="Salvar"
                       <?php 
                    
                    if(array_key_exists('SalvarItem', $_POST)) {
                          Salvar();
                        }

                        function Salvar() {
                            $Cod = $_GET['Cod_Prod'];
                            $Cod_Barra = $_GET['Cod_Barra'];
                            $Ref = $_GET['Ref'];
                            $Setor = $_GET['Setor'];
                            $Status = $_GET['Status'];
                            $Nome_Prod = $_GET['Nome_Prod'];
                            $Nome_Abrev = $_GET['Nome_Abrev'];
                            $Valor = $_GET['Valor'];
                            $Custo = $_GET['Custo'];
                            $Margem = $_GET['Margem'];
                            $Tipo = $_GET['Tipo'];
                            $Disp = $_GET['Disp'];
                            $Unidade = $_GET['Unidade'];
                            $Familia = $_GET['Familia'];
                            $Desc = $_GET['Desc'];
      
                                  if(($Cod == "") or ($Cod_Barra == "") or ($Ref == "") or ($Setor ==0) or ($Status ==0)
                                  or ($Nome_Prod == "") or ($Nome_Abrev == "") or ($Valor == "") or ($Custo == "") or ($Margem == "")
                                  or ($Tipo == 0) or ($Disp == 0) or ($Unidade == 0) or ($Familia == "") or ($Desc == "")){
                                    echo '<script> campos em branco. Favor revisar</script';
                                }
                                else{
                                    echo '<script> Salvo com sucesso </script';
                            }
                             }
                         ?>
                  />
                
                
                
                  </div>
              </form>
          </div>
        </div>
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
  </section>
  <script src="../js/CadProd.js"></script>
  </body>
</php>