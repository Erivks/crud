<?php

include 'db.php';

$id_curso = $_GET['id_curso'];

$queryDeletaCurso = "DELETE FROM Cursos WHERE id_curso = $id_curso";

mysqli_query($connection, $queryDeletaCurso);

header('location:index.php?page=cursos');