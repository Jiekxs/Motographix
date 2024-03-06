document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que se envíe el formulario de forma predeterminada

    // Captura los valores del formulario
    var correo = document.getElementById("correo_electronico").value;
    var contraseña = document.getElementById("password").value;
    var confirmarContraseña = document.getElementById("confirm_password").value;


    // Verifica si las contraseñas coinciden
    if (contraseña !== confirmarContraseña) {
        alert("Las contraseñas no coinciden");
        return;
    }

    // Verifica si ya existe un usuario con el mismo correo electrónico
    var usuariosRegistrados = JSON.parse(localStorage.getItem("usuarios")) || [];
    var usuarioExistente = usuariosRegistrados.find(function(user) {
        return user.correo === correo;
    });

    if (usuarioExistente) {
        alert("Ya existe un usuario con este correo electrónico");
        return;
    }

    // Crear un objeto de usuario
    var nuevoUsuario = {
        correo: correo,
        contraseña: contraseña,
        perfil: {
            fotoPerfil: "", // URL del archivo de foto de perfil
            nombre: "",
            apellido: "",
            fechaNacimiento: "",
            sexo: "",
            movil: "",
            direccion: "",
            ciudad: "",
            codigoPostal: "",
            pais: ""
        }
    };

    // Agrega el nuevo usuario al array de usuarios registrados
    usuariosRegistrados.push(nuevoUsuario);

    // Convierte el array de usuarios a una cadena JSON
    var usuariosJSON = JSON.stringify(usuariosRegistrados);

    // Almacena la cadena JSON en localStorage
    localStorage.setItem("usuarios", usuariosJSON);

    // Limpia el formulario
    document.getElementById("formulario").reset();

    alert("Usuario registrado correctamente");
    window.location.href = "../layouts/home_layout.html?marca=login";
});
