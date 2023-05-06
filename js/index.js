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