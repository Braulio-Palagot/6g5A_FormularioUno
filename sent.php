<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Enviado</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="contenedor">
<?php
$resultados = $_GET;
?>
<h1>Formulario Enviado</h1>
    <br>
    <br>
<?php if (!isset($resultados['userName']) || trim($resultados['userName']) != '') { ?>
    <p>Nombre de usuario: <?php echo $resultados['userName'] ?></p>
<?php } else {
    echo "Se debe introducir un nombre.";
} ?>

<br>
<br>

<?php if (isset($resultados['userGender'])) {
    $gender = $resultados['userGender'];
    switch ($gender) {
        case 'm':
            echo 'Género: Masculino<br><br>';
            break;
        case 'f':
            echo 'Género: Femenino<br><br>';
            break;
        case 'o':
            echo 'Género: Otro<br><br>';
            break;
    }
} ?>

<?php if (!isset($resultados['userPhone']) || trim($resultados['userPhone']) != '') { ?>
    <p>Teléfono de Contacto: <?php echo $resultados['userPhone'] ?></p>
<?php } else {
    echo "No se proporcionó teléfono de contacto.";
} ?>

<br>
<br>

<?php if (!isset($resultados['userMail']) || trim($resultados['userMail']) != '') { ?>
    <p>Correo de Contacto: <?php echo $resultados['userMail'] ?></p>
<?php } else {
    echo "<p class='error'>No se proporcionó correo de contacto.</p>";
} ?>

<br>
<br>

<?php if(isset($resultados['prefs'])) {
    $prefs = $resultados['prefs'];
    echo "Tu preferencia de contacto es: </br>";
    foreach($prefs as $pref) {
        echo $pref . '<br/>';
    }
} else {
    echo "<p style='color: red;'>No elegiste preferencias de contacto.</p>";
} ?>

<br>
<br>

<?php if (!isset($resultados['userAddres']) || trim($resultados['userAddres']) != '') { ?>
    <p>Dirección: <?php echo $resultados['userAddres'] ?></p>
<?php } else {
    echo "No se proporcionó una dirección.";
} ?>

<br>
<br>

<?php if(isset($resultados['userAddresHint'])) {
    $referencias = $resultados['userAddresHint'];
    $nuevas_referencias = filter_var($referencias, FILTER_SANITIZE_STRING);
    if(strlen($nuevas_referencias) > 0 &&  trim($nuevas_referencias)) {
        echo  'Referencias: '.$nuevas_referencias;
    } else {
        echo "No hay referencias.";
    }
} ?>

<br>
<br>

<?php if(isset($resultados['userResume'])) {
    $resumen = $resultados['userResume'];
    $nuevo_resumen = filter_var($resumen, FILTER_SANITIZE_STRING);
    if(strlen($nuevo_resumen) > 0 &&  trim($nuevo_resumen)) {
        echo  'Consulta: '.$nuevo_resumen;
    } else {
        echo "No hay resumen.";
    }
} ?>

<br>
<br>

<?php  $topics = array(
    'paseador' => 'Paseador',
    'cliente' => 'Cliente',
    'otra' => 'Otra'
);?>

<?php if(array_key_exists($resultados['topics'], $topics)) {
    $tipo_consulta = $resultados['topics'];
    switch ($tipo_consulta) {
        case 'paseador':
            echo "Consulta de Paseador";
            break;
        case 'cliente':
            echo "Consulta de Cliente";
            break;
        case 'otra':
            echo "Otra Consulta";
            break;
    }
} else {
    echo "No elegiste tipo de consulta.";
} ?>
</div>
</body>
</html>