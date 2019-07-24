<?php

include 'db.php';

$idMatricula = $_POST['selectMatricula'];
$idCurso = $_POST['selectCurso']; 
$idAluno = $_POST['selectAluno'];

$updateMatricula = "UPDATE Alunos_Cursos SET id_curso = $idCurso, id_aluno = $idAluno
                    WHERE id_aluno_curso = $idMatricula";

mysqli_query($connection, $updateMatricula);

header('location:index.php?page=matriculas');