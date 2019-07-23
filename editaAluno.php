<?php

include 'db.php';

$id_aluno = $_POST['id_aluno'];
$nomeAluno = $_POST['nome'];
$dataNascimento = $_POST['data_nascimento'];

$updateAluno = "UPDATE Alunos SET nome = $nomeAluno, data_nascimento = $dataNascimento
                WHERE id_aluno = $id_aluno;";

mysqli_query($connection, $updateAluno);

header('location:index.php?page=alunos');