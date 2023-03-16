<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // A partir del siguiente listado necesitamos crear una tabla que contenga la información de los empleados de los cuales su índice sea un numero impar. (opcional): Nombre y Apellido deben ir en la misma celda.
    $empleados = [
        [
            "Nombre" => "Marcelo",
            "Apellido" => "Velez",
            "Edad" => 25,
            "Area" => "Administración",
            "Correo" => "marceloVelez@hotmail.com",
        ],
        [
            "Nombre" => "Alberto",
            "Apellido" => "Unbertini",
            "Edad" => 36,
            "Area" => "RRHH",
            "Correo" => "albert.unbert@hotmail.com",
        ],
        [
            "Nombre" => "Isidora",
            "Apellido" => "Gutierrez",
            "Edad" => 33,
            "Area" => "Desarrollador",
            "Correo" => "isi_gutie@gmail.cl",
        ],
        [
            "Nombre" => "Sebastian",
            "Apellido" => "Jimenez",
            "Edad" => 21,
            "Area" => "No Asignada",
            "Correo" => "s.jimenez@gmail.cl",
        ],
        [
            "Nombre" => "Manuel",
            "Apellido" => "Osorio",
            "Edad" => 19,
            "Area" => "Desarrollador",
            "Correo" => "manu007@outlook.com",
        ],
        [
            "Nombre" => "Alonso",
            "Apellido" => "Villa",
            "Edad" => 47,
            "Area" => "Product Manager",
            "Correo" => "alvilla@hotmail.com",
        ]];

    $filtered = array();

    function testIndex($index)
    {
        return !($index % 2 === 0);
    }

    $filtered = array_filter($empleados, 'testIndex', ARRAY_FILTER_USE_KEY);
    ?>

    <table>
        <tr>
            <th>Nombre y apellido</th>
            <th>Edad</th>
            <th>Area</th>
            <th>Correo</th>
        </tr>
        <?php
        foreach ($filtered as $empleado) {
            echo '<tr>
                <td>' . $empleado['Nombre'] . ' ' . $empleado['Apellido'] . '</td>
                <td>' . $empleado['Edad'] . '</td>
                <td>' . $empleado['Area'] . '</td>
                <td>' . $empleado['Correo'] . '</td>
            </tr>';
        }
        ?>
    </table>

    <?php
    // <!-- 5. Crea una función llamada “cantidad_caracteres” que retorne el número de caracteres de un texto. -->
    function cantidad_caracteres($texto)
    {
        echo strlen($texto);
    }
    ?>
    <?php
    // 4. Dado el siguiente array de objetos obtener los datos de la persona con la mayor edad encontrada.
    
    $personas = array("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);
    $edad_maxima = 0;
    $datos = array();
    foreach ($personas as $persona => $edad) {
        if ($edad_maxima < $edad) {
            $edad_maxima = $edad;
            $datos = [$persona => $edad];
        }
    }
    print_r($datos);
    ?>


</body>

</html>
