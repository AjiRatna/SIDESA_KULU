<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('back-end')?>/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['<?= base_url('back-end')?>/assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('back-end')?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('back-end')?>/assets/css/azzara.min.css">
</head>
<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
		<center><img src="<?= base_url('logo') ?>/aji.png" width="150px" height="150px" alt=""></center>
        <div class="text-center">
            <a href="<?= base_url('Home')?>" style="font-size: 25px; font-weigth:bold">DESA KULU</a>
        </div>   	
        <h3 class="text-center">Silahkan Login</h3>
		<?php
		session();
		$validasi= \Config\Services::validation();

		if (session()->get('pesan')) {
			echo'<div class="alert-danger">';
			echo session()->get('pesan');
			echo '</div>';
		}
		?>
		<?php echo form_open('Auth/Login') ?>
			<div class="login-form">

				<div class="form-group">
					<label><b>Username</b></label>
					<input id="username" name="username" type="text" class="form-control" required>
					<p class="text-danger"><?= $validasi->getError('username') ?></p>
				</div>

				<div class="form-group">
					<label><b>Level</b></label>
					<select name="level" class="form-control" required>
						<option value="">--Level--</option>
						<option value="1">Admin</option>
						<option value="2">User</option>
						<option value="3">Penduduk</option>
					</select>					
					<p class="text-danger"><?= $validasi->getError('level') ?></p>
				</div>

				<div class="form-group">
					<label><b>Password</b></label>
					<a href="#" class="link float-right">Forget Password ?</a>
					<div class="position-relative">
						<input id="password" name="password" type="password" class="form-control" required>
						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
						<p class="text-danger"><?= $validasi->getError('password') ?></p>
					</div>
				</div>
				<div class="form-group form-action-d-flex mb-3">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="rememberme">
						<label class="custom-control-label m-0" for="rememberme">Remember Me</label>
					</div>
					<button class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Login</button>
				</div>
			</div>
		</div>
		<?php echo form_open() ?>		
	</div>
	<script src="<?= base_url('back-end')?>/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= base_url('back-end')?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= base_url('back-end')?>/assets/js/core/popper.min.js"></script>
	<script src="<?= base_url('back-end')?>/assets/js/core/bootstrap.min.js"></script>
	<script src="<?= base_url('back-end')?>/assets/js/ready.js"></script>
</body>
</html>