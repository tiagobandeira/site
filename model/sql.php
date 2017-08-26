<?php  
    include_once('connect.php');
    #selecionar nome da categoria e colocar em um array
    $sql = "SELECT nome, idcategoria FROM categoria";
    $resulte = $con->query($sql);
    $cont = 0;
    if ($resulte->num_rows > 0) {
        while ($row = $resulte->fetch_assoc()){
            $id[cont] = $row['idcategoria'];
            $nomes[cont] = $row['nome'];
            cont++;
        }
    }
?>
