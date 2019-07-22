<?php

include 'db.php';

$id_matricula = $_GET['id_matricula'];

$queryDeletar = "DELETE FROM Alunos_Cursos WHERE id_aluno_curso = $id_matricula";
mysqli_query($connection, $queryDeletar);

header('location:index.php?page=matriculas');