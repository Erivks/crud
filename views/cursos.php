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
    </tr>
    <?php
        while($row = mysqli_fetch_array($queryCursosResult)){
            echo '<tr><td>'.$row['nome'].'</td>';
            echo '<td>'.$row['carga_horária'].'</td></tr>';
        }
    ?>
</table>