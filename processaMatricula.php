<?php 

include 'db.php';

$id_aluno = $_POST['selectAluno'];
$id_curso = $_POST['selectCurso'];

$inserirMatricula = "INSERT INTO Alunos_Cursos (id_aluno, id_curso) VALUES ('$id_aluno', '$id_curso');";
mysqli_query($connection, $inserirMatricula);

header("location:index.php?page=matriculas");