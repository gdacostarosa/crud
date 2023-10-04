<h1>Editar Produto</h1>

<?php
    $sql = "SELECT * FROM produtos WHERE id_produto=".$_REQUEST["id_produto"];
    $resprod = $conn->query($sql);
    $row = $resprod->fetch_object();

?>

<form action="?page=salvarproduto" method="POST">
    <input type="hidden" name="acaoproduto" value="editarproduto">
    <input type="hidden" name="id_produto" value="<?php print $row->id_produto; ?>">
    <div class="mb-3">
        <label>Código </label>
        <input type="text" name="codigo" value="<?php print $row->codigo; ?>" class="form-control">
    </div> 
    <div class="mb-3">
        <label>Descrição </label>
        <input type="text" name="descricao" value="<?php print $row->descricao; ?>" class="form-control">
    </div>  
    <div class="mb-3">
        <label>Valor: </label>
        <input type="number" step="0.01" min="0.01" name="valor" value="<?php print $row->valor; ?>" class="form-control">
    </div>       
    <button type:"submit" class="btn btn-primary">Atualizar Produto</button>
</form>    