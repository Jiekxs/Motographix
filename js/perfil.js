// Función para cargar la información del usuario en el formulario antes de editarlo
function cargarInformacionUsuario() {
    // Obtiene el correo electrónico del usuario de la URL
    var params = new URLSearchParams(window.location.search);
    var correo = params.get('correo');

    if (!correo) {
        alert("No se proporcionó el correo electrónico del usuario");
        return;
    }

    // Obtiene el usuario correspondiente al correo electrónico de la URL
    var usuariosRegistrados = JSON.parse(localStorage.getItem("usuarios")) || [];
    var usuario = usuariosRegistrados.find(function(user) {
        return user.correo === correo;
    });

    if (!usuario) {
        alert("Usuario no encontrado");
        return;
    }

    // Llena los campos del formulario con los datos del usuario
    document.getElementById("nombre").value = usuario.perfil.nombre;
    document.getElementById("apellidos").value = usuario.perfil.apellido;
    document.getElementById("correo").value = usuario.correo; // Muestra el correo electrónico
    document.getElementById("foto_perfil").src = usuario.perfil.fotoPerfil; // Muestra la foto de perfil
    // Opcional: Si deseas mostrar el campo de contraseña, puedes hacerlo aquí
    // document.getElementById("contraseña").value = usuario.contraseña;
    document.getElementById("fecha_nacimiento").value = usuario.perfil.fechaNacimiento;
    document.getElementById("sexo").value = usuario.perfil.sexo;
    document.getElementById("movil").value = usuario.perfil.movil;
    document.getElementById("direccion").value = usuario.perfil.direccion;
    document.getElementById("ciudad").value = usuario.perfil.ciudad;
    document.getElementById("codigo_postal").value = usuario.perfil.codigoPostal;
    document.getElementById("pais").value = usuario.perfil.pais;
}

// Llama a la función al cargar la página
cargarInformacionUsuario();

// Función para permitir al usuario actualizar su información de perfil
function guardarCambios() {
    var correo = document.getElementById("correo").value;
    var usuariosRegistrados = JSON.parse(localStorage.getItem("usuarios")) || [];
    var usuario = usuariosRegistrados.find(function(user) {
        return user.correo === correo;
    });

    if (!usuario) {
        alert("Usuario no encontrado");
        return;
    }

    // Actualiza la información del perfil
    usuario.perfil.nombre = document.getElementById("nombre").value;
    usuario.perfil.apellido = document.getElementById("apellidos").value;
    usuario.perfil.fechaNacimiento = document.getElementById("fecha_nacimiento").value;
    usuario.perfil.sexo = document.getElementById("sexo").value;
    usuario.perfil.movil = document.getElementById("movil").value;
    usuario.perfil.direccion = document.getElementById("direccion").value;
    usuario.perfil.ciudad = document.getElementById("ciudad").value;
    usuario.perfil.codigoPostal = document.getElementById("codigo_postal").value;
    usuario.perfil.pais = document.getElementById("pais").value;
    // Actualiza la foto de perfil si se ha proporcionado una nueva
    var nuevaFotoPerfil = document.getElementById("nueva_foto_perfil").files[0];
    if (nuevaFotoPerfil) {
        var reader = new FileReader();
        reader.onload = function(event) {
            usuario.perfil.fotoPerfil = event.target.result;
            document.getElementById("foto_perfil").src = event.target.result;
        };
        reader.readAsDataURL(nuevaFotoPerfil);
    }

    // Actualiza la información del usuario en localStorage
    localStorage.setItem("usuarios", JSON.stringify(usuariosRegistrados));

    alert("Cambios guardados correctamente");
}

// Función para permitir al usuario borrar su cuenta
function borrarCuenta() {
    var correo = document.getElementById("correo").value;
    var usuariosRegistrados = JSON.parse(localStorage.getItem("usuarios")) || [];
    var indiceUsuario = usuariosRegistrados.findIndex(function(user) {
        return user.correo === correo;
    });

    if (indiceUsuario === -1) {
        alert("Usuario no encontrado");
        return;
    }

    // Elimina el usuario del array de usuarios registrados
    usuariosRegistrados.splice(indiceUsuario, 1);

    // Actualiza la información en localStorage
    localStorage.setItem("usuarios", JSON.stringify(usuariosRegistrados));

    alert("Cuenta eliminada correctamente");
    window.location.href = "../layouts/home_layout.html?marca=registro"
}
