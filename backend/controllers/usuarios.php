<?php 

// login user
$app->post('/login', function (){

    $usr_usuario     =$_REQUEST['usuario'];
    $usr_password  =$_REQUEST['password'];

    global $db;
    $q     = "SELECT * FROM tb_usuarios WHERE usr_usuario = '$usr_usuario' AND usr_password = '$usr_password'";
    $data = $db->get_results($q);

    if ($data < 1) {
        $data = array('message' =>  'Login incorrecto');
    }

    echo json_encode($data);

});
