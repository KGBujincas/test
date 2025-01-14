<?php
//conexao com banco de dados
include_once 'db_connect.php';


if(isset($_POST['cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome'] );
    $email = mysqli_escape_string($connect, $_POST['email']);
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

//inserindo os dados na base de dados
    $sql ="INSERT INTO clientes (nome, email, login, senha) VALUES ('$nome' , '$email', '$login', '$senha')";

//verificando se o camando eu certo
if(mysqli_query($connect, $sql)):
    echo "cadastrado com sucesso !";
    header('Location: ../index.php');
else:
    echo  "erro ao cadastrar ! ";
    header('Locatio: ../index.php');
endif;
endif;
?>
