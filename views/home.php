<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">	
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">	
<script type='text/javascript' src="<?php echo base_url();?>assets/js/function.js"></script>
<script type='text/javascript' src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script type='text/javascript' src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>


<script type='text/javascript'>
	$(
		$(document).ready(function () {
    $('#dados').DataTable();
} );

</script>

</head>
<body>




<div class="container">
		<h3><?php echo $titulo ?></h3>

		<form method="post" action="<?php echo base_url().'/index.php/contato/salvar'?>">

			<div class="col-md-4">
				<label >Nome:</label>
				<input type="text"  name="nome" class="form-control" placeholder="Nome"   id="nome" value="" required>
			</div>
			<div class="col-md-4">
				<label>Email:</label>
				<input type="email"  name="email" class="form-control" placeholder="Email" required>
			</div>
			<div class="col-md-4">
				<label >Telefone:</label>
				<input type="text" name="telefone" class="form-control"  placeholder="Telefone" required>
			</div>
			<div class="col-md-4">
			
				<p>&nbsp;</p>
				<button type="submit" class="btn btn-success">Cadastrar</button>
				<p>&nbsp;</p>
			</div>
			
		</form>

		<hr>
		<table class="table" id="dados">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Telefone</th>
						<th>A&ccedil;&otilde;es</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($contatos as $contato):?>
						<tr>
							<td><?php echo $contato->nome ?></td>
							<td><?php echo $contato->email ?></td>
							<td><?php echo $contato->telefone ?></td>	
							<td><a href="<?php echo base_url().'index.php/contato/editar/'.$contato->id;?>"><span class="glyphicon glyphicon-edit"></span></a></td>
							<td><a href="<?php echo base_url().'index.php/contato/remover/'.$contato->id;?>"><span class="glyphicon glyphicon-remove"></span></a></td>		
						</tr>
					<?php endforeach ?>		
				</tbody>	
			</table>

</div>






</body>
</html>