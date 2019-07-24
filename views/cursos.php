<a href="?page=novoCurso" role="button" class="btn btn-success botaoInserir">
    Inserir novo curso.
</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col" class="text-center">
                ID
            </th>
            <th scope="col" class="text-center">
                Nome do curso
            </th>
            <th scope="col" class="text-center">
                Carga Horária
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
            while($row = mysqli_fetch_array($queryCursosResult)){
                echo '<tr><th class="text-center">'.$row['id_curso'].'</th>';
                echo '<td>'. $row['nome']. '</td>';
                echo '<td>'. $row['carga_horária']. '</td>';
                echo '<td><a href="?page=novoCurso&editar='
                    . $row['id_curso']. '">Editar</a></td>';
                echo '<td><a href="../deletaCurso.php?id_curso='
                    . $row['id_curso'] . '">Deletar</a></td></tr>';
            }
        ?>
    </tbody>
</table>