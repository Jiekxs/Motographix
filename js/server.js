const express = require("express");
const sqlite3 = require("sqlite3").verbose();

const app = express();
const PORT = process.env.PORT || 3000;

// Configurar middleware para manejar solicitudes JSON
app.use(express.json());

// Conexión a la base de datos SQLite
const db = new sqlite3.Database("../user.db", err => {
    if (err) {
        console.error(err.message);
    }
    console.log("Conectado a la base de datos SQLite.");
});

// Crear tabla de usuarios si no existe
db.run(`CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT ,
    apellidos TEXT ,
    correo_electronico TEXT UNIQUE,
    direccion TEXT, 
    contraseña TEXT NOT NULL,
    fecha_nacimiento DATE,
    sexo TEXT CHECK(sexo IN ('hombre', 'mujer')),
    movil TEXT,
    ciudad TEXT,
    codigo_postal TEXT,
    pais TEXT,
    foto_perfil BLOB
)`);

// Manejar la solicitud de registro de usuarios
app.post('/signup', (req, res) => {
    // Obtener los datos del formulario del cuerpo de la solicitud
    const { correo_electronico, contraseña } = req.body;

    // Insertar los datos del usuario en la base de datos
    db.run('INSERT INTO usuarios (correo_electronico, contraseña) VALUES (?, ?)', [correo_electronico, contraseña], function(err) {
        if (err) {
            console.error("Error al insertar usuario en la base de datos:", err.message);
            // Si hay un error, enviar una respuesta de error al cliente
            return res.status(500).json({ success: false, error: "Error al registrar usuario" });
        }
        
        // Enviar una respuesta exitosa al cliente
        res.json({ success: true, message: "Usuario registrado correctamente" });
    });
});

// Iniciar servidor
const server = app.listen(PORT, () => {
    console.log(`Servidor corriendo en http://localhost:${PORT}`);
});

// Manejar la terminación del servidor para cerrar la conexión a la base de datos
process.on('SIGINT', () => {
    server.close(() => {
        console.log('Servidor detenido. Cerrando conexión a la base de datos.');
        db.close((err) => {
            if (err) {
                return console.error(err.message);
            }
            console.log('Conexión a la base de datos cerrada.');
            process.exit(0);
        });
    });
});
