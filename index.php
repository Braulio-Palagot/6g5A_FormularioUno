<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Huellitas Aventureras</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="contenedor">
    <h1>Formulario de Contacto</h1>
    <br>
    <br>
    <form action="sent.php" method="get">
        <div class="campo">
            <label class="label" for="userName">Nombre:</label>
            <input type="text" name="userName">
        </div>

        <!--  Select  -->
        <div class="campo">
            <label class="label" for="userGender">Género:</label>
            <select name="userGender" value="-Any-">
                <option>- Selecciona un género -</option>
                <option value="m">Masculino</option>
                <option value="f">Femenino</option>
                <option value="o">Otro</option>
            </select>
        </div>

        <div class="campo">
            <label class="label" for="userPhone">Teléfono:</label>
            <input type="text" name="userPhone">
        </div>

        <div class="campo">
            <label class="label" for="userMail">Correo Electrónico:</label>
            <input type="email" name="userMail">
        </div>

        <!--  Checkbox  -->
        <div class="campo">
            <p class="label">Preferencia de Contacto:</p>
            <label class="label" for="prefPhone">Teléfono</label>
            <input type='checkbox' name='prefs[]' value='Teléfono'>
            <label class="label" for="prefMail">Correo</label>
            <input type='checkbox' name='prefs[]' value='Correo'>
        </div>

        <div class="campo">
            <label class="label" for="userAddres">Dirección:</label>
            <input type="text" name="userAddres">
        </div>

        <!--  Text Area  -->
        <div class="campo">
            <label class="label" for="userAddresHint">Referencias:</label>
            <textarea name="userAddresHint" rows="8" cols="40"></textarea>
        </div>

        <!--  Text Area  -->
        <div class="campo">
            <label class="label" for="userResume">Escriba su duda brevemente:</label>
            <textarea name="userResume" rows="8" cols="40" id="mensaje"></textarea>
        </div>

        <!--  Radio Button  -->
        <div class="campo topics">
            <p class="label">Tipo de consulta:</p>
            <input class="label" type="radio" name="topics" value="paseador">Paseador
            <input class="label" type="radio" name="topics" value="cliente">Cliente
            <input class="label" type="radio" name="topics" value="otra" checked>Otra
        </div>

        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>