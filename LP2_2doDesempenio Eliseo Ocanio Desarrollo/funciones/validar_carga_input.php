<?php 
function validar_input(){
    $vMensaje='';
    if (empty($_POST['pacientes']) || empty($_POST['sesiones']) || empty($_POST['fecha'])  ){
        $vMensaje.='<i data-feather="alert-circle"></i>Debe completar todos los datos requeridos.';        
    }
    
    return $vMensaje;
}


?>