<?php

//Sessao
session_start();

//Conexao
require_once "connection.php";

$user = $_POST['username'];
$pass = $_POST['password'];

if ($user == "" || $pass == "") {

    echo "<a href='../index.php'>Home</a>";
    echo "<br/>";
    echo "Todos os campos devem ser preenchidos. Preencha os campos vazios!";
    echo "<br/>";
    echo "<a href='../login.php'>Voltar</a>";
} else {

    $sql = "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')";

    $result = mysqli_query($connect, $sql) or die("Could not execute the select query.");
    $row = mysqli_fetch_assoc($result);

    if (is_array($row) && !empty($row)) {

        $validuser = $row['username'];
        $_SESSION['valid'] = $validuser;
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
    } else {

        echo "<a href='../index.php'>Home</a>";
        echo "<br/>";
        echo "Nome de usuário e/ou senha inválido/s.";
        echo "<br/>";
        echo "<a href='../login.php'>Voltar</a>";
    }

    if (isset($_SESSION['valid'])) {
        header('Location: ../index.php');
    }
}
