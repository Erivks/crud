<h1>Inserir novo curso</h1>
<form action="../processaCurso.php" method="POST" id="formNovoCurso">

    <label for="nomeCurso" class="novoCurso">Nome do curso:</label>
    <input type="text" name="nomeCurso" id="nomeCurso" class="novoCurso inputNovo">

    <label for="cargaHorariaCurso" class="novoCurso">Carga Horária:</label>
    <input type="text" name="cargaHorariaCurso" id="cargaHorariaCurso" class="novoCurso inputNovo">

    <input type="submit" value="Enviar" class="novoCurso">
</form>