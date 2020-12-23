<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<title><?php wp_title("|",true,'right'); ?><?php bloginfo('name'); ?></title>
	<?php wp_head();?>
</head>
<body>
	<div id="wrapper" class="container">
		<header class="row">
			<nav id="utility_nav" class="col-md-12">
			</nav>
			<nav id="main_nav" class="col-md-12">
				<ul>
					<?php wp_nav_menu(['menu'=>'main_nav']);?>
				</ul>
			</nav>
		</header>