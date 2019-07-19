<?php 

include 'db.php';

$nomeAluno = $_POST['nomeAluno'];
$dataNascimentoAluno = $_POST['dataAluno'];

$date = date_create_from_format('d/m/Y', $dataNascimentoAluno);
$dataAluno = date_format($date, 'Y-m-d');

$inserirAluno = "INSERT INTO Alunos (nome, data_nascimento) VALUES ('$nomeAluno', '$dataAluno');";
mysqli_query($connection, $inserirAluno);

header('location:index.php?page=alunos');