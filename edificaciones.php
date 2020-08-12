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
    <link rel="stylesheet" type="text/css" href="style.css">
    


    <script>
        function onClickRadio() {
            let tipoEdificacion = document.getElementsByName('edificacion');
            if (tipoEdificacion[0].checked) {
                console.log('Azotea')

                <?php ?>
            }

        }
    </script>


</head>

<body>
    <div class="container-fluid">
        <?php





        ?>
        <div class="row">
            <div class="col-lg-2">
                <hr>
                <a href="https://www.velosa.com.mx/cotizador/" class="btn btn-primary"> Volver </a>

                <hr>
                <h6 class="text-info" style="">Tipo de Edificación:</h6>
                </br>
                <form action="edificaciones.php">
                    <ul class="list-group-productos text-justify" style="padding-left:0px">
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="azotea" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="azotea" name="edificacion" value="Azotea" checked>

                                    Azotea
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="casa_habitacion" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="casa-habitacion" name="edificacion" value="Casa Habitacion">
                                    Casa Habitación
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="departamentos" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="departamentos" name="edificacion" value="Departamentos">
                                    Departamentos
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="hoteles" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="hoteles" name="edificacion" value="Hoteles">
                                    Hoteles
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="oficinas" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="oficinas" name="edificacion" value="Oficinas">
                                    Oficinas
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="estacionamientos" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="estacionamientos" name="edificacion" value="Estacionamientos">
                                    Estacionamientos
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="aulas" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="aulas" name="edificacion" value="Aulas">
                                    Aulas
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="gimnasios" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="gimnasios" name="edificacion" value="Gimnasios">
                                    Gimnasios
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="restaurantes" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="restaurantes" name="edificacion" value="Restaurantes">
                                    Restaurantes
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="bodegas" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="bodegas" name="edificacion" value="Bodegas">
                                    Bodegas
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="estadios" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="estadios" name="edificacion" value="Estadios">
                                    Estadios
                                </label>
                            </div>
                        </li>

                    </ul>

                    <h6 class="text-info">Tipo de Claro:</h6>

                    <ul class="list-group-claros" style="padding-left:0px;">
                        <li class="list-group-item">
                            <div class="form-check">
                                <label for="0-3mts" class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="0-3mts" name="claro-requerido" id="claro" value="0-3mts" checked>
                                    0 - 3 metros
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="3-5mts" name="claro-requerido" id="claro" value="3-5mts">
                                    3 - 5 metros
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="5-7mts" name="claro-requerido" id="claro" value="5-7mts">
                                    5 - 7 metros
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="7-9mts" name="claro-requerido" id="claro" value="7-9mts">
                                    7 - 9 metros
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="9-11mts" name="claro-requerido" id="claro" value="9-11mts">
                                    9 - 11 metros
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input product_check" id="11-13mts" name="claro-requerido" id="claro" value="11-13mts">
                                    11 - 13 + metros
                                </label>
                            </div>
                        </li>

                    </ul>

                    <input type="submit" class="btn btn-block btn-warning " value="Filtrar" onsubmit="" name="botonSubmit">
                </form>


            </div>
            <div class="col-lg-9" style="padding-top:135px">

                <div class="row" id="resultado" ">

                <?php


                if (isset($_GET['edificacion']) && isset($_GET['claro-requerido'])) {

                    $propiedad =  $_GET['edificacion'] . ' ' .  $_GET['claro-requerido'];

                    $productos = getProductoPorPropiedad($propiedad);


                }else{

                    $productos = getAllProducts();
                }



                foreach ($productos as $producto) {

                    //echo '<div class="col-md-3 mb-2">';
                    echo '<div class=".col-6 .col-md-4" style="padding:20px">';
                    echo '<div class="card-deck">';
                    echo '<div class="card text-center" style="width:18rem;">';
                    echo '<img class="card-img-top" src="' . $producto->url_foto . '" alt="Card image cap">';

                    echo '<div class="card-body">';

                    echo '<h5 class="card-title text-center">' . $producto->nombre . '</h5>';
                    echo '<p class"card-text text-center " style="margin:2px">' . $producto->peso . '</p>';
                    echo '<p class"card-text text-center " style="margin:2px">' . $producto->peralte . '</p>';
                    echo '<p class"card-text text-center " style="margin:2px">' . $producto->cimbra . '</p>';

                    echo '<a target="_blank" href=" ' . $producto->url_redireccion . '" class="btn btn-primary" style="margin-top:15px"> Ver Producto  </a>';


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
    
    </html>
