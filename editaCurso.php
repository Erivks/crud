<?php

include 'db.php';

$idCurso = $_POST['idCurso'];
$nomeCurso = $_POST['nomeCurso'];
$cargaHorariaCurso = $_POST['cargaHorariaCurso'];

$updateCurso = "UPDATE Cursos SET nome = '$nomeCurso', carga_horaria = $cargaHorariaCurso
                WHERE id_curso = $idCurso";

mysqli_query($connection, $updateCurso);

header('location:index.php?page=cursos');