<form method='POST' class='contact' action="index.php">
            <div><label>Usuario:</label><input name="usuario" type='text' value='' placeholder="Nombre de usuario"></div>
            <div><label>Contraseña:</label><input type='password' value='' id='password'></div>
            <div><label>Mostrar contraseña: <input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"></label></div>
            <div><label>Texto:</label><textarea rows='6'></textarea></div>
            <div><input type='submit' value='Aceptar'></div>
        </form>