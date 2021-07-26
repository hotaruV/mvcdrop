document.addEventListener('DOMContentLoaded', selectorVuelos);
const formRedondo = document.querySelector('#form_vuelo_redondo');
const intpus__redondo = document.querySelectorAll('#form_vuelo_redondo input');
const formSencillo = document.querySelector('#form_vuelo_sencillo');
const intpus__sencillo = document.querySelectorAll('#form_vuelo_sencillo input');
const expresiones = {

    texto: /^[a-zA-ZÀ-ÿ\s]{1-40}$/,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{10, 20}$/
}

let salida = document.querySelector('#salida').value;
let destino = document.querySelector('#destino').value;
let fecha_salida = document.querySelector('#fecha_salida').value;
let fecha_llegada = document.querySelector('#fecha_llegada').value;
let pasajeros = document.querySelector('#pasajeros').value;
let nombre = document.querySelector('#nombre').value;
let telefono = document.querySelector('#telefono').value;
let email = document.querySelector('#email').value;
let datos = document.querySelector('#datos').value;

function selectorVuelos() {
    vuelo_rodondo()
    if (document.querySelector('#redondo')) {
        let sencillo = document.querySelector('#redondo');
        sencillo.addEventListener('click', vuelo_rodondo)
    }
    if (document.querySelector('#sencillo')) {
        let sencillo = document.querySelector('#sencillo');
        sencillo.addEventListener('click', vuelo_sencillo)
    }

    const campos = {
        salida: false,
        destino: false,
        fecha_salida: false,
        fecha_llegada: false,
        pasajeros: false,
        nombre: false,
        telefono: false,
        email: false,
        datos: true
    }

    const validarFormulario = (e) => {
        switch (e.target.name) {
            case 'salida':
                ValidarCampo(expresiones.texto, e.target, 'salida');
                breake
            case 'destino':
                ValidarCampo(expresiones.texto, e.target, 'destino');
                breake
            case 'fecha_salida':
                ValidarCampo(expresiones.texto, e.target, 'fecha_salida');
                breake
            case 'fecha_llegada':
                ValidarCampo(expresiones.texto, e.target, 'fecha_llegada');
                breake
            case 'pasajeros':
                ValidarCampo(expresiones.texto, e.target, 'pasajeros');
                breake
            case 'nombre':
                ValidarCampo(expresiones.texto, e.target, 'nombre');
                breake
            case 'telefono':
                ValidarCampo(expresiones.texto, e.target, 'telefono');
                breake
            case 'email':
                ValidarCampo(expresiones.texto, e.target, 'email');
                breake
            case 'datos':
                ValidarCampo(expresiones.texto, e.target, 'datos');
                breake
        }
    }

    const ValidarCampo = (expresion, input, campo) => {
        if (expresion.test(input.value)) {
            document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
            document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
            document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
            document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
            document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
            campos[campo] = true;
        } else {
            document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
            document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
            document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
            document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
            document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
            campos[campo] = false;
        }
    }

    intpus__redondo.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', validarFormulario);
    });



    function vuelo_rodondo() {
        if (formRedondo) {
            formRedondo.onsubmit = (e) => {
                e.preventDefault();
                if (campos.salida && campos.destino && campos.fecha_salida && campos.fecha_llegada && campos.pasajeros && campos.nombre && campos.telefono && campos.email) {
                    formRedondo.reset();
                    document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
                    setTimeout(() => {
                        document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
                    }, 5000);

                    document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
                        icono.classList.remove('formulario__grupo-correcto');
                    });
                }else{
                    document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
                }
            }
        }
    }
}

function vuelo_sencillo() {
    if (formSencillo) {
        formSencillo.onsubmit = (e) => {
            e.preventDefault();

        }
    }
}


