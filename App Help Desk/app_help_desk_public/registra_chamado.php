<?  
    session_start();
    
    /*echo'<pre>';
    print_r( $_POST);
    echo'<pre/>';
    */
    header('Location: consultar_chamado.php');
    

    //Trabalhando na montagem do texto
    $titulo = str_replace('#','-',$_POST['titulo']);
    $categoria = str_replace('#','-',$_POST['categoria']);
    $descricao = str_replace('#','-',$_POST['descricao']);
 
    //implode('#,$_POST) //transforma um array em string

    //Post vem em formato de array, então é necessário convertê-lo em string
    $texto = $_SESSION['id'] . '#' . $titulo. '#' . $categoria. '#' . $descricao . PHP_EOL;//EOL = Constante php end off line, armazena o caractere de quebra de linha de acordo com o sistema operacional onde está rodando o php

     //abrindo o arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.txt','a');//1º parametro = nome do arquivo e extensão | 2ª parametro = abrir, ler etc.
    
    //escrevendo no arquivo
    fwrite($arquivo,$texto);// 1ª par = referencia do arquivo q abrimos | 2º par = o que quero escrever

    //fechando arquivo
    fclose($arquivo);
    
    //echo $texto;

?>