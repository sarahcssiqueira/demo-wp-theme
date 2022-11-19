<?php
/**
 * The header for Demo Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
    <title><?php echo get_bloginfo('name'); ?></title>
	<?php wp_head();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WordPress Demo Theme">
    <meta name="author" content="https://sarahcssiqueira.ga/">
</head> 

<body> <header class="header text-center">	    
	    <a class="site-title pt-lg-4 mb-0" href="<?php echo get_home_url(); ?>">
			<?php echo get_bloginfo('name'); ?>
		</a>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >   
			<button 
				class="navbar-toggler" 
				type="button" 
				data-toggle="collapse" 
				data-target="#navigation" 
				aria-controls="navigation" 
				aria-expanded="false" 
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
				</span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >

			<?php wp_nav_menu(
					array(
						'menu'=>'primary',
						'container'=>'',
						'theme_location'=>'primary',
						'items_wrap'=>'<ul class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
						)
					);?>

			<ul class="social-list list-inline py-3 mx-auto">
				<li class="list-inline-item">
					<a href="https://www.linkedin.com/in/sarahcssiqueira/"><i class="fab fa-linkedin-in fa-fw"></i>
					</a>
				</li>
				<li class="list-inline-item">
					<a href="https://github.com/sarahcssiqueira"><i class="fab fa-github-alt fa-fw"></i>
					</a>
				</li>
			</ul>

		</div>
		</nav>	
    	</header>

<div class="main-wrapper">
	<header class="page-title theme-bg-light text-center gradient py-5">
		<h1 class="heading">
			<?php the_title(); ?>
		</h1>
	</header>