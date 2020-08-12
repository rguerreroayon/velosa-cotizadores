<?php

class ProductoEdificacion{
    public $nombre;
    public $url_foto;
    public $url_redireccion;
    public $peso;
    public $peralte;
    public $cimbra;
    public $propiedades = array();

    function __construct($nombre, $url_foto, $propiedades,$peso,$peralte,$cimbra,$url_redireccion)
    {
        $this->nombre = $nombre;
        $this->url_foto = $url_foto;
        $this->propiedades = $propiedades;
        $this->peso = $peso;
        $this->peralte = $peralte;
        $this->cimbra = $cimbra;
        $this->url_redireccion = $url_redireccion;
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

    ),
    "158 kg x M2",
    "11 centimetros",
    "Reduce Cimbra 90%",
    "https://www.velosa.com.mx/portfolio/viguetas-pretensadas/"
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
    ),
    "172 kg x M2",
    "16 centimetros",
    "Reduce Cimbra 90%",
    "https://www.velosa.com.mx/portfolio/viguetas-pretensadas/"
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
    ),
    "197 kg x M2",
    "21 centimetros",
    "Reduce Cimbra 90%",
    "https://www.velosa.com.mx/portfolio/viguetas-pretensadas/"
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

    ),
    "228 kg x M2",
    "16 centimetros",
    "Reduce Cimbra 90%",
    "https://www.velosa.com.mx/portfolio/vigueta-tubular/"
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
        'Estadios 0-3mts', 'Estadios 3-5mts',
        "https://www.velosa.com.mx/portfolio/losa-alveolar/"

    ),
    "215 kg x M2",
    "10 centimetros",
    "No Requiere Cimbra",
    "https://www.velosa.com.mx/portfolio/losa-alveolar/"
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
    ),
    "280 kg x M2",
    "15 centimetros",
    "No Requiere Cimbra",
    "https://www.velosa.com.mx/portfolio/losa-alveolar/"
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

    ),
    "350 kg x M2",
    "20 centimetros",
    "No Requiere Cimbra",
    "https://www.velosa.com.mx/portfolio/losa-alveolar/"
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
    ),
    "410 kg x M2",
    "25 centimetros",
    "No Requiere Cimbra",
    "https://www.velosa.com.mx/portfolio/losa-alveolar/"
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
    ),
    "460 kg x M2",
    "30 centimetros",
    "No Requiere Cimbra",
    "https://www.velosa.com.mx/portfolio/losa-alveolar/"
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

    if($propiedad == "" || $propiedad == null){
        return getAllProducts();
    }

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
    }
    
    if(in_array($propiedad,$v16->get_propiedades())){
        array_push($productos, $v16);

    }

    if(in_array($propiedad, $v21->get_propiedades())){
        array_push($productos,$v21);

    }

    if(in_array($propiedad, $vt21->get_propiedades() )){
        array_push($productos, $vt21);

    }

    if(in_array($propiedad, $losa10->get_propiedades())){
        array_push($productos, $losa10);

    }

    if(in_array($propiedad, $losa15->get_propiedades())){
        array_push($productos, $losa15);

    }

    if(in_array($propiedad, $losa20->get_propiedades())){
        array_push($productos, $losa20);

    }

    if(in_array($propiedad, $losa25->get_propiedades())){
        array_push($productos, $losa25);

    }

    if(in_array($propiedad, $losa30->get_propiedades())){
        array_push($productos, $losa30);

    }
   

    return $productos;






}

