<?php
    require 'config/config.php';
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main class="container">

            <h1>Panel de administración de regiones</h1>

            <table class="table table-borderless table-hover table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Destino (arpt)</th>
                    <th>Región</th>
                    <th>Precio</th>
                    <th>Totales</th>
                    <th>Disponibles</th>
                    <th colspan="2">
                        <a href="" class="btn btn-outline-success">
                            <i class="fas fa-plus mr-2"></i>
                            Agregar
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
<?php

?>
                <tr>
                    <td>1</td>
                    <td>Destino </td>
                    <td>región </td>
                    <td>$precio </td>
                    <td>asientos</td>
                    <td>disponibles</td>
                    <td>
                        <a href="" class="btn btn-outline-warning">
                            <i class="fas fa-pen mr-2"></i>
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-danger">
                            <i class="far fa-trash-alt mr-2"></i>
                            Eliminar
                        </a>
                    </td>
                </tr>
<?php

?>                
                </tbody>

            </table>

        </main>

<?php
    include 'includes/footer.php';
?>