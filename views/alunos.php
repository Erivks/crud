<a href="?page=novoAluno">
    Inserir novo aluno
</a>
<table>
    <tr>
        <th>
            Nome
        </th>
        <th>
            Data de nascimento
        </th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($queryAlunosResult)){
            echo '<tr><td>'.$row['nome'].'</td>';
            echo '<td>'.$row['data_nascimento'].'</td></tr>';
        }
    ?>
</table>