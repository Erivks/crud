<?php 

include 'db.php';

$id_aluno = $_GET['id_aluno'];

$queryDeleteAluno = "DELETE FROM Alunos WHERE id_aluno = $id_aluno";

mysqli_query($connection, $queryDeleteAluno);

header('location:index.php?page=alunos');