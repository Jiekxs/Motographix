<main id="main-content">
    <form action="/signup" method="POST" id="formulario">
        <div class="container">
            <div class="row">
                <img id="logoA" src="../../Material_gráfico/Logos/Logo.png" alt="">
                <h2>Registro en MotoGraphix</h2>
                <div class="col-100">
                    <label for="correo_electronico">Correo electrónico:</label>
                    <input type="email" id="correo_electronico" name="correo_electronico" placeholder="Tu correo.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-100">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Tu contraseña.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-100">
                    <label for="confirm_password">Confirmar contraseña:</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar contraseña.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-75">
                    <input id="enviar2" type="submit" value="REGISTRARSE">
                </div>
            </div>
        </div>
    </form>
</main>

