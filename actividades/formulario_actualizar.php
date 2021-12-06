<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Actividad | Hospedate</title>
    <link rel="shortcut icon" href="../imagenes/favicon.icon" type="image/x-icon">
    <link rel="stylesheet" href="estilos_actividades.css">
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
                        <li><a href="../alojamientos/index.php">Alojamientos</a></li>
                        <li><a href="../visitantes/index.php">Visitantes</a></li>
                        <li><a href="../asesores/index.php">Asesores</a></li>
                        <li><a href="index.php">Actividades</a></li>
                    </ul>
                    <p class="etiqueta_menu">by Jerry R.</p>
                </nav>
            </div>
            <div class="regresar_form">
                <a href="index.php"> Regresar</a>
            </div>
        </div>
    </header>
    <div class="contenedor_registro">
        <div class="caja_titulo_form">
            <h1 class="titulo_form">Editar Actividad Recreativa</h1>
        </div>
        <?php
        include_once '../php/alojamiento.php'; // importo alojamiento para poder usaro en el formulario, en el apartado de seleccion
        include_once '../php/actividad.php';// importo actividad para pasarle un id a su metodo estatico
        $actividad = ACTIVIDAD::obtener_uno($_GET['id_actividad']);
        $alojamientos = ALOJAMIENTO::obtener_todo(); // aguardo el metodo estatico
        ?>
        <!--Formulario-->
        <form action="actualizar.php" class="agregar_visitante_form" method="POST">
            <div class="grupo_1">
                <label id="label_actividad" for="id_actividad"> Actividad: <?php echo $_GET['id_actividad'] ?></label> <br><br><br>
                <input class="id_actividad input_form" type="hidden" placeholder="Nombre Actividad" name="id_actividad" value="<?php echo $_GET['id_actividad'] ?>" required>

                <span class="span_estado">Alojamiento: </span><select name="alojamiento">
                    <option value="">Elige uno</option>
                    <?php foreach ($alojamientos as $alojamiento) { ?>                   
                        <option> <?php echo $alojamiento['nombre']?></option>
                    <?php } ?>
                </select>

            </div>
            <div class="grupo_2">
                <label for="frecuencia">Frecuencia:</label>
                <input id="frecuencia" class="apellido input_form" type="text" placeholder="Frecuencia" name="frecuencia" value="<?php echo $actividad->frecuencia ?>" required>

                <span class="span_estado">Tipo de Actividad: </span><select name="tipo">
                    <option value="">Elige uno</option>
                    <option>Aerea</option>
                    <option>Acuatica</option>
                    <option>Acustica</option>
                    <option>Culinaria</option>
                    <option>Terrestre</option>
                </select>


            </div>

            <div class="grupo_3">
                <span class="span_estado">Dificultad de Actividad: </span><select name="dificultad">
                    <option value="">Elige uno</option>
                    <option>Baja</option>
                    <option>Media</option>
                    <option>Alta</option>
                    <option>Muy Alta</option>
                </select>

            </div>
            <div class="grupo_4">
                <label for="direccion_for">Descripcion</label>
                <input name="descripcion" id="direccion_for" class=" input_form" value="<?php echo $actividad->frecuencia ?>" placeholder="Descripcion">
            </div>
            <div class="grupo_5">
                <label id="gasto_extra_label" for="gasto_extra">Gasto Extra:</label>
                <input id="gasto_extra" class="apellido input_form" type="text" placeholder="Ingrese Cantidad $" name="gasto_extra" value="<?php echo $actividad->gasto_extra ?>" required>
            </div>
            <div class="botones_form">
                <button type="reset" class="cancelar_form">Limpiar</a>
                    <button type="submit" class="aceptar_form">Registrar</a>
            </div>

        </form>
    </div>

    <script type="text/javascript" src=" menu.js"></script>
</body>

</html>