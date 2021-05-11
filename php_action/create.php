<?php

require_once "connection.php";

if (isset($_POST['botaocadastrar'])) {

    $name = $_POST['name'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if ($name == "" || $user == "" ||  $email == "" || $pass == "") {

        echo "<a href='../index.php'>Home</a>";
        echo "<br/>";
        echo "Todos os campos devem ser preenchidos. Preencha os campos vazios!";
        echo "<br/>";
        echo "<a href='../register.php'>Voltar</a>";



        
    
    } else {

        $sql = "INSERT INTO login (name, username, email, password) VALUES ('$name', '$user', '$email', md5('$pass'))";
        mysqli_query($connect, $sql);
        echo "<a href='../index.php'>Home</a>";
        echo "<br/>";
        echo "Registrado com sucesso";
        echo "<br/>";
        echo "<a href='../login.php'>Login</a>";
        
    }
}
