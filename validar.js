console.log("Todo esta andando correctamente");

var nombre = document.getElementById("nombre");
var apellido = document.getElementById("apellido");
var correo = document.getElementById("correo");
var pass = document.getElementById("pass");
var telefono = document.getElementById("telefono");
var direccion = document.getElementById("direccion");
var formulario = document.getElementById("formulario");

var error = document.getElementById("error");

formulario.addEventListener("submit", e=>{

    var errores = "";
    var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    errores.innerHTML = "";
    var valnombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    var entrar = false;

    //Validar nombre
    if(nombre.value.length < 4 || nombre.value.length > 20){
        errores += "El nombre debe tener entre 4 y 20 caracteres <br>";
        nombre.focus();
        entrar = true;
    }
    if(!valnombre.test(nombre.value)){
        errores += "El nombre unicamente puede contar con letras <br>";
        nombre.focus();
        entrar = true;
    }

    //Validar apellido
    if(apellido.value.length < 4 || apellido.value.length > 20){
        errores += "El apellido debe tener entre 4 y 20 caracteres <br>";
        apellido.focus();
        entrar = true;
    }
    if(!valnombre.test(apellido.value)){
        errores += "El apellido unicamente puede contar con letras <br>";
        apellido.focus();
        entrar = true;
    }

    //Validar correo
    if(!regexEmail.test(correo.value)){
        errores += "El correo no es valido <br>";
        correo.focus();
        entrar = true;
    }

    //Validar pass
    if(pass.value.length < 6 || pass.value.length > 20){
        errores += "La contraseña debe tener mas de 6 caracteres y 20 caracteres <br";
        pass.focus();
        entrar = true;
    }

    //Validar direccion
    if(direccion.value.length < 5){
        errores += "La direccion debe tener minimo 6 caracteres <br>";
        pass.focus();
        entrar = true;
    }

    //Validar telefono
    if(isNaN(telefono.value)){
        errores += "El campo telefono unicamente debe tener numeros <br>";
        telefono.focus();
        entrar = true;
    }
    
    if(telefono.value.length !== 10){
        errores += "El telefono debe tener 10 digitos <br>";
        telefono.focus();
        entrar = true;
    }

    if(entrar){
        error.innerHTML = errores;
        e.preventDefault();
    }


})