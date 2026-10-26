const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");

let esDeDia = false;

function alternarModo() {

    cuerpo.classList.toggle("claro");
    esDeDia = !esDeDia;
    if (esDeDia) {
        botonModo.textContent = "🌙 Modo noche";
    } else {
        botonModo.textContent = "🌞 Modo día";
    }
}

botonModo.addEventListener("click", alternarModo);

const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

function alternarMenu() {
    menu.classList.toggle("abierto");
}

botonMenu.addEventListener("click", alternarMenu);


const formularioSugerencia = document.querySelector("#form-sugerencia");
const avisoSugerencia = document.querySelector("#aviso-sugerencia");

function revisarSugerencia(event) {

    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const sugerencia = document.querySelector("#sugerencia").value;

    if (nombre === "") {
        event.preventDefault();
        avisoSugerencia.textContent = "Por favor, Ingresa tu nombre";
        avisoSugerencia.classList.add("error");
        avisoSugerencia.classList.remove("exito");
    } else if (correo.includes("@") === false) {
        event.preventDefault();
        avisoSugerencia.textContent = "Ingresa un correo electrónico valido,debe incluir @";
        avisoSugerencia.classList.add("error");
        avisoSugerencia.classList.remove("exito");
    } else if (sugerencia === "") {
        event.preventDefault();
        avisoSugerencia.textContent = "Escriba que producto te gustaría encontrar.";
        avisoSugerencia.classList.add("error");
        avisoSugerencia.classList.remove("exito");
    }else {
        avisoSugerencia.textContent = "Gracias por tu sugerencia";
        avisoSugerencia.classList.add("exito");
        avisoSugerencia.classList.remove("error");
    }
}

formularioSugerencia.addEventListener("submit", revisarSugerencia);