<!DOCTYPE html>
<html lang="fr">
<head>
<title><?php wp_title(''); ?></title>
<meta content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php wp_head(); 
wp_enqueue_script('jquery');
?>
<script>
	jQuery(document).ready(function( $ ) {
		
	});
</script>
</head>
<body>

	<main>
		<header>
			<div id="menu-phone">
				<i id="icon" class="fa fa-bars" aria-hidden="true"></i>
			</div>
		</header>