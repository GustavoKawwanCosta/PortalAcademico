<?php

$usuario = 'root';
$senha = '';
$database ='formulario';
$host ='localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli-> error) {
    die("falha ao conectar ao banco de dados: ". $mysqli->error);
}

//
//
<?php
    $Host ='localhost';
    $Usuario = 'root';
    $Senha = '';
    $Nome ='formulario';
    
    $conexao = new mysqli($Host, $Usuario, $Senha, $Nome);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "Conexão efetuada com sucesso";
    //}

?>