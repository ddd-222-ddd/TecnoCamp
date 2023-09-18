<?php
include("../conection.php");

$nome= $_POST['nome'];
$email= $_POST['email'];

$sql = "INSERT INTO users (nome, email) VALUES ('$nome', '$email')";
$conn -> query($sql);

$conn -> close();

?> 