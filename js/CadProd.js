var Cod = ""
var Cod_Barra = ""
var Status = ""
var Setor = ""
var Nome_Prod = ""
var Nome_Abrev = ""
var Preco = ""
var Margem = ""
var Tipo = ""
var Disponivel = ""
var Unidade = ""
var Familia = ""
var nNum = 0
var cmsg = ""

function Validar(){
    var lRet = true

    Cod = document.getElementById("Cod_Prod").value;
    Cod_Barra = document.getElementById("Cod_Barra").value;
    Status = document.getElementById("Status").value;
    Setor = document.getElementById("Setor").value;
    Nome_Prod = document.getElementById("Nome_Prod").value;
    Nome_Abrev = document.getElementById("Nome_Abre").value;
    Preco = document.getElementById("Preco").value;
    Margem = document.getElementById("margem").value;
    Tipo = document.getElementById("Tipo").value;
    Disponivel = document.getElementById("Disponivel").value;
    Unidade = document.getElementById("Unidade").value;
    Familia = document.getElementById("Familia").value;

    if(Cod == ""){
        lRet = false
        nNum++ 
        cmsg += ("Codigo, ")
    }
        if(Cod_Barra == ""){
            lRet = false
            nNum++ 
            cmsg += ("Codigo de Barra, ")
        }
            if(Status == 0){
                lRet = false
                nNum++ 
                cmsg += ("Status, ")
            }
                if(Setor == 0){
                    lRet = false
                    nNum++ 
                    cmsg += ("Setor, ")
                }
                    if(Nome_Prod == ""){
                    lRet = false
                    nNum++ 
                    cmsg += ("Nome do produto, ")
                    }
                        if(Nome_Abrev == ""){
                            lRet = false
                        nNum++ 
                        cmsg += ("Nome Abrevreviado, ")
                        }
                            if(Preco == ""){
                                lRet = false
                                nNum++ 
                                cmsg += ("Preco, ")
                            }
                                if(Margem == ""){   
                                    lRet = false
                                    nNum++ 
                                    cmsg += ("Margem, ")
                                }
                                    if(Tipo == 0){
                                        lRet = false
                                        nNum++ 
                                        cmsg += ("Tipo, ")
                                    }
                                        if(Disponivel == 0){
                                            lRet = false
                                            nNum++ 
                                            cmsg += ("Disponibilidade, ")
                                        }
                                            if(Unidade == 0){
                                                lRet = false
                                                nNum++ 
                                                cmsg += ("Unidade, ")
                                            }
                                                if(Familia == ""){
                                                    lRet = false
                                                    nNum++ 
                                                    cmsg += ("Familia, ")
                                                }
                                                    if(Desc == ""){
                                                        lRet = false
                                                        nNum++ 
                                                        cmsg += ("Descrição, ")
                                                    }
                                                       
   if(lRet == false){
    cmsg = cmsg.substring(0,cmsg.length-2);
    alert("Favor revisar o preenchimento dos campos: " + cmsg )
    cmsg =""
    }
}
function Sair(){
    window.location.href = "index.html"
}