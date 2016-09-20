
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Bulma is a CSS framework based on Flexbox and built with Sass">

	<title>Gravityfeed | Login</title>

	<link rel="stylesheet" href="./css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/ionicons.min.css">
	
	<link rel="stylesheet" href="/css/bulma.css">
	<link rel="stylesheet" href="/css/style.css">

</head>

<body class="layout-default">
	<section class="hero is-primary">
		<div class="hero-head">
			<div class="container">
				<nav class="nav">
					<div class="nav-left">
						
					</div>

					<div class="nav-center">
						<a class="nav-item is-brand" href="./index.php">
							GRAVITYFEED
						</a>
					</div>

				<div class="nav-right nav-menu">
						<span class="nav-item">
							
						</span>
					</div>
				</nav>

			</div>
		</div>

		<div class="hero-body">

		</div>
	</section>

	<section class="hero is-medium has-text-centered">
		
		<div class="hero-body">
			<div class="container">
				
				<div class="block">

					<div class="columns">

						<div class="column is-one-third"></div>

						<div class="column">
							<div class="tile is-ancestor">
								<div class="tile is-12 is-vertical is-parent">

									<div class="tile is-parent">
										<div class="tile is-child box">
											<div class="column">
												<h1 class="title">
													Login
												</h1>
												<form method="post" id="login-form">
													<p class="control has-icon">
														<input name="txt_uname_email" class="input" type="text" placeholder="Email">
														<i class="fa fa-envelope"></i>
													</p>
													<p class="control has-icon">
														<input name="txt_password" class="input" type="password" placeholder="Password">
														<i class="fa fa-lock"></i>
													</p>
													<p class="hero-buttons">
														<button type="submit" name="btn-login" id="btn-login" class="button">
															<span class="icon">
																<i class="ion-log-in"></i>
															</span>
															<span>Login</span>
														</button>
														<a class="button" href="./forgot-password.php">
															<span class="icon">
																<i class="fa fa-question"></i>
															</span>
															<span>Forgot Password?</span>
														</a>
													</p>
												</form>
												<div id="error">
								        <?php
													if(isset($error)):
													?>
					                <div class="alert alert-danger">
					                   <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
					                </div>
					                <?php
													endif;
													?>
								        </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="column"></div>

					</div>

				</div>
			</div>
		</div>
	</section>


  <?php require("includes/footer.php"); ?>



			<script async id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script>
			<script async type="text/javascript" src="https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>

			<script src="/js/jquery-2.2.0.min.js"></script>
			<script src="/js/clipboard.min.js"></script>
			<script src="/js/bulma.js"></script>



			<script type="text/javascript">
				(function($) {
					window.fnames = new Array();
					window.ftypes = new Array();
					fnames[0]='EMAIL';
					ftypes[0]='email';
				}(jQuery));
				var $mcj = jQuery.noConflict(true);
			</script>

		</body>
		</html>
