<?php
class Productos extends CI_Controller {
    function index(){
        $datos = array(
        'titulo' => 'Pagina de prueba',
        'descripcion' => 'Esta es la descripción de esta página, un poco más larga.',
        'cuerpo' => 'El cuerpo de la página probablemente será un texto muy largo...<p>Con varios párrafos</p>'
        ); 
        $this->load->view('hola', $datos);
    }
    
    function ordenadores($marca=null, $modelo=null){ 
        if (is_null($marca) && is_null($modelo)){
            echo 'Aqui se muestran los productos de ordenadores'; 
        }elseif(is_null($modelo)){
            echo 'Mostrando ordenadores de marca ' . $marca; 
        }else{
            echo 'Mostrando ordenadores de marca ' . $marca . ' y modelo ' . $modelo; 
        }
    }
    
    function monitores(){
     echo 'Aquí se muestran los productos de monitores';
    }
    
    function perifericos($modelo=null){
        if (!is_null($modelo))
         echo 'Estás viendo el periferico ' . $modelo;
        else
            echo 'No has introducido un modelo';
    } 
}
?>