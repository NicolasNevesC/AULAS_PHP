<?php

    //importando o arquivo de conexão com BD
    require("connect.php");

    //obtendo os valores dos campos
    $descricao = $_POST['c_descricao'];
    $quantidade = $_POST['c_quantidade'];
    $autor = $_POST['c_autor'];
    $tipo_capa = $_POST['tipo_capa'];
    $categoria_livro = $_POST['categoria_livro'];
    //armazenando a SQL que esta na variavel
    $sql = "INSERT INTO `item`(`descricao`,`quantidade`,`autor`,`tipo_capa`,`categoria`) VALUES ('$descricao','$quantidade','$autor','$tipo_capa','$categoria_livro')";

    //executado a SQL que esta a variavel
    $resultado = mysqli_query($conexao, $sql);

    //imprimindo a tela
    echo "livro inserido com sucesso";

?>
