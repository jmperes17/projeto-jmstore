<a href="?pagina=Inserir">Inserir</a>
<table border="1px" solid #ccc; width= "100%">
    <tr>
        <th>Marca</th>
        <th>Valor R$</th>
    </tr>

    <?php
    while($linha = mysqli_fetch_assoc($result_chuteira)){
        echo '<tr><td>'.$linha['marca_chuteira'].'</td>';
        echo '<td>'.$linha['valor_chuteira'].' R$ '.'</td></tr>';
    }
    
       
    ?>

</table>