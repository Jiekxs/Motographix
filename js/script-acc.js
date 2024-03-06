document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que se envíe el formulario de forma predeterminada

    // Captura los valores del formulario
    var correo = document.getElementById("correo_electronico").value;
    var contraseña = document.getElementById("contraseña").value;

    // Obtiene el usuario almacenado en localStorage
    var usuariosRegistrados = JSON.parse(localStorage.getItem("usuarios")) || [];
    var usuario = usuariosRegistrados.find(function(user) {
        return user.correo === correo && user.contraseña === contraseña;
    });

    if (usuario) {
        alert("Inicio de sesión exitoso");
        // Redirige a la página de perfil con el correo electrónico del usuario en la URL
        window.location.href = "../layouts/home_layout.html?marca=perfil&correo=" + encodeURIComponent(usuario.correo);
    } else {
        alert("Correo electrónico o contraseña incorrectos");
    }
});

function redirectRegistro() {
    // Redirige al usuario a la página de registro
    window.location.href = "/html/perfil/registro.html";
}
