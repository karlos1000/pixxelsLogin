<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo validation_errors(); //Validar el formulario
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo ($this->session->userdata("title"))?$this->session->userdata("title"):"" ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login</h2>
  <?php echo form_open('welcome/checkLogin', array('method'=>'post', 'id'=>'form_login')); ?>
    <div class="form-group">
			<label for="email">Correo:</label>
			<input type="text" name="email" id="email" value="" size="40" placeholder="Escriba su correo" class="form-control" />
    </div>
    <div class="form-group">
			<label for="password">Contrase&ntilde;a:</label>
			<input type="password" name="password" id="password" value="" size="40" placeholder="Escriba su contraseña" class="form-control" />
    </div>
    <button type="submit" class="btn btn-primary">Aceptar</button>
	<?php echo form_close(); ?>

	<div class="row">
		<div class="col-md-12">
			<?php if($this->session->login==false && isset($this->session->message['msgError'])){ ?>
				<div class="alert alert-danger alert-dismissible fade show">
					<?php echo $this->session->message['msgError']; ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

</body>
</html>
