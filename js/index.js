
/*
===================================
    Declaração das Variaveis
===================================*/


var email = '' // responsável por receber o campo email
var senha = '' // responsável por receber o campo senha
var cmsg  = '' // responsável por devolver a mensagem de erro

var nome   = ''
var email2 = ''
var senha2 = ''

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
    cmsg = 'Campo obrigatorios não preenchidos:'

    if(email == '' || senha == ''){ 
        if(email == ''){
            cmsg += ' Email,'
        }
        if(senha == ''){
            cmsg += ' Senha,'
        }
        cmsg = cmsg.substring(0,cmsg.length-1);
        confirm(cmsg);
        cmsg = ""
    }
    else{
        window.location.href = 'ListProd.html'
    }
}
function Sair(){
    window.location.href = "index.html"
}

