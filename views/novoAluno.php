<?php if(!isset($_GET['editar'])){ ?>

    <h1>Inserir novo curso</h1>
    <form action="../processaAluno.php" method="POST" id="formNovoAluno">

        <label for="nomeAluno" class="novoAluno">Nome do aluno:</label>
        <input type="text" name="nomeAluno" id="nomeAluno" class="novoCurso inputNovo">

        <label for="dataAluno" class="novoCurso">Carga Horária</label>
        <input type="text" name="dataAluno" id="dataAluno" class="novoCurso inputNovo">
        
        <input type="submit" value="Enviar" class="novoCurso">
    </form>

<?php } else { ?>
    <?php while($row = mysqli_fetch_array($queryAlunosResult)){ ?>
        <?php if($row['id_aluno'] == $_GET['editar']){ ?>         
            <h1>Editar curso</h1>
            <form action="../editaAluno.php" method="POST" id="formNovoAluno">
                <input type="hidden" name="id_aluno" value="<?php echo $row['id_aluno']; ?>">

                <label for="nomeAluno" class="novoAluno">Nome do aluno:</label>
                <input type="text" value="<?php echo $row['nome']; ?>" name="nomeAluno" id="nomeAluno" class="novoCurso inputNovo">

                <label for="dataAluno" class="novoCurso">Carga Horária</label>
                <input type="text" value="<?php echo $row['data_nascimento']; ?>" name="dataAluno" id="dataAluno" class="novoCurso inputNovo">
                
                <input type="submit" value="Enviar" class="novoCurso">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>