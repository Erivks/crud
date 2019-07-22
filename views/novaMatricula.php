<h1>Inserir nova matricula</h1>
<h2 id="titleAluno">Selecione o aluno</h2>

<form action="../processaMatricula.php" method="POST">
    <select name="selectAluno" id="selectAluno">
        <?php
            while($row = mysqli_fetch_array($queryAlunosResult)){
                echo '<option value="'. $row['id_aluno'] .'">'. $row['nome'] .'</option>';
            }
        ?>
    </select>
    <select name="selectCurso" id="selectCurso">
        <?php
            while($row = mysqli_fetch_array($queryCursosResult)){
                echo '<option value="'. $row['id_curso'] .'">'. $row['nome'] .'</option>';
            }
        ?>
    </select>
</form>