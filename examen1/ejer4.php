<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Subir archivos</title>
    </head>
    <body>
        <?php

        if (filter_input(INPUT_POST, 'Subir', FILTER_SANITIZE_STRING)) {
            #var_dump($_FILES);

            foreach ($_FILES as $file) {
                if ($file['error'] == 0) {
                    if (!move_uploaded_file($file['tmp_name'], 'subidas/' . $file['name'])) {
                        echo "Falló";
                    } else {
                        echo "<h3>Se ha subido el fichero: " . $file['name'] . "</h3>";
                    }
                } else {
                    switch ($file['error']) {
                        case 1: break;
                        case 2: break;
                        case 4: echo "No se ha subido archivo en el selector " . $file;
                            break;
                        case 6: break;
                        case 7: break;
                        case 8: break;
                        default :break;
                    }
                    echo "Hubo un error de código " . $file['error'] . " al subir el fichero";
                }
            }
        }
        ?>

        <form method = "post" enctype = "multipart/form-data">

            <h3>Escoge dos archivos</h3>

            <label for = "archivoSeleccionado1">Seleccione archivo: </label>
            <input type = "file" name = "archivoSeleccionado1" id = "archivoSeleccionado1" value = "" />

            <label for = "archivoSeleccionado2"><br/>Seleccione archivo: </label>
            <input type = "file" name = "archivoSeleccionado2" id = "archivoSeleccionado2" value = "" />
            <br/>
            <input type = 'submit' name = "Subir"/>
        </form>
    </body>
</html>