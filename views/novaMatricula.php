<?php if(!isset($_GET['editar'])) { ?>

    <h1>Inserir nova matricula</h1>
    <h2 id="titleAluno">Selecione o aluno</h2>

    <form action="../processaMatricula.php" method="POST">
        <select name="selectAluno" id="selectAluno">
            <option disable="disable">Selecione um aluno</option>
            <?php
                while($row = mysqli_fetch_array($queryAlunosResult)){
                    echo '<option value="'. $row['id_aluno'] .'">'. $row['nome'] .'</option>';
                }
            ?>
        </select>
        <select name="selectCurso" id="selectCurso">
            <option disable="disable">Selecione um curso</option>
            <?php
                while($row = mysqli_fetch_array($queryCursosResult)){
                    echo '<option value="'. $row['id_curso'] .'">'. $row['nome'] .'</option>';
                }
            ?>
        </select>
        <input type="submit" value="Matricular aluno">
    </form>

<?php } else { ?>
    <?php $editar = $_GET['editar']; ?>
    <?php 
        while($row = mysqli_fetch_array($queryAlunosCursosResult)){
            if($row['id_aluno_curso'] == $editar){
                $alunoCurso = $row;
            }
        }
    ?>
    <h2>Editar matricula</h2>
        <form action="../editaMatricula.php" method="POST">
            <select name="selectMatricula" id="selectMatricula">
                <option value="<?php echo $editar ?>" disable="disable" selected>
                    <?php echo $editar ?>
                </option>
            </select>
            <select name="selectAluno" id="selectAluno">
                <?php
                    while($row = mysqli_fetch_array($queryAlunosResult)){
                        if($row['nome'] == $alunoCurso['nome_aluno']){
                            echo '<option value="'.$row['id_aluno'].'" selected>'.$row['nome'].'</option>';
                        } else {
                            echo '<option value="'.$row['id_aluno'].'">'.$row['nome'].'</option>';
                        }
                    }
                ?>
            </select>
            <select name="selectCurso" id="selectCurso">
                <?php
                    while($row = mysqli_fetch_array($queryCursosResult)){
                        if($row['nome'] == $alunoCurso['nome_curso']){
                            echo '<option value="'.$row['id_curso'].'" selected>'.$row['nome'].'</option>';
                        } else {
                            echo '<option value="'.$row['id_curso'].'">'.$row['nome'].'</option>';
                        }
                    }
                ?>
            </select>
            <input type="submit" value="Editar matricula">
        </form>
<?php } ?>