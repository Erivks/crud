<?php 

$server = "localhost";
$user = "id10191281_admin";
$password = "admin";
$database = "id10191281_curso";

$connection = mysqli_connect($server, $user, $password, $database);

$queryCurso = 'SELECT * FROM Cursos'; 
$queryCursosResult = mysqli_query($connection, $queryCurso);

$queryAlunos = "SELECT nome, DATE_FORMAT(data_nascimento, '%d/%m/%Y') AS 'data_nascimento' FROM Alunos";
$queryAlunosResult = mysqli_query($connection, $queryAlunos);

$queryAlunosCursos = 'SELECT a.nome AS "nome_aluno", c.nome AS "nome_curso" FROM Alunos_Cursos AS ac
                        INNER JOIN Alunos AS a ON ac.id_aluno = a.id_aluno
                        INNER JOIN Cursos AS c ON ac.id_curso = c.id_curso';

$queryAlunosCursosResult = mysqli_query($connection, $queryAlunosCursos);