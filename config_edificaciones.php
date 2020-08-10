<?php

class ProductoEdificacion
{
    public $nombre;
    public $url_foto;
    public $propiedades = array();

    function __construct($nombre, $url_foto, $propiedades)
    {
        $this->nombre = $nombre;
        $this->url_foto = $url_foto;
        $this->propiedades = $propiedades;
    }

    function set_nombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function get_nombre()
    {
        return $this->nombre;
    }

    function set_url_foto($url_foto)
    {
        $this->url_foto = $url_foto;
    }

    function get_url_foto()
    {
        return $this->url_foto;
    }

    function set_propiedades($propiedades)
    {
        $this->propiedades = $propiedades;
    }

    function get_propiedades()
    {
        return $this->propiedades;
    }

    function __toString(){
        echo $this->nombre;
        echo $this->url_foto;
        echo $this->toStringPropiedades($this->propiedades);
    }

    function toStringPropiedades($propiedades){
    
        foreach ($propiedades as $propiedad) {
            echo $propiedad;
        }

    }
}



$VIGUETA11 = new ProductoEdificacion(
    "Vigueta 11",
    "https://www.velosa.com.mx/wp-content/uploads/2020/07/CA-V11-1024x576.png",

    array(
        'Azotea 0-3mts', 'Azotea 3-5mts', 'Azotea 5-7mts',
        'Casa Habitacion 0-3mts', 'Casa Habitacion 3-5mts', 'Casa Habitacion 5-7mts',
        'Departamentos 0-3mts', 'Departamentos 3-5mts', 'Departamentos 5-7mts',
        'Hoteles 0-3mts', 'Hoteles 3-5mts', 'Hoteles 5-7mts',
        'Oficinas 0-3mts', 'Oficinas 3-5mts',
        'Estacionamientos 0-3mts', 'Estacionamientos 3-5mts',
        'Aulas 0-3mts', 'Aulas 3-5mts',
        'Gimnasios 0-3mts', 'Gimnasios 3-5mts',
        'Restaurantes 0-3mts', 'Restaurantes 3-5mts',
        'Bodegas 0-3mts', 'Bodegas 3-5mts',
        'Estadios 0-3mts', 'Estadios 3-5mts'

    )
);

$VIGUETA16 = new ProductoEdificacion(
    "Vigueta 16",
    "https://www.velosa.com.mx/wp-content/uploads/2020/07/CA-PO-V16-1024x576.png",

    array(
        'Oficinas 5-7mts',
        'Estacionamientos 5-7mts',
        'Aulas 5-7mts',
        'Gimnasios 5-7mts',
        'Restaurantes 5-7mts',
        'Bodegas 5-7mts'
    )
);

$VIGUETA21 = new ProductoEdificacion(
    "Vigueta 21",
    "https://www.velosa.com.mx/wp-content/uploads/2020/07/CA-PO-V21-1024x576.png",

    array(
        'Azotea 7-9mts',
        'Casa Habitacion 7-9mts',
        'Departamentos 7-9mts',
        'Hoteles 7-9mts',
        'Estadios 5-7mts'
    )
);

$VIGUETAT21 = new ProductoEdificacion(
    "Vigueta Tubular 21",
    "https://www.velosa.com.mx/wp-content/uploads/2020/07/CA-PO-VT21-1024x576.png",

    array(
        'Azotea 9-11mts',
        'Casa Habitacion 9-11mts',
        'Departamentos 9-11mts',
        'Hoteles 9-11mts',
        'Oficinas 7-9mts',
        'Estacionamientos 7-9mts',
        'Aulas 7-9mts',
        'Gimnasios 7-9mts',
        'Restaurantes 7-9mts',
        'Bodegas 7-9mts',
        'Estadios 7-9mts',

    )
);

$LOSAALVEOLAR10 = new ProductoEdificacion(
    "Losa Alveolar 10",
    "https://www.velosa.com.mx/wp-content/uploads/2020/07/LA-10CM-1024x576.png",

    array(
        'Azotea 0-3mts', 'Azotea 3-5mts',
        'Casa Habitacion 0-3mts', 'Casa Habitacion 3-5mts',
        'Departamentos 0-3mts', 'Departamentos 3-5mts',
        'Hoteles 0-3mts', 'Hoteles 3-5mts',
        'Oficinas 0-3mts', 'Oficinas 3-5mts',
        'Estacionamientos 0-3mts', 'Estacionamientos 3-5mts',
        'Aulas 0-3mts', 'Aulas 3-5mts',
        'Gimnasios 0-3mts', 'Gimnasios 3-5mts',
        'Restaurantes 0-3mts', 'Restaurantes 3-5mts',
        'Bodegas 0-3mts', 'Bodegas 3-5mts',
        'Estadios 0-3mts', 'Estadios 3-5mts'

    )
);


