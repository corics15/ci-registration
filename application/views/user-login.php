<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CodeIgniter Registration</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu+Condensed" rel="stylesheet">
		<link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="container">

			<div class="row pad-top-70">

				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Login</h3>
						</div>
						<div class="panel-body">
							<?php echo form_open('user/login'); ?>

								<div class="form-group">
									<label for="input_username">Username:</label>
									<input type="text" name="input_username" id="input_username" class="form-control">
									<?php echo form_error('input_username', '<div class="with-error">', '</div>'); ?>
								</div>

								<div class="form-group">
									<label for="input_password">Password:</label>
									<input type="password" name="input_password" id="input_password" class="form-control">
									<?php echo form_error('input_password', '<div class="with-error">', '</div>'); ?>
								</div>

								<div class="form-group">
									<div>
										<button type="submit" class="btn btn-default">Login</button>
										&nbsp;&nbsp;Don't have an account? Register <a href="<?= base_url('user/register') ?>">here</a>
									</div>
								</div>

							<?php echo form_close(); ?>
						</div>
					</div>

				</div>

			</div>

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>