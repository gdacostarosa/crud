<h1>Relatório de Produtos</h1>

<?php
    $sql = "SELECT * FROM produtos";
    
    $resprod = $conn->query($sql);

    $qtdprod = $resprod->num_rows;

    if ($qtdprod > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Código</th>";
        print "<th>Descricao</th>";
        print "<th>Valor</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $resprod->fetch_object()){
        print "<tr>";
        print "<td>".$row -> id_produto."</td>";
        print "<td>".$row -> codigo."</td>";
        print "<td>".$row -> descricao."</td>";
        print "<td>".$row -> valor."</td>";
        print "<td>
        <button onclick=\"location.href='?page=editarproduto&id_produto=".$row->id_produto."';\" class='btn btn-success'>Editar</button>
        
        <button onclick=\"if(confirm('Deseja excluir o produto?')){location.href='?page=salvarproduto&acaoproduto=excluirproduto&id_produto=".$row->id_produto."'
            ;}else{false;}\" class='btn btn-danger'>Excluir</button>
        
        </td>";
        print "</tr>";
    } 
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou produtos</p>";
    } 

 

    

?>   
<a href="produto_impressao.php" class="btn btn-info" role="button" target="a_blank">Imprimir</a>