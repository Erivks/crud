<a href="?page=novaMatricula">
    Inserir nova matrícula
</a>
<table>
    <tr>
        <th>
            Aluno
        </th>
        <th>
            Curso
        </th>
        <th>
            Deletar
        </th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($queryAlunosCursosResult)){
            echo '<tr><td>'.$row['nome_aluno'].'</td>';
            echo '<td>'.$row['nome_curso'].'</td>';
            echo '<td><a href="deletaCurso.php?id_curso='
                    .$row['id_aluno_curso'].'">Deletar</a></td><tr>';
        }
    ?>

</table>