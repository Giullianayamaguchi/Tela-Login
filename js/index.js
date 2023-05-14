/*=====================================================================================================================/*
    Fonte: program.js 
    Motivo: Responsavel pela lógica e funcionamento do html 'index.html' responsável pelo funcionamento da página
    Data: 18/04/2023
    Programadores(As): Giulliana Yamaguchi
/*=====================================================================================================================*/

/*
===================================
    Declaração das Variaveis
===================================*/

var BtnSignin = document.querySelector(".signin-btn"); // 
var btnSignUp = document.querySelector(".signup-btn"); //

var tela1 = document.getElementById("Signin"); // recebe id para identificar a tela 1
var tela2 = document.getElementById("Signup"); // recebe id para identificar a tela 2

var email = '' // responsável por receber o campo email
var senha = '' // responsável por receber o campo senha
var cmsg  = '' // responsável por devolver a mensagem de erro

var nome   = ''
var email2 = ''
var senha2 = ''
 
/*====================================================================================================
    Escopo: Reservado para trocar telas
    Motivo: Escopo Reservado para fazer a troca de conteúdo da tela ao clicar nos botões 
    Data: 18/04/2023
    Programadores(As): Giulliana Yamaguchi
======================================================================================================*/

btnSignUp.addEventListener("DOMContentLoaded", function() {
    tela1.classList.remove("visible")
    tela2.classList.add("visible")
})

function Entrar(){
    tela1.classList.remove("visible")
    tela2.classList.add("visible")
}

function Cadastrar(){
    tela2.classList.remove("visible")
    tela1.classList.add("visible") 
}

/*====================================================================================================
    Escopo: Campos digitáveis - tela 1
    Motivo: Escopo Reservado para Recebe as informações inseridas pelo usuário tela 1
    Data: 23/04/2023
    Programadores(As):  Giulliana Yamaguchi
====================================================================================================*/
function Email(){
    email = document.getElementById("EmailSc").value;
}

function Senha(){
    senha = document.getElementById("SenhaSc").value;
}

/*====================================================================================================
    Escopo: Mensagem de erro - tela 1
    Motivo: Escopo Reservado para validar se os campos de Email e senha estão preenchidos
    Data: 23/04/2023
    Programadores(As):  Giulliana Yamaguchi
====================================================================================================*/
function Login(){
    
    Email()
    Senha()

    if(email == '' || senha == ''){ 
        cmsg += 'Campo obrigatorios não preenchidos:'
        if(email == ''){
            cmsg += ' Email,'
        }
        if(senha == ''){
            cmsg += ' Senha,'
        }
        cmsg = cmsg.substring(0,cmsg.length-1);
    }
    else{
        cmsg = 'Acesso Permitido'
        window.location.href = 'CadProd.html'
    }
    alert(cmsg);
}

/*====================================================================================================
    Escopo: Campos digitáveis - tela 2
    Motivo: Escopo Reservado para Recebe as informações inseridas pelo usuário tela 2
    Data: 23/04/2023
    Programadores(As):  Giulliana Yamaguchi
====================================================================================================*/

function Email2(){
    email2 = document.getElementById("EmailSs").value;
}

function Senha2(){
    senha2 = document.getElementById("SenhaSs").value;
}


function Nome(){
    nome = document.getElementById("NomeSs").value;
}

/*====================================================================================================
    Escopo: Mensagem de erro - tela 2
    Motivo: Escopo Responsável por validar se os campos preenchidos pelo user estão corretos na tela 2
    Data: 24/04/2023
    Programadores(As): Giulliana Yamaguchi 
====================================================================================================*/
function Cadastrando(){
    cmsg += 'Campo obrigatorios não preenchidos:'

    if(email2 == '' || senha2 == '' || nome == ''){ 
        if(email2 == ''){
            cmsg += ' Email, '
        }
        if(senha2 == ''){
            cmsg += ' Senha, '
        }
        if(nome == ''){
            cmsg += ' Nome, '
        }
        cmsg += cmsg.substring(0,cmsg.length-1);
    }
    else{
        cmsg += 'Cadastrado com sucesso'
    }
    alert(cmsg);
}

