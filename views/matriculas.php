<table>
    <tr>
        <th>
            Aluno
        </th>
        <th>
            Curso
        </th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($queryAlunosCursosResult)){
            echo '<tr><td>'.$row['nome_aluno'].'</td>';
            echo '<td>'.$row['nome_curso'].'</td></tr>';
        }
    ?>
</table>