$LOSAALVEOLAR15 = new ProductoEdificacion(
    "Losa Alveolar 15",
    "https://www.velosa.com.mx/wp-content/uploads/2020/07/LA-15CM-1024x576.png",
    array(
        'Azotea 5-7mts', 'Azotea 7-9mts',
        'Casa Habitacion 5-7mts',
        'Departamentos 5-7mts',
        'Hoteles 5-7mts',
        'Oficinas 5-7mts',
        'Estacionamientos 5-7mts',
        'Aulas 5-7mts',
        'Gimnasios 5-7mts',
        'Restaurantes 5-7mts',
        'Bodegas 5-7mts',
        'Estadios 5-7mts',
    )
);


$LOSAALVEOLAR20 = new ProductoEdificacion(
    "Losa Alveolar 20",
    "https://www.velosa.com.mx/wp-content/uploads/2020/07/LA-20CM-1024x576.png",

    array(
        'Azotea 9-11mts',
        'Casa Habitacion 7-9mts',
        'Departamentos 7-9mts',
        'Hoteles 7-9mts',
        'Oficinas 7-9mts',
        'Estacionamientos 7-9mts',
        'Aulas 7-9mts',
        'Gimnasios 7-9mts',
        'Restaurantes 7-9mts',
        'Bodegas 7-9mts',
        'Estadios 7-9mts',

    )
);

$LOSAALVEOLAR25 = new ProductoEdificacion(
    "Losa Alveolar 25",
    "https://www.velosa.com.mx/wp-content/uploads/2020/07/LA-25CM-1024x576.png",

    array(
        'Azotea 11-13mts',
        'Casa Habitacion 9-11mts',
        'Departamentos 9-11mts',
        'Hoteles 9-11mts',
        'Oficinas 9-11mts',
        'Estacionamientos 9-11mts',
        'Aulas 9-11mts',
        'Gimnasios 9-11mts',
        'Restaurantes 9-11mts',
        'Bodegas 9-11mts',
        'Estadios 9-11mts',
    )
);


$LOSAALVEOLAR30 = new ProductoEdificacion(
    "Losa Alveolar 30",
    "https://www.velosa.com.mx/wp-content/uploads/2020/07/LA-30CM-1024x576.png",

    array(
        'Casa Habitacion 11-13mts',
        'Departamentos 11-13mts',
        'Hoteles 11-13mts',
        'Oficinas 11-13mts',
        'Estacionamientos 11-13mts',
        'Aulas 11-13mts',
        'Gimnasios 11-13mts',
        'Restaurantes 11-13mts',
        'Bodegas 11-13mts',
        'Estadios 11-13mts',
    )
);



function getAllProducts(){

    $productos = [];

    $v11 = $GLOBALS['VIGUETA11'];
    $v16 = $GLOBALS['VIGUETA16'];
    $v21 = $GLOBALS['VIGUETA21'];
    $vt21 = $GLOBALS['VIGUETAT21'];
    $losa10 = $GLOBALS['LOSAALVEOLAR10'];
    $losa15 = $GLOBALS['LOSAALVEOLAR15'];
    $losa20 = $GLOBALS['LOSAALVEOLAR20'];
    $losa25 = $GLOBALS['LOSAALVEOLAR25'];
    $losa30 = $GLOBALS['LOSAALVEOLAR30'];

    array_push($productos,$v11,$v16,$v21,$vt21,$losa10,$losa15,$losa20,$losa25,$losa30);

    return $productos;
}


function getProductoPorPropiedad($propiedad){

    $productos = [];

    $v11 = $GLOBALS['VIGUETA11'];
    $v16 = $GLOBALS['VIGUETA16'];
    $v21 = $GLOBALS['VIGUETA21'];
    $vt21 = $GLOBALS['VIGUETAT21'];
    $losa10 = $GLOBALS['LOSAALVEOLAR10'];
    $losa15 = $GLOBALS['LOSAALVEOLAR15'];
    $losa20 = $GLOBALS['LOSAALVEOLAR20'];
    $losa25 = $GLOBALS['LOSAALVEOLAR25'];
    $losa30 = $GLOBALS['LOSAALVEOLAR30'];


    if(in_array($propiedad, $v11->get_propiedades() ) ){
        
        array_push($productos,$v11);
        print('Added V11');
    }
    
    if(in_array($propiedad,$v16->get_propiedades())){
        array_push($productos, $v16);
        print('Added V16');

    }

    if(in_array($propiedad, $v21->get_propiedades())){
        array_push($productos,$v21);
        print('Added V21');

    }

    if(in_array($propiedad, $vt21->get_propiedades() )){
        array_push($productos, $vt21);
        print('Added VT21');

    }

    if(in_array($propiedad, $losa10->get_propiedades())){
        array_push($productos, $losa10);
        print('Added Losa10');

    }

    if(in_array($propiedad, $losa15->get_propiedades())){
        array_push($productos, $losa15);
        print('Added Losa15');

    }

    if(in_array($propiedad, $losa20->get_propiedades())){
        array_push($productos, $losa20);
        print('Added Losa20');

    }

    if(in_array($propiedad, $losa25->get_propiedades())){
        array_push($productos, $losa25);
        print('Added Losa25');

    }

    if(in_array($propiedad, $losa30->get_propiedades())){
        array_push($productos, $losa30);
        print('Added Losa30');

    }
   







}
