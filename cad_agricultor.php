<?php
include("cabecalho.php");  
?>
<style>
	p {
		color: black;
	}
</style>
<div class="container pt-4">
<form method="">
	<h1>Cadastro de Produtor Rural</h1>
	<p>Classificam-se como produtores rurais todos aqueles que produzem alimentos, sejam eles pequenos, médios ou grandes produtores, bem como agricultores familiares.</p>
	<label>Nome Completo do Titular</label>	
		<input class="form-control" placeholder="João da Silva" type="text" name="name"><br><br>
	<label>E-mail</label>
		<input class="form-control" type="text">
	<label>Endereço da propriedade rural</label>
		<input class="form-control" type="text" name="endEmpresa"><br><br>
	<label>CPF</label>
		<input class="form-control" maxlength="11" type="number" name="cpf"><br><br>
	<label>Categorias de produtos que trabalham</label><br>
		<input type="checkbox" id="graos" name="optProdutos">
		<label for="graos">Grãos</label><br><br>
		<input type="checkbox" id="hortalicas" name="optProdutos">
		<label for="hortalicas">Hortaliças</label><br><br>
		<input type="checkbox" id="legumes" name="optProdutos">
		<label for="legumes">Legumes</label><br><br>
		<input type="checkbox" id="frutas" name="optProdutos">
		<label for="frutas">Frutas</label><br><br>
		<input type="checkbox" id="laticineos" name="optProdutos">
		<label for="laticineos">Laticíneos</label><br><br>
	<label>Defina uma senha</label>
		<input class="form-control" type="password">
	<button type="submit" class="btn btn-outline-success">Enviar</button>
</form>
</div>
</body>
</html>