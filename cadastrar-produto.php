<h1>Cadastrar Produtos</h1>
<form action="?page=salvarproduto" method="POST">
    <input type="hidden" name="acaoproduto" value="cadastrarproduto">
    <div class="mb-3">
        <label>Código: </label>
        <input type="text" name="codigo" class="form-control">
    </div> 
    <div class="mb-3">
        <label>Descrição: </label>
        <input type="text" name="descricao" class="form-control">
    </div>  
    <div class="mb-3">
        <label>Valor: </label>
        <input type="number" step="0.01" min="0.01" name="valor" class="form-control">
    </div>       
     
    <button type:"submit" class="btn btn-primary">Cadastrar</button>
</form>    