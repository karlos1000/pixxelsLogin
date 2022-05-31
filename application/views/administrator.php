<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$user_data = $this->session->userdata("user_data");
// echo "<pre>";
// print_r($user_data);
// echo "</pre>";
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

<div id="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">Bienvenido <?php echo $user_data[0]->name; ?></div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
