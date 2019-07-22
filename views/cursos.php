<a href="?page=novoCurso">
    Inserir novo curso.
</a>
<table>
    <tr>
        <th>
            Nome do curso
        </th>
        <th>
            Carga Horária
        </th>
        <th>
            Deletar
        </th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($queryCursosResult)){
            echo '<tr><td>'.$row['nome'].'</td>';
            echo '<td>'.$row['carga_horária'].'</td>';
            echo '<td><a href="../deletaCurso.php?id_curso='
                  . $row['id_curso'] . '">Deletar</a></td></tr>';
        }
    ?>
</table>