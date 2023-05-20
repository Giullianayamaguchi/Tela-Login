<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        <link rel="icon" type="image" sizes="16x16" href="../img/logo.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Dynami :: Contato</title>
    </head>

    <body>
        <div class="d-flex flex-column wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark border-bottom shadow-sm mb-3">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><b></b>
                        <img src="../img/logo.png" class="d-none d-md-block" width="60px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target=".navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="contato.php">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="Produto.php">Produtos</a>
                            </li>
                        </ul>
                        <div class="align-self-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="login.php" class="nav-link text-dark">Entrar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
    
            <main class="flex-fill">
                <div class="container">
                    <div class="row justify-content-center">
                        <form class="col-sm-10 col-md-8 col-lg-6" action="" method="POST">
                            <h1>Entre em Contato</h1>

                            <div class="form-floating mb-3">
                                <input type="text" name="Nome" class="form-control" placeholder=" " autofocus>
                                <label for="txtNomeCompleto">Nome Completo</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="email" name="Email" class="form-control" placeholder=" ">
                                <label for="txtEmail">E-mail</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea name="Mensagem" class="form-control" placeholder=" " style="height: 200px;"></textarea>
                                <label for="txtMensagem">Mensagem</label>
                            </div>

                            <input type="submit" name="EnviarMsg" class="btn btn-lg btn-outline-info" value="Enviar Mensagem"
                            <?php 

                            if(array_key_exists('EnviarMsg', $_POST)) {
                                EnviaMensagem();
                            }

                            function EnviaMensagem() {
                                $Email    = $_POST['Email'];
                                $Nome     = $_POST['Nome'];
                                $Mensagem = $_POST['Mensagem'];

                                If (($Email != "") and ($Nome != "")  and ($Mensagem != "")){
                                    header("location: confirmcontato.php"); 
                                
                                }
                                else{
                                    echo '<script> Favor validar, campos em branco </script';
                                }
                            }
                        ?>
                        >

                            <p class="mt-3">
                                Faremos nosso melhor para responder sua mensagem em até 2 dias úteis.
                            </p>

                            <p class="mt-3">
                                Atenciosamente,<br>
                                Central de Relacionamento Dynami
                            </p>
                        </form>
                    </div>
                </div>
            </main>
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
    </body>
</html>