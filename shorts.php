<a href="?pagina=Inserir short">Inserir short</a>
<table border="1px" solid #ccc; width= "100%">

    <tr>

        <th>Short</th>
        <th>Valor</th>
    </tr>

    <?php
        while($linha = mysqli_fetch_assoc($result_shorts)){
            echo '<tr><td>'.$linha['nome_short'].'</td>';
            echo '<td>'.$linha['valor_short'].' R$ '.'</td></tr>';
        }

    ?>
</table>