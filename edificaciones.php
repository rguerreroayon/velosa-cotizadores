<?php

require 'config_edificaciones.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizador para Edificaciones - Versión Beta 1.0</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <h3 class="text-center text-light bg-info p-2">Filtro de Edificaciones - Versión Beta 1.0</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <h5>
                    Filtro para productos:
                </h5>
                <hr>
                <h6 class="text-info">Tipo de Edificación:</h6>
                </br>
                <ul class="list-group-productos text-justify">
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="azotea" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-productos" id="edificacion" value="Azotea">
                                Azotea
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="casa_habitacion" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-productos" id="edificacion" value="Casa Habitacion">
                                Casa Habitación
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="departamentos" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-productos" id="edificacion" value="Departamentos">
                                Departamentos
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="hoteles" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-productos" id="edificacion" value="Hoteles">
                                Hoteles
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="oficinas" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-productos" id="edificacion" value="Oficinas">
                                Oficinas
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="estacionamientos" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-productos" id="edificacion" value="Estacionamientos">
                                Estacionamientos
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="aulas" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-productos" id="edificacion" value="Aulas">
                                Aulas
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="gimnasios" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-productos" id="edificacion" value="Gimnasios">
                                Gimnasios
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="restaurantes" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-productos" id="edificacion" value="Restaurantes">
                                Restaurantes
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="bodegas" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-productos" id="edificacion" value="Bodegas">
                                Bodegas
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="estadios" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-productos" id="edificacion" value="Estadios">
                                Estadios
                            </label>
                        </div>
                    </li>

                </ul>
                <h6 class="text-info">Tipo de Claro:</h6>

                <ul class="list-group-claros">
                    <li class="list-group-item">
                        <div class="form-check">
                            <label for="0-3mts" class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-claros" id="claro" value="0-3mts">
                                0 - 3 metros
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-claros" id="claro" value="3-5mts">
                                3 - 5 metros
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-claros" id="claro" value="5-7mts">
                                5 - 7 metros
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-claros" id="claro" value="7-9mts">
                                7 - 9 metros
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-claros" id="claro" value="9-11mts">
                                9 - 11 metros
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input product_check" name="grupo-claros" id="claro" value="11-13mts">
                                11 - 13 + metros
                            </label>
                        </div>
                    </li>

                </ul>


            </div>
            <div class="col-lg-9">

                <h5 class="text-center">Productos</h5>
                <div>
                <?php

                $productos = getAllProducts();

                foreach ($productos as $producto) {

                    echo '<div class="col-md-3 mb-2">';
                    echo '<div class="card text-center" style="width:18rem;">';
                    echo '<div class="card border-secondary">';
                    echo '<img class="card-img-top" src="' . $producto->url_foto . '" alt="Card image cap">';

                    echo '<div class="card-body">';

                    echo '<h5 class="card-title text-center">' . $producto->nombre . '</h5>';
                    echo '<p class"card-text text-center">' . $producto->peso .'</p>';
                    echo '<p class"card-text text-center">' . $producto->peralte .'</p>';
                    echo '<p class"card-text text-center">' . $producto->cimbra .'</p>';

                    echo '<a href="#" class="btn btn-primary">Go somewhere</a>';
                    
                    
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
                </div>

            </div>
        </div>

    </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function() {



        });
    </script>
</body>

</html>