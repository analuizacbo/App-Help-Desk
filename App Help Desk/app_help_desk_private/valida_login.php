<?php
    
    session_start();
    /*print_r($_SESSION);
    echo '<hr/>';
    echo $_SESSION['y']. '<br/>';

    $_SESSION['x'] = 'Oi sou valor de sessão';
    */
    //Varial verifica se autenticacao foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;

    $perfi = [1 => 'Admin', 2 => 'User'];
    $usuario_perfil_id = null;

    //Usuarios do sistema como ainda não irá usar um banco de dados colocara dentro de um array
    $usuarios = [
        array('id' => 1,'email' => 'admin@teste.com.br','senha' => '123', 'perfil_id' => 1),
        array('id' => 2,'email' => 'user@teste.com.br','senha' => '123', 'perfil_id' => 1),
        array('id' => 3,'email' => 'jose@teste.com.br','senha' => '123', 'perfil_id' => 2),
        array('id' => 4,'email' => 'maria@teste.com.br','senha' => '123', 'perfil_id' => 2),
    ];

    foreach($usuarios as $user){//user é o array dentro do array externo
       /* 
        print_r($user);
        echo '<hr/>';*/
        /*echo'Usário app: '. $user['email']. ' | '. $user['senha'];

        echo '<br/>';

        echo'Usuário Form: '. $_POST['email']. ' | '. $_POST['senha'];
        */
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            //print_r($user);
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado){
        echo 'Usuário Autenticado!';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        //$_SESSION['x'] = 'um valor';
        //$_SESSION['y'] = 'outro valor';
        header('Location: home.php');//direcionando o usuário autenticado direto para pag home
    }else{
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NÃO';
    }
    

    /*
    echo '<pre>';
    print_r($usuarios);
    echo'<pre/>';
    */


    //echo 'Oi estamos aqui';
    /*print_r($_GET);

    echo'<br/>';

    echo $_GET['email'];
    echo'<br/>';
    echo $_GET['senha'];*/

    //Quando o method é modificado para post
   /* print_r($_POST);
    echo'<br/>';

    echo $_POST['email'];
    echo'<br/>';
    echo $_POST['senha'];
    */

?>