<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alojamiento | Hospedate</title>
    <link rel="shortcut icon" href="../imagenes/favicon.icon" type="image/x-icon">
    <link rel="stylesheet" href="estilos_alojamientos.css">
    <link rel="stylesheet" href="estilos_menu_nav.css">
</head>

<body id="form_visitante">
    <header>
        <div class="titulo">
            <p><span>H</span>ospedate</p>
            <!--Menu Mobile-->
            <input class="d-none" type="checkbox" id="check">
            <label class="menu_label" for="check"><img id="icon_menu" src="../imagenes/bx-menu.svg" alt="menu"> <img id="icon_menu_x" src="../imagenes/bx-x.svg" alt="menu"></label>
            <div id="menu">
                <nav>
                    <ul>
                        <li><a href="../habitaciones/index.php"><span>H</span>abitaciones</a></li>
                        <li><a href="index.php">Alojamientos</a></li>
                        <li><a href="../visitantes/visitantes.php">Visitantes</a></li>
                        <li><a href="../asesores/index.php">Asesores</a></li>
                        <li><a href="#">Actividades</a></li>
                    </ul>
                    <p class="etiqueta_menu">by Jerry R.</p>
                </nav>
            </div>
            <div class="regresar_form">
                <a href="index.php"> Regresar</a>
            </div>
        </div>
    </header>
    <?php
    include_once '../php/alojamiento.php';
    $alojamiento = ALOJAMIENTO::obtener_uno($_GET['nombre']);
    ?>
    <div class="contenedor_registro">
        <div class="caja_titulo_form">
            <h1 class="titulo_form">Editar Alojamiento: <span><?php echo $_GET["nombre"] ?></span></h1>
        </div>

        <!--Formulario-->
        <form action="actualizar.php" class="agregar_visitante_form" method="POST">
            <div class="grupo_1">
                <label for="id_visitante"></label>
                <input  class="id_visitante input_form" type="hidden" placeholder="Ingrese ID" name="nombre" value="<?php echo $_GET["nombre"] ?>" required>

                <label for="nombre">Telefono:</label>
                <input id="nombre" class="nombre input_form" type="text" placeholder="Telefono" name="telefono" value="<?php echo $alojamiento->telefono ?>" required>
                <label for="apellido">Direccion:</label>
                <input id="apellido" class="apellido input_form" type="text" placeholder="Direccion" name="direccion" value="<?php echo $alojamiento->direccion ?>" required>
            </div>
            
            <div class="botones_form">
                    <button type="reset" class="cancelar_form">Limpiar</a>
                    <button type="submit" class="aceptar_form">Editar</a>
            </div>

        </form>
    </div>

    <script type="text/javascript" src=" menu.js"></script>
</body>

</html>