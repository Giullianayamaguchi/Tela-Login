var BtnSignin = document.querySelector("#signin");
var btnSignUp = document.querySelector("#signup");

var body = document.querySelector("body");

BtnSignin.addEventListener("click", function(){
    body.className = "sign-in-js";
});

btnSignUp.addEventListener("click", function(){
    body.className = "sign-up-js";
})