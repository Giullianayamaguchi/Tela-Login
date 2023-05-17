var Nome = ""
var nCpf = ""
var nData_Nasc= ""
var Email = ""
var Telefone = ""
var nCep = ""
var nNum_End = ""
var Comple = ""
var Refe = ""
var Senha = ""
var Confir_Senha = ""
var cmsg = ""
var nNum = 0

function Cadastrar(){
    var lRet = true

    Nome = document.getElementById("Nome").value;
    nCpf = document.getElementById("nCpf").value;
    nData_Nasc = document.getElementById("nData_Nasc").value;
    Email = document.getElementById("Email").value;
    Telefone = document.getElementById("Telefone").value;
    nCep = document.getElementById("nCep").value;
    nNum_End = document.getElementById("nNum_End").value;
    Comple = document.getElementById("Comple").value;
    Refe = document.getElementById("Refe").value;
    Senha = document.getElementById("Senha").value;
    Confir_Senha = document.getElementById("Confir_Senha").value;

    if(Nome == ""){
        lRet = false
        nNum++ 
        cmsg += ("Nome, ")
    }
        if(nCpf == ""){
            lRet = false
            nNum++ 
            cmsg += ("CPF, ")
        }
            if(nData_Nasc == 0){
                lRet = false
                nNum++ 
                cmsg += ("Data de nascimento, ")
            }
                if(Email == 0){
                    lRet = false
                    nNum++ 
                    cmsg += ("Email, ")
                }
                    if(Telefone == ""){
                    lRet = false
                    nNum++ 
                    cmsg += ("Telefone, ")
                    }
                        if(nCep == ""){
                            lRet = false
                        nNum++ 
                        cmsg += ("nCep, ")
                        }
                            if(nNum_End == ""){
                                lRet = false
                                nNum++ 
                                cmsg += ("Número endereço, ")
                            }
                                if(Comple == ""){   
                                    lRet = false
                                    nNum++ 
                                    cmsg += ("Complemento, ")
                                }
                                    if(Refe == ""){
                                        lRet = false
                                        nNum++ 
                                        cmsg += ("Referência, ")
                                    }
                                        if(Senha == 0){
                                            lRet = false
                                            nNum++ 
                                            cmsg += ("Senha, ")
                                        }
                                            if(Confir_Senha == 0){
                                                lRet = false
                                                nNum++ 
                                                cmsg += ("Confirmação da Senha, ")
                                            }
                                                
                                                       
       if(lRet == false){
        cmsg = cmsg.substring(0,cmsg.length-2);
        confirm("Favor revisar o preenchimento dos campos: " + cmsg )
    }
}
function Sair(){
    window.location.href = "index.html"
}