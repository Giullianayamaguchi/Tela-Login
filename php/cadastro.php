<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" type="../image/png" sizes="16x16" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    
    <title> Dynami :: Cadastro usuário</title>
</head>

<body style="min-width:372px;">
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

        <main class="flex-fill">
            <div class="container">
                <h1>Informe os dados abaixo </h1>
                <hr>
                <form class="mt-3" action="" method="POST">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <fieldset class="row gx-3">
                                <legend>Dados Pessoais</legend>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="Nome" placeholder=" " autofocus />
                                    <label for="txtNome">Nome</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" type="text" name="nCpf" placeholder=" " />
                                    <label for="txtCPF">CPF</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" type="date" name="nData_Nasc" placeholder=" " />
                                    <label for="txtDataNascimento" class="d-none d-sm-inline d-md-none d-lg-inline">Data
                                        de Nascimento</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" type="hidden" name="Genero" placeholder=" " />
                                    <label class="d-none d-sm-inline d-md-none d-lg-inline">Gênero</label>
                                      <select class=" form-control" required>  
                                            <option selected disabled>Escolha... </option>    
                                            <option>Feminino</option>
                                            <option>Masculino</option>
                                        </select>
                                  </div>
                            </fieldset>
                            <fieldset>
                                <legend>Contatos</legend>
                                <div class="form-floating mb-3 col-md-8">
                                    <input class="form-control" type="email" name="Email" placeholder=" " />
                                    <label for="txtEmail">E-mail</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6">
                                    <input class="form-control" placeholder=" " type="text" name="Telefone" />
                                    <label for="txtTelefone">Telefone</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <fieldset class="row gx-3">
                                <legend>Endereço</legend>
                                    <div class="form-floating mb-3 col-md-6 col-lg-4">
                                        <input class="form-control" type="text" name="nCep" placeholder=" " autofocus />
                                        <label for="txtCEP">CEP</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <textarea class="form-control text-muted bg-light text" style="height: 58px; font-size: 14px;" 
                                            disabled name="Cidade">Cidade</textarea>
                                    </div> 
                                    <div class="mb-3 col-md-2">
                                        <textarea class="form-control text-muted bg-light text" style="height: 58px; font-size: 14px;" 
                                            disabled name="UF">UF</textarea>
                                    </div> 
                                    <div class="mb-3 col-md-4">
                                        <textarea class="form-control text-muted bg-light text" style="height: 58px; font-size: 14px;" 
                                            disabled name="Bairro">Bairro</textarea>
                                    </div> 
                                    <div class="mb-3 col-md-6 col-lg-8">
                                        <textarea class="form-control text-muted bg-light text" style="height: 58px; font-size: 14px;" 
                                            disabled name="Rua">Rua</textarea>
                                    </div> 
                            </fieldset>
                            <fieldset class="row gx-3">
                                <legend>Senha de Acesso</legend>
                                <div class="form-floating mb-3 col-lg-6">
                                    <input class="form-control" type="password" name="Senha" placeholder=" " />
                                    <label for="txtSenha">Senha</label>
                                </div>
                                <div class="form-floating mb-3 col-lg-6">
                                    <input class="form-control" name="Confir_Senha" placeholder=" " />
                                    <label class="form-label" for="txtConfirmacaoSenha">Confirmação da Senha</label>
                                </div>
                            </fieldset>
                            <fieldset class="row gx-3">
                                <legend>Acessos</legend>
                                <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" type="hidden" name="Cargo" placeholder=" " />
                                    <label class="d-none d-sm-inline d-md-none d-lg-inline">Cargo</label>
                                      <select class=" form-control" required>  
                                            <option selected disabled>Escolha... </option>   
                                            <option>Analista de sistemas</option>
                                            <option>Analista de vendas</option>
                                        </select>
                                  </div>
                                  <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" type="hidden" name="Turno" placeholder=" " />
                                    <label class="d-none d-sm-inline d-md-none d-lg-inline">Turno</label>
                                      <select class=" form-control" required>  
                                            <option selected disabled>Escolha... </option>    
                                            <option>Manhã</option>
                                            <option>Tarde</option>
                                            <option>Noite</option>
                                        </select>
                                  </div>
                                  <div class="form-floating mb-3 col-md-6 col-xl-4">
                                    <input class="form-control" type="hidden" name="Status" placeholder=" " />
                                    <label class="d-none d-sm-inline d-md-none d-lg-inline">Status</label>
                                      <select class=" form-control" required>  
                                            <option selected disabled>Escolha... </option>   
                                            <option>Ativo</option>
                                            <option>Inativo</option>
                                        </select>
                                  </div>
                            </fieldset>
                        </div>
                    </div>
                    <hr />
                    <div class="mb-3 text-left">
                        <a class="btn btn-light btn-info" href="ListUser.php">Cancelar</a>

                        <input type="submit" name="SalvarUser" class="btn btn-info" value="Salvar" 
                        <?php 
                        
                            if(array_key_exists('SalvarUser', $_POST)) {
                                SalvarUser();
                            }

                            function SalvarUser() {
                                $Nome = $_POST['Nome'];
                                $nCpf = $_POST['nCpf'];
                                $nData_Nasc = $_POST['nData_Nasc'];
                                $Genero = $_POST['Genero'];
                                $Email = $_POST['Email'];
                                $Telefone = $_POST['Telefone'];
                                $nCep = $_POST['nCep'];
                                $Cidade = $_POST['Cidade'];
                                $Bairro = $_POST['Bairro'];
                                $Rua = $_POST['Rua'];
                                $Senha = $_POST['Senha'];
                                $Confir_Senha = $_POST['Confir_Senha'];
                                $Cargo = $_POST['Cargo'];
                                $Turno = $_POST['Turno'];
                                $Status = $_POST['Status'];
        
                                    if(($Nome == "") or ($nCpf == "") or ($nData_Nasc == "") or ($Genero ==0) or ($Email == "")
                                    or ($Telefone == "") or ($nCep == "") or ($Cidade == "") or ($Bairro == "") or ($Rua == "")
                                    or ($Senha == "") or ($Confir_Senha == "") or ($Cargo == 0) or ($Turno == "") or ($Status == "")){
                                        echo '<script> campos em branco. Favor revisar</script';
                                    }
                                    if ($Senha != $Confir_Senha) {
                                        echo '<script> Senhas diferentes</script';
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
        </main>

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
    </div>
</body>

</html>