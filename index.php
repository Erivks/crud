<?php

include 'db.php';
include 'header.php';

if(isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = 'home';
}

switch ($page) {
    case 'cursos':
        include 'views/cursos.php';
        break;
    case 'matriculas':
        include 'views/matriculas.php';
        break;
    case 'novoCurso':
        include 'views/novoCurso.php';
        break;
    case 'novoAluno':
        include 'views/novoAluno.php';
    case 'alunos':
        include 'views/alunos.php';
        break;
    default:
        include 'views/home.php';
        break;
}


include 'footer.php';