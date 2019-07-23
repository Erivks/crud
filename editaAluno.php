<?php

include 'db.php';

$id_aluno = $_POST['id_aluno'];
$nomeAluno = $_POST['nomeAluno'];
$dataNascimento = $_POST['dataAluno'];

$date = date_create_from_format('d/m/Y', $dataNascimento);
$dataAluno = date_format($date, 'Y-m-d');

$updateAluno = "UPDATE Alunos SET nome = '$nomeAluno', data_nascimento = '$dataAluno'
                WHERE id_aluno = $id_aluno;";

mysqli_query($connection, $updateAluno);

header('location:index.php?page=alunos');