"use strict";

const enviar_form = () =>{
    this.location = "login.html";
}

const env_form = () =>{
    this.location = "../formulario_farmacia.php";
}

window.onload=function(){


const nav = document.querySelector(".nav");
const abrir = document.querySelector(".a-mu");
const cerrar = document.querySelector(".c-mu");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})

}