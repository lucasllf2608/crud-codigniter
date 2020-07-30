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
		<form method="post" action="<?php echo base_url().'/index.php/contato/salvar'?>">
        <input type="hidden" id="id" name="id" value="<?php echo $contato['id'];?>">
			<div class="col-md-4">
				<label >Nome:</label>
				<input type="text"  name="nome" class="form-control" placeholder="Nome"   id="nome" value="<?php echo $contato['nome'];?>" required>
			</div>
			<div class="col-md-4">
				<label>Email:</label>
				<input type="email"  name="email" class="form-control" placeholder="Email" value="<?php echo $contato['email'];?>" required>
			</div>
			<div class="col-md-4">
				<label >Telefone:</label>
				<input type="text" name="telefone" class="form-control"  placeholder="Telefone"  value="<?php echo $contato['telefone'];?>" required>
			</div>
			<div class="col-md-4">
			
				<p>&nbsp;</p>
				<button type="submit" class="btn btn-success">Atualizar</button>
				<button type="submit" class="btn btn-primary">Voltar</button>

				<p>&nbsp;</p>
			</div>
			
		</form>

		

</div>






</body>
</html>