<?php if(!isset($_GET['editar'])) { ?> 

    <h1>Inserir novo curso</h1>
    <form action="../processaCurso.php" method="POST" id="formNovoCurso">

        <label for="nomeCurso" class="novoCurso">Nome do curso:</label>
        <input type="text" name="nomeCurso" id="nomeCurso" class="novoCurso inputNovo">

        <label for="cargaHorariaCurso" class="novoCurso">Carga Horária:</label>
        <input type="text" name="cargaHorariaCurso" id="cargaHorariaCurso" class="novoCurso inputNovo">

        <input type="submit" value="Enviar" class="novoCurso">
    </form>

<?php } else { ?>
    <?php while($row = mysqli_fetch_array($queryCursosResult)) { ?>
        <?php if($row['id_curso'] == $_GET['editar']){ ?> 
            <h1>Inserir novo curso</h1>
            <form action="../editaCurso.php" method="POST" id="formNovoCurso">

                <input type="hidden" name="idCurso" value="<?php echo $row['id_curso']; ?>">

                <label for="nomeCurso" class="novoCurso">Nome do curso:</label>
                <input type="text" name="nomeCurso" value="<?php echo $row['nome']; ?>" id="nomeCurso" class="novoCurso inputNovo">

                <label for="cargaHorariaCurso" class="novoCurso">Carga Horária:</label>
                <input type="text" name="cargaHorariaCurso" value="<?php echo $row['carga_horaria']; ?>" id="cargaHorariaCurso" class="novoCurso inputNovo">

                <input type="submit" value="Enviar" class="novoCurso">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>