<a href="?pagina=Inserir camisa">Inserir camisa</a>
<table border="1px" solid #ccc; width= "100%">
    <tr>
        <th>Camisa</th>
        <th>Valor</th>

    </tr>

    <?php
        while($linha = mysqli_fetch_assoc($result_camisas)){
            echo '<tr><td>'.$linha['nome_camisa'].'</td>';
            echo '<td>'.$linha['valor_camisa'].' R$ '.'</td></tr>';
        }



    ?>
</table>
