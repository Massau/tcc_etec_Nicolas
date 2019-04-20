<?php
include("cabecalho.php");  
?>
<div class="container pt-4">
	<h1>Cadastro de Vendedores</h1>
	<label>Nome Completo do Titular</label>	
		<input placeholder="João da Silva" type="text" name="name"><br><br>
	<label>Nome da Empresa</label>
		<input placeholder="Globo Rural" type="text" name="nameEmpresa"><br><br>
	<label>Endereço Empresa</label>
		<input type="text" name="endEmpresa"><br><br>
	<label>Endereço Transportadora</label>
		<input placeholder="Se possuir transportadora" type="text" name="endTransportadora"><br><br>
	<label>CPNJ</label>
		<input maxlength="11" type="number" name="cpnj"><br><br>
	<label>Categorias de produtos que trabalham</label><br>
		<input type="checkbox" name="optProdutos">Grãos<br><br>
		<input type="checkbox" name="optProdutos">Hortaliças<br><br>
		<input type="checkbox" name="optProdutos">Legumes<br><br>
		<input type="checkbox" name="optProdutos">Frutas<br><br>
		<input type="checkbox" name="optProdutos">Laticíneos<br><br>
</div>
</body>
</html>