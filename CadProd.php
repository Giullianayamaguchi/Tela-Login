
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastro Produto</title>
    <script>
      

    </script>
</head>
<body>
  <header>
    <form action="" method="POST">
    <div class="justify-content-center align-items-center" id="Barra">
      <ul class="nav navbar nav-pills nav-fill navbar-collapse">
        <li class="nav-item">
          <a class="img" href="#">
            <img src="../img/logo.png"  height="130" width="130"></a>
        </li>
        
        <input type="submit" name="sair" value="Sair"
          <?php
        if(array_key_exists('sair', $_POST)) {
            Pag_Login();
        }
        function Pag_Login() {
          header('Location: ValidaUser.php');
        }
    ?>
    />
      </ul>
    </div>
    </form>
  </header>

  <section class=" gradient-form">
    <!-- campos do cadastro de produto -->
    <div class="container py-5 h-100" id="Cadastro" >
        <div class="row d-flex justify-content-center align-items-center h-100">
            <form class="row g-5" action="" method="GET">
<!-- 1 linha de informações a serem preenchidas -->
                <div class="col-md-2">
                  <div class="form-outline">
                    <label for="validationCustom01" class="form-label">Código</label>
                    <input type="text" name="Cod_Prod" id="Cod_Prod" class="form-control"/>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-outline">
                    <label for="validationCustom01" class="form-label">Código de barra</label>
                    <input type="text" name="Cod_Barra" class="form-control" id="Cod_Barra" />                    
                  </div>
                </div>

                <div class="col-md-2">
                  <div class=" form-outline">
                    <label for="validationCustom01" class="form-label">Referência</label>
                    <input type="text" name="Ref"  class="form-control" id="Referencia" />
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom01" class="form-label">Departamento/Setor</label>
                  <select class="form-control" name="Setor" id="Setor">
                    <option value="0">Escolher...</option>
                    <option value="1">Analista</option>
                    <option value="2">RH</option>
                  </select>  
                </div>
                
                <div class="col-md-2">
                  <label for="validationCustom01" class="form-label">Status</label>
                  <select class="form-control" name="Status" id="Status">
                    <option value="0" selected>Escolher...</option>
                    <option value="1">Ativo</option>
                    <option value="2">Inativo</option>
                  </select>  
                </div>
<!-- 2 linha de informações a serem preenchidas -->
                <div class="col-md-7">
                  <div class="form-outline">
                    <label for="validationCustom01" class="form-label">Nome do produto</label>
                    <input type="text" name="Nome_Prod" class="form-control" id="Nome_Prod" />
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-outline">
                    <label for="validationCustom01" class="form-label">Nome abreviado</label>
                    <input type="text" name="Nome_Abrev" class="form-control" id="Nome_Abre" />
                  </div>
                </div>
<!-- 3 linha de informações a serem preenchidas -->
                <div class="col-md-2">
                  <div class="form-outline">
                      <label for="validationCustom01" class="form-label">Preço</label>
                      <input type="text" name="Valor" class="form-control" id="Preco" />
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-outline">
                    <label for="validationCustom01" class="form-label">Custo</label>
                    <input type="text" name="Custo" class="form-control" id="Custo" />                    
                  </div>
                </div>

                <div class="col-md-2">
                  <div class=" form-outline">
                      <label for="validationCustom01" class="form-label">Margem %</label>
                      <input type="text" name="Margem" class="form-control" id="margem" />
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="validationCustom01" class="form-label">Tipo cadastro</label>
                  <select class="form-control" name="Tipo" id="Tipo">
                    <option value="0" selected>Escolher...</option>
                    <option value="1">Mercadoria para Revenda </option>
                    <option value="2">Embalagem</option>
                  </select>  
                </div>

                <div class="col-md-2">
                  <label for="validationCustom01" class="form-label">Disponível para venda</label>
                  <select class="form-control" name="Disp" id="Disponivel">
                    <option value="0" selected>Escolher...</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                  </select>  
                </div>
<!-- 4 linha de informações a serem preenchidas -->
                <div class="col-md-3">
                  <label for="validationCustom01" class="form-label">Un. Medida</label>
                  <select class="form-control" name="Unidade" id="Unidade">
                    <option value="0" selected>Escolher...</option>
                    <option value="1">Metro</option>
                    <option value="2">Centímetro</option>
                  </select>  
                </div>

                <div class="col-md-2">
                  <label for="validationCustom01" class="form-label">Família</label>
                  <p>
                    <input type="text" class="form-control" name="Familia" id="Familia" />
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <span class="glyphicon glyphicon-search"></span>
                      </button>
                  </p>
                </div>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content" name="Familia" id="Familia">
                      <div class="modal-header">
                          <h5 class="modal-title" name="Familia" id="Familia">Família</h5>
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
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
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
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
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
                        <button type="button" class="btn btn-primary">Escolher</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <label for="validationCustom01" class="form-label">Descrição</label>
                  <textarea class="form-control" name="Desc" id="Descricao" rows="8"></textarea>
                </div >
                  <div class="col-md-5" id="Btn-Opcao">
                  <button type="button" class="btn btn-danger">Cancelar</button>
              
                  <input type="submit" name="Salvar" class="btn btn-info gradient-custom-2" value="Salvar"
                       <?php 

                        if(array_key_exists('Salvar', $_GET)) {
                          Valida();
                        }

                        function Valida() {
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

>


              </div>
            </form>
        </div>
      </div>
    </section>
    <script src="../js/index.js"></script>
  </body>
</html>