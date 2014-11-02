<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		ABAAD Voice Prototype -
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<style>
	body {
		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	}
	.affix {
		position: fixed;
		top: 60px;
		width: 220px;
	}
	</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>
</head>

<body id="<?php echo $this->params['controller']; ?>-<?php echo $this->params['action']; ?>">

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<?php echo $this->Html->link('ABAAD Voice Prototype', '/', array('class' => 'brand')); ?>
				<ul class="nav">

					<li>
						<a href="/">Search Services</a>
					</li>

					<?php if (AuthComponent::user()): ?>
			
						<li>
							<a href="/services">Manage Services</a>
						</li>
						<li>
							<a href="/users/logout">Logout</a>
						</li>

					<?php else: // (AuthComponent::user()): ?>
						<li>
							<a href="/users/login">Login</a>
						</li>
					<?php endif; // (AuthComponent::user()): ?>

				</ul>
			</div>
		</div>
	</div>

	<div class="container">

		<?php echo $this->fetch('content'); ?>

	</div><!-- /container -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
	<?php echo $this->fetch('script'); ?>

</body>
</html>
