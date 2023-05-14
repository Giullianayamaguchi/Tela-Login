var Cod = ""
var Cod_Barra = ""
var Ref = ""
var Status = ""
var Setor = ""
var Nome_Prod = ""
var Nome_Abrev = ""
var Preco = ""
var Custo = ""
var Margem = ""
var Tipo = ""
var Disponivel = ""
var Unidade = ""
var Familia = ""

function Validar(){
    var lRet = true

    Cod = document.getElementById("Cod_Prod").value;
    Cod_Barra = document.getElementById("Cod_Barra").value;
    Ref = document.getElementById("Referencia").value;
    Status = document.getElementById("Status").value;
    Setor = document.getElementById("Setor").value;
    Nome_Prod = document.getElementById("Nome_Prod").value;
    Nome_Abrev = document.getElementById("Nome_Abre").value;
    Preco = document.getElementById("Preco").value;
    Custo = document.getElementById("Custo").value;
    Margem = document.getElementById("margem").value;
    Tipo = document.getElementById("Tipo").value;
    Disponivel = document.getElementById("Disponivel").value;
    Unidade = document.getElementById("Unidade").value;
    Familia = document.getElementById("Familia").value;

    if(Cod != ""){
        if(Cod_Barra != ""){
            if(Ref != ""){
                if(Nome_Prod != ""){
                    if(Nome_Abrev != ""){
                        if(Preco != ""){
                            if(Custo != ""){
                                if(Margem != ""){   
                                    if(Tipo != ""){
                                        if(Disponivel != ""){
                                            if(Unidade != ""){
                                                if(Familia != ""){
                                                    if(Status != ""){
                                                        if(Setor != ""){
                                                            lRet = true
                                                        }
                                                        else{
                                                            lRet = false
                                                        }
                                                    }
                                                    else{
                                                        lRet = false
                                                    }
                                                }
                                                else{
                                                    lRet = false
                                                }
                                            }
                                            else{
                                                lRet = false
                                            }
                                        }
                                        else{
                                            lRet = false
                                        }
                                    }
                                    else{
                                        lRet = false
                                    }
                                }
                                else{
                                    lRet = false
                                }
                            }
                            else{
                                lRet = false
                                alert("O custo nÃo foi preenchido")
                                console.log("O Campo de Custo não está preenchido.")
                            }
                        }
                        else{
                            lRet = false
                        }
                    }
                    else{
                        lRet = false

                    }
                }
                else{
                    lRet = false

                }
            }
            else{
                lRet = false
            }
        }
        else{
            lRet = false
        }
    }
    else{
        lRet = false
    }

    if(lRet == false){

    }
}

function Sair(){
    window.location.href = "index.html"
}