<?
    session_start();

    /*
    echo'<pre>';
    print_r($_SESSION);
    echo'<pre/>';
    //remover indices do array de sessão
    //unset()

    //destruir variável de sessão
    //session_destry()

    unset($_SESSION['x']);//remove o índice apenas se existir

    echo'<pre>';
    print_r($_SESSION);
    echo'<pre/>';

    session_destroy();//será destruída, no entato, ainda vai aparecer enquanto não for atualizada, por isso normalmente é bom forcar um redirecionamento
    
    echo'<pre>';
    print_r($_SESSION);
    echo'<pre/>';
    */

    session_destroy();
    header("Location: index.php");

?>