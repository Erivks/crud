<?php
 
include 'db.php';
 
$nomeCurso = $_POST['nomeCurso'];
$cargaHorariaCurso = $_POST['cargaHorariaCurso'];
 
$inserirCurso = "INSERT INTO Cursos (nome, carga_horária) VALUES ('$nomeCurso', $cargaHorariaCurso);";
mysqli_query($connection, $inserirCurso);
 
header('location:index.php?page=cursos');