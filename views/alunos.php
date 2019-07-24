<a href="?page=novoAluno">
    Inserir novo aluno.
</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col" class="text-center">
                ID
            </th>
            <th scope="col" class="text-center">
                Nome
            </th>
            <th scope="col" class="text-center">
                Data de nascimento
            </th>
            <th scope="col" class="text-center">
                Editar
            </th>
            <th scope="col" class="text-center">
                Deletar
            </th>
        </tr>
    </thead>
    <?php
        while($row = mysqli_fetch_array($queryAlunosResult)){
            echo '<tr><th class="text-center">'.$row['id_aluno'].'</th>'
            echo '<td>'.$row['nome'].'</td>';
            echo '<td>'.$row['data_nascimento'].'</td>';
            echo '<td><a href="?page=novoAluno&editar='
                  . $row['id_aluno'] . '">Editar</a></td>';
            echo '<td><a href="../deletaAluno.php?id_aluno='
                  . $row['id_aluno'] . '">Deletar</a></td></tr>';
        }
    ?>
</table>