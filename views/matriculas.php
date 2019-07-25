<a href="?page=novaMatricula" role="button" class="btn btn-success botaoInserir">
    Inserir nova matrícula.
</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col" class="text-center">
                ID
            </th>
            <th scope="col" class="text-center">
                Aluno
            </th>
            <th scope="col" class="text-center">
                Curso
            </th>
            <th scope="col" class="text-center">
                Editar
            </th>
            <th scope="col" class="text-center">
                Deletar
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($row = mysqli_fetch_array($queryAlunosCursosResult)){
                echo '<tr>
                        <th class="text-center">'
                            .$row['id_aluno_curso'].
                        '</th>';
                echo    '<td>'
                            .$row['nome_aluno'].
                        '</td>';
                echo    '<td>'
                            .$row['nome_curso'].
                        '</td>';
                echo    '<td>
                            <a href="?page=novaMatricula&editar='.$row['id_aluno_curso'].'">
                                Editar
                            </a>
                        </td>';
                echo    '<td>
                            <a href="../deletaMatricula.php?id_matricula='.$row['id_aluno_curso'].'">
                                Deletar
                            </a>
                        </td>
                    <tr>';
            }
        ?>
    </tbody>
</table>