<?php
// Conexión a la base de datos MySQL (puedes ajustar estos valores según tu configuración)
$servername = "localhost"; // Cambia esto si tu servidor MySQL no está en localhost
$username = "root"; // Nombre de usuario de MySQL (puedes cambiarlo si lo has configurado de otra manera)
$password = ""; // Contraseña de MySQL (deja en blanco si no has establecido una contraseña)
$dbname = "nombre_base_de_datos"; // Nombre de la base de datos que deseas crear

// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Crear la base de datos si no existe
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Base de datos creada correctamente.";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

// Seleccionar la base de datos
$conn->select_db($dbname);

// Crear la tabla de usuarios si no existe
$sql_create_table = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellidos VARCHAR(50),
    correo_electronico VARCHAR(100) UNIQUE,
    direccion VARCHAR(255),
    contraseña VARCHAR(255) NOT NULL,
    fecha_nacimiento DATE,
    sexo ENUM('hombre', 'mujer'),
    movil VARCHAR(15),
    ciudad VARCHAR(50),
    codigo_postal VARCHAR(10),
    pais VARCHAR(50),
    foto_perfil BLOB
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Tabla de usuarios creada correctamente.";
} else {
    echo "Error al crear la tabla de usuarios: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motographix - Concesionario Oficial</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <nav id="NavSuperior">
        <section id="marcas">
            <a onclick="opa('index')"><img class="Logos Empresa" src="Material_gráfico/Logos/Logo.png" alt="logo_Empresa"></a>
            <a onclick="opa('aprilia')"><img class="Logos " src="Material_gráfico/Logos/Aprilia.png" alt="logo_Aprilia"></a>
            <a onclick="opa('ducati')"><img class="Logos " src="Material_gráfico/Logos/Ducati.png" alt="logo_Ducati"></a>
            <a onclick="opa('motoguzzi')" ><img class="Logos " src="Material_gráfico/Logos/Motoguzzi.png" alt="logo_Motoguzzi"></a>
            <a onclick="opa('mvagusta')"><img class="Logos " src="Material_gráfico/Logos/MvAgusta.png" alt="logo_Mvagusta"></a>
        </section>

        <section id="desplegables">
            <ul id="desplegables2">
                <li><a class="item">GAMA<i class="fa fa-chevron-down"></i></a>
                    <span class="accent"></span>
                    <ul class="drop-down">
                        <li><a onclick="opa('aprilia')">APRILIA</a></li>
                        <li><a onclick="opa('ducati')">DUCATI</a></li>
                        <li><a onclick="opa('motoguzzi')">MOTOGUZZI</a></li>
                        <li><a onclick="opa('mvagusta')">MV AGUSTA</a></li>
                    </ul>
                </li>
                <li><a class="item">NOSOTROS <i class="fa fa-chevron-down"></i></a>
                    <span class="accent"></span>
                    <ul class="drop-down">
                        <li><a onclick="opa('empresa')">EMPRESA</a></li>
                        <li><a onclick="opa('servicios')">SERVICIOS</a></li>
                        <li><a onclick="opa('taller')">TALLER</a></li>
                        <li><a onclick="opa('contacto')">CONTACTANOS</a></li>
                    </ul>
                </li>
                <li><a class="item">MI PERFIL <i class="fa fa-chevron-down"></i></a>
                    <span class="accent"></span>
                    <ul class="drop-down">
                        <li><a onclick="opa('login')">Acceder</a></li>
                        <li><a onclick="opa('registro')">Registrarse</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </nav>

    <aside id="menuLateral">
        <a onclick="opa('contacto')"><img src="Material_gráfico/iconos/telefono.png"  title="Contactanos" alt="telefono"></a>
        <a href="mailto:info@motographix.com?subject=Contacto" title="Correo">  <img src="../Material_gráfico/iconos/email.png" alt="email"></a>
        <a onclick="opa('taller')" title="Cita taller" ><img src="Material_gráfico/iconos/taller.png" alt="taller"></a>
        <a onclick="opa('map')" title="Donde estamos?"><img src="Material_gráfico/iconos/direccion.png" alt="direccion"></a>
    </aside>
    
    <main>

        <section id="gallery">
            <div class="gallery-container">
                <figure class="gallery-item">
                    <video playsinline="" autoplay="" muted="" loop="" controls=""
                        poster="Material_gráfico/video/V4SP2.mp4" class="video">
                        <source src="" type="video/webm">
                        <source src="Material_gráfico/video/V4SP2.mp4" type="video/mp4">
                    </video>
                </figure>
                <figure class="gallery-item">
                    <video playsinline="" autoplay="" muted="" loop="" controls=""
                        poster="Material_gráfico/video/V4SP2.mp4" class="video">
                        <source src="" type="video/webm">
                        <source src="Material_gráfico/video/MandelloV100.mp4" type="video/mp4">
                    </video>
                </figure>
                <figure class="gallery-item">
                    <video playsinline="" autoplay="" muted="" loop="" controls=""
                        poster="Material_gráfico/video/V4SP2.mp4" class="video">
                        <source src="" type="video/webm">
                        <source src="Material_gráfico/video/RS660_Promo.mp4" type="video/mp4">
                    </video>
                </figure>
                <figure class="gallery-item">
                    <video playsinline="" autoplay="" muted="" loop="" controls=""
                        poster="Material_gráfico/video/V4R-Pres.mp4" class="video">
                        <source src="" type="video/webm">
                        <source src="Material_gráfico/video/V4R-Pres.mp4" type="video/mp4">
                    </video>
                </figure>
                <figure class="gallery-item">
                    <video playsinline="" autoplay="" muted="" loop="" controls=""
                        poster="Material_gráfico/video/V4R-Pres.mp4" class="video">
                        <source src="" type="video/webm">
                        <source src="Material_gráfico/video/MvAgusta_Batman.mp4" type="video/mp4">
                    </video>
                </figure>

            </div>
            
            <nav class="gallery-navigation">
                <button class="nav-button prev-button"><span>&#60;</span></button>
                <button class="nav-button next-button"><span>&#62;</span></button>
            </nav>
        </section>

    </main>

    <footer>
        <section id="redes">
            <a href="https://about.instagram.com/es-la"><img class="iconoFooter" src="Material_gráfico/iconos/instagram.png" alt="logo_instagram"></a>
            <a href="https://twitter.com/?lang=es"><img class="iconoFooter" src="Material_gráfico/iconos/twitter.png" alt="logo_twitter"></a>
            <a href="https://www.facebook.com/?locale=es_ES"><img class="iconoFooter" src="Material_gráfico/iconos/facebook.png" alt="logo_facebook"></a>
        </section>

        <section id="info">
            <p>Zaragoza: 666 666 666</p>
            <img class="iconoFooter" src="Material_gráfico/iconos/email.png" alt="icono_email">
            <p>info@motographix.com</p>
            <p>2024 ALL RIGHTS RESERVED | AVISO LEGAL</p>
        </section>

    </footer>

    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <script src="js/transiciónYredireccion.js"></script>
</body>

</html>




















































































<!--


    
⠀⠀⢀⣀⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⠾⠛⠛⠷⣦⡀⠀⠀⠀⠀⠀⠀
⢠⣶⠛⠋⠉⡙⢷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⣿⠐⡡⢂⠢⠈⠻⣦⡀⠀⠀⠀⠀
⣾⠃⠠⡀⠥⡐⡙⣧⣰⣤⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⡹⡜⢄⠣⢤⣩⣦⣸⣧⠀⠀⠀⠀
⣿⡀⢢⠑⠢⣵⡿⠛⠉⠉⠉⣷⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⣜⢬⣿⠛⠉⠉⠉⠻⣧⡀⠀⠀
⣹⣇⠢⣉⣾⡏⠀⠠⠀⢆⠡⣘⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡾⠟⠋⢉⠛⢷⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⣿⡆⠱⡈⠔⠠⠄⠈⢷⡄⠀
⠀⢿⣦⢡⣿⠀⠌⡐⠩⡄⢊⢵⣇⣠⣀⣀⡀⠀⠀⠀⠀⣼⠟⢁⢀⠂⠆⡌⢢⢿⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣤⡀⠀⠀⠀⠀⣾⣅⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⡏⢷⡣⠜⣈⠆⡡⠂⠌⣷⠀
⠀⠀⢹⡞⣧⠈⡆⢡⠃⣼⣾⡟⠛⠉⠉⠉⠛⣷⡄⠀⢸⡏⠐⢨⡄⡍⠒⣬⢡⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⡟⠁⠀⠀⠀⠀⠑⢻⣶⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣴⣾⡖⣶⣦⠀⠀⠀⠀⠀⠀⠀⢸⡏⡜⣷⢱⢨⡆⢱⠈⡆⣿⠀
⠀⠀⠀⠽⣇⠎⡰⣩⡼⡟⠁⠄⡀⠠⠀⠀⠀⠈⢿⡄⡿⢄⢃⠖⡰⣉⠖⣡⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣷⡿⠁⣀⣠⣀⣤⣤⣤⣼⣿⣷⣦⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⢯⠋⡀⢀⠀⠉⢿⣆⠀⠀⠀⠀⠀⣸⢗⢡⣿⣂⣖⣨⡱⢊⡔⣿⠀
⠀⠀⠀⠀⣯⠒⠥⡾⢇⠰⡉⠔⡠⠃⡌⢐⠡⠀⣼⡟⡓⢌⢒⢪⠑⣌⡾⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⣿⣿⣿⣻⠭⠿⠛⠒⠓⠚⠛⠛⠿⣿⣿⣿⣿⣳⡶⢦⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⡚⠤⣁⠢⠐⣀⠀⣿⡀⠀⠀⠀⢈⡟⣸⢟⠉⠁⠀⠉⠙⢷⣴⠇⠀
⠀⠀⠀⠀⢿⣩⢲⣟⢌⡒⡱⢊⠴⢡⢘⣄⣢⣽⠞⡑⢌⠂⢎⠤⢋⡞⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⣶⣿⣿⣿⠿⠋⡀⢀⠠⠀⠄⠠⠂⠄⠄⡠⠀⠄⡈⠉⠛⠛⠛⡙⠺⣭⡗⣦⣄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢿⣰⠂⡅⢣⠐⡠⢽⡇⠀⠀⢀⡾⡅⣯⢄⠊⠤⢁⠂⠄⠀⠙⣧⡀
⠀⠀⠀⠀⠺⣇⢾⢭⢢⠱⣡⠋⣔⣷⠋⡍⠰⢀⠊⠰⢈⠜⡠⢊⣽⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡶⣿⡿⠛⠛⡉⡁⢄⠂⡔⢠⠂⡅⢊⢡⠘⡐⢌⣠⡑⠢⢐⠡⢊⠔⡡⢂⠅⣂⠙⡳⣎⡟⣶⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠹⣯⠰⢃⡜⢠⢺⡇⠀⢰⡾⠅⠃⢿⣜⠌⡒⢄⢊⡐⡁⢂⠘⣧
⠀⠀⠀⠀⠀⢻⣺⡇⢎⡱⢄⡓⣾⠄⢣⠈⠅⡂⠡⠑⡈⢢⠑⢢⡟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⡾⣫⠗⡅⣢⣥⣧⢽⠶⠟⣶⢶⣿⠆⡜⡐⠦⠱⢌⠢⡜⢏⣿⠛⣛⠳⢾⣤⡣⡜⣠⠓⡤⢩⢳⡎⡝⡷⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡟⡰⢈⠆⡹⣇⣰⠿⡀⢌⠒⠤⠙⢷⣼⡠⢆⡔⢡⠂⠔⣻
⠀⠀⠀⠀⠀⠐⢻⣏⠦⣑⢊⠔⣿⠈⢆⡑⠂⡌⢠⠑⡈⠤⡉⢼⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⢻⢣⠞⣣⢵⣾⡿⢋⠃⢆⠬⣹⠗⡬⡑⢎⠴⣉⠎⣕⢪⡑⢎⠲⡸⢯⣅⡚⠤⡘⡙⠿⣶⣍⡒⠧⢎⠼⣑⢣⢏⢷⣆⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡿⡐⠥⠚⡄⡙⠓⠤⡑⢌⡘⠤⡉⣼⢌⣷⠢⠜⢢⠉⢆⣿
⠀⠀⠀⠀⠀⠀⠐⣯⣚⠤⡋⡜⢫⠩⢄⠢⡑⡠⢃⠰⡁⢆⠱⣈⡧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⠏⣎⢣⣾⣿⡋⢍⡰⢌⡚⣌⣾⢋⠳⡰⣉⢎⠲⣡⠚⡤⠣⡜⣌⢣⠱⣩⠙⠷⣧⠵⡨⠜⡨⠻⣿⣇⠮⣑⢎⢣⠞⣬⡙⣯⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣸⢻⡌⡱⢃⡜⣨⡕⢢⠑⣢⠘⢤⣹⢏⡜⣠⢣⠙⢦⡙⢦⠇
⠀⠀⠀⠀⠀⠀⠀⠽⣎⠖⡱⢌⠥⢊⠖⠓⠒⠿⣮⡔⡡⢎⠰⢂⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣼⡛⣆⡛⣴⣿⡟⠰⣌⠲⡌⢶⢞⡋⢦⡉⠖⣑⣢⣮⣵⣶⣷⣶⣷⣶⣶⣥⣧⣢⡙⢢⡑⢎⡡⡙⠴⣛⠛⡦⢓⢬⠚⣌⡓⢦⡹⢜⡻⣆⠀⠀⠀⠀⠀⠀⠀⠀⢰⣿⢜⡢⢱⣡⡿⠛⠛⢒⠳⢤⢋⠴⣛⠣⡔⢢⢎⡙⢦⣱⠟⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢻⣝⡰⣉⠖⣡⠚⣈⠁⠄⠈⢻⣶⡨⢡⢃⡿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡾⢳⠍⣦⠱⣊⠏⡽⣉⢆⠳⢌⠣⢆⡙⣤⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣼⡠⢃⠝⡢⢅⠫⡔⡍⢦⠹⢤⡙⢦⠱⣋⡜⡻⣆⠀⠀⠀⠀⠀⠀⠀⠈⢻⣜⠲⣱⣿⠀⠂⡍⠰⣈⠦⡉⢖⡡⢓⡌⢣⠎⣜⣶⠏⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠠⢻⣖⡡⠞⣄⠓⡄⠣⢐⠀⠀⢻⣿⣥⡾⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡾⣍⢧⢫⠔⡫⠴⣉⠖⡡⢎⡱⢊⡱⣼⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣎⡑⢎⡱⡘⡜⢢⠝⣢⡙⣌⢳⡑⢮⠱⣹⣆⠀⠀⠀⠀⠀⠀⠀⠈⢿⡱⣿⣿⠀⢃⠌⡱⢠⢒⡉⢦⡑⢣⡜⢣⣾⠞⠁⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⣼⠱⣌⠓⡬⠑⡌⠠⠁⢸⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⢑⠎⡖⣩⢎⡱⢣⠜⡬⡑⢎⠔⣣⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣮⡢⡑⡜⢌⡱⢪⠔⡱⢊⢦⠹⣌⠏⣄⢻⡆⠀⠀⠀⠀⠀⠀⠀⠁⠙⢿⣿⡌⡐⢌⠰⠡⢎⠜⣢⠙⣦⡽⠟⠁⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⣦⣝⡰⢩⢌⠱⣈⣾⠏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣸⠇⣎⠹⡬⣑⠎⣔⠣⣍⠒⡭⢌⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⡕⡘⠦⣡⢃⢎⡱⣉⢦⢋⡜⡎⢥⠊⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠹⣿⣔⣈⠒⣍⣢⣽⡴⠟⠉⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠙⠛⠚⠛⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡿⠐⣌⢓⠲⣉⠞⡤⢓⠬⡑⢆⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣎⢒⡡⠎⢦⠱⡌⠦⡍⠖⣭⠒⡌⢸⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠙⠛⠋⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢼⡇⢢⠙⡜⢦⢋⡴⢡⠚⡤⢓⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡌⢣⠔⡌⢦⠱⢢⠕⡲⣉⠖⣁⠚⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⠁⢢⠹⣌⠳⣌⠲⣡⢋⠴⣹⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡐⢎⡜⢢⡙⢆⢫⠱⣌⠳⣀⠂⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠠⣿⠐⢂⠳⣌⠳⣌⠳⣄⢋⣴⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡰⢌⠣⡜⣌⠣⡝⢤⠳⢄⠂⢹⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⠀⢣⡙⣔⠣⡜⠲⡌⢦⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣧⢊⠵⡘⢤⡓⢬⢣⡙⠢⠌⢸⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⣿⠈⠴⡱⢌⡳⢌⠳⡘⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣎⠲⣉⠦⡙⣆⢣⠚⡅⠊⣿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣿⡈⡱⣘⢣⠜⡬⢣⢹⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡰⡡⢎⡱⡌⡖⣍⠒⡡⣿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⡇⡒⣍⠮⡜⢆⢣⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⡋⠍⡠⠄⡠⢀⠂⡍⢙⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣧⡑⢮⠰⡱⢜⡢⠍⢤⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣺⣇⣱⢎⢲⣉⠮⢼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢟⡋⠔⣡⠘⠤⡑⢨⠐⡁⢎⠠⢃⠌⡐⡙⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡜⣌⢣⠕⣎⡱⣩⢘⡿⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠩⣷⡐⣏⠦⣃⠞⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⡑⠢⠜⡰⢠⢉⠒⡌⢄⠣⡘⠄⠣⢌⠢⡑⢌⠢⡙⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣯⠔⣣⢚⡴⣑⡃⢾⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣷⠸⣜⡰⢻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠋⡴⢉⠜⢢⠑⠢⢌⠒⡌⢢⠑⠤⣉⠲⡈⢆⠱⢌⠢⢡⠃⡽⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢜⢢⠣⢖⡱⢌⡿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢻⣷⢆⡇⣻⣿⣿⣿⣿⣿⣿⣿⣿⡿⣁⠳⢨⠜⡨⢆⣉⠣⣊⠜⣈⠆⣙⡐⢢⠡⣑⢊⠒⡌⢣⢑⡊⡔⣊⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡎⡖⣹⢊⡵⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⣿⢼⡘⣽⣿⣿⣿⣿⣿⣿⣿⢏⠦⣡⢋⠲⢌⡑⠦⢌⡱⡐⠎⡤⠩⢔⠨⡅⢃⠲⢌⡱⢌⡱⢢⠱⡘⢤⣉⠻⣿⣿⣿⣿⣿⣿⣿⣿⡗⣍⠖⣯⣼⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⢺⡱⣚⣿⣿⣿⣿⣿⠟⡕⢎⠲⡡⢎⡱⢊⡜⡘⢆⠲⢡⠓⣌⠓⣌⠓⣌⢃⠳⣈⠲⢌⡒⣡⢣⡙⠦⣌⠣⡍⢿⣿⣿⣿⣿⣿⣿⡹⡰⣋⢿⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⡟⡠⢇⠼⣻⠿⣟⢣⠟⡸⢜⢣⠣⡜⡠⢇⡸⢣⠜⢣⠇⡛⣄⢛⡀⢟⡀⠟⡤⢃⠻⡄⢣⢄⢣⡘⢇⡄⢧⠛⣤⢘⡿⣿⣿⣿⢟⡣⢣⠇⣿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠚⣧⡑⡌⠒⡡⠚⢤⣳⡾⣱⠪⣅⠳⢬⠱⣊⠴⣃⠮⡑⢎⡱⢌⠦⣙⢢⡙⡜⡰⣉⠖⣩⠲⡌⢦⡙⠦⡜⢢⠛⡤⢓⡜⣆⠳⡜⢪⡑⢣⠋⣾⢁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⣷⣄⣁⣠⣽⡟⢧⡱⢆⡳⣌⢓⡎⡱⣌⠳⣌⢲⣉⠖⡱⢊⠖⣡⢒⡱⣌⡱⡘⣜⢢⢓⡜⣢⡙⣜⡘⣣⢝⡸⣛⢾⣌⡳⢈⠥⠘⠠⢡⡿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⠛⠋⠉⠛⢧⡝⣎⠵⣌⠧⡜⡱⣌⠳⣌⠶⡌⢞⡡⢏⠼⣡⢎⡱⢢⠵⡱⣌⢎⠦⣱⢡⠞⣤⠛⡴⢪⠵⣩⢞⣼⠿⢶⣤⣥⣤⡿⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠳⣽⡘⢮⡱⢳⣌⠳⣜⢢⡝⣢⢝⡸⢲⢡⠞⣰⠣⡞⡱⣌⢎⢞⡰⢣⠞⣔⡫⣜⢣⣿⠶⠋⠀⠀⠀⠈⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠓⠯⣧⣎⠳⣬⢓⡬⡱⢎⡵⣋⡬⣛⠴⣋⠶⡱⢎⡞⡬⢳⡍⣞⣦⠷⠛⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢈⡙⠓⠻⠶⠽⢮⣶⣥⣷⣭⣾⣥⣯⡵⠯⠼⠗⠛⠋⣉⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀


-->