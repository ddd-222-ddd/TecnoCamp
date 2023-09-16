<?php
$servename = "localhost";
$username = "dba";
$password = "Diego@2022";
$database = "alunos";

$conn = new mysqli($servname, $username, $password, $database);
if($conn -> connect_error){
    echo "Desconectado erro: " . $conn -> connect_error;
}
?>