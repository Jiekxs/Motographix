// Esperar a que el contenido HTML haya sido completamente cargado
document.addEventListener("DOMContentLoaded", function() {
    // Agregar un evento de escucha para el envío del formulario
    document.getElementById("formulario").addEventListener("submit", function(event) {
        event.preventDefault(); // Evitar el envío del formulario por defecto
        
        // Obtener los valores del formulario
        const correoElectronico = document.getElementById("correo_electronico").value;
        const password = document.getElementById("password").value;
        const confirmarPassword = document.getElementById("confirm_password").value;

        // Validar que las contraseñas coincidan
        if (password !== confirmarPassword) {
            alert("Las contraseñas no coinciden.");
            return;
        }

        // Imprimir el valor de la contraseña en la consola
        console.log("Contraseña:", password);

        // Inicializar SQLite
        initSQLite().then(function(db) {
            // Ejecutar la consulta SQL para insertar los datos en la tabla 'usuarios'
            db.exec("INSERT INTO usuarios (correo_electronico, contraseña) VALUES (?, ?)", [correoElectronico, password]);

            // Cerrar la conexión con la base de datos
            db.close();
            
            // Mostrar un mensaje de éxito
            alert("Usuario registrado correctamente");
        }).catch(function(error) {
            console.error("Error al inicializar SQLite:", error);
            alert("Error al registrar usuario");
        });
    });

    // Función para inicializar SQLite
    function initSQLite() {
        return new Promise(function(resolve, reject) {
            // Crear una nueva instancia de SQLite
            const db = new SQL.Database();

            // Resolver la promesa con la instancia de SQLite
            resolve(db);
        });
    }
});
