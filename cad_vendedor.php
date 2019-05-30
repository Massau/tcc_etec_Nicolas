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
	<h1>Cadastro de Vendedores</h1>
	<p>Classificam-se como vendedores todos aqueles proprietários e/ou responsáveis por empreendimentos no setor alimentício.<br>
	Ex.: Mercados, Mercearias, etc.</p>

<div class="row">
	<div class="col">
		<label>Nome</label>
		<input class="form-control" placeholder="João da Silva" type="text" name="name"><br>
	</div>
	<div class="col">
		<label>Nome da Empresa</label>
		<input class="form-control" placeholder="Globo Rural" type="text" name="nameEmpresa"><br>
	</div>
</div>

	<label>Endereço Empresa</label>
		<input class="form-control" type="text" name="endEmpresa"><br><br>
	<label>Endereço Transportadora</label>
		<input class="form-control" placeholder="Se possuir transportadora" type="text" name="endTransportadora"><br><br>
	<label>CPNJ</label>
		<input class="form-control" maxlength="11" type="number" name="cpnj"><br><br>

	<label>E-mail</label>
		<input class="form-control" type="text">
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

		<br><button type="submit" class="btn btn-outline-success py-4">Enviar</button><br>
</form>
</div>
</body>
</html>