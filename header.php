<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-18095986-1', 'a2studio.co.uk');
  ga('send', 'pageview');
</script>
	</head>
	<body <?php body_class(); ?>>
	<div id="container" class="fix">
	<div id="header">
<div id="logo">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_bloginfo('template_url') . '/images/logo.png'; ?>" alt="logo" /></a>
		</div>
		<div class="menu">
			<span class="menu-title">Interiors</span>
			<ul class="menu">
				<!--?php wp_list_categories('child_of=3&show_empty=1&title_li='.__('')); ?-->
				<?php wp_list_pages('show_home=false&child_of=325&&sort_column=menu_order&show_empty=1&title_li='.__('')); ?>
			</ul>
		</div>
		<div class="menu">
			<span class="menu-title">Extensions</span>
			<ul class="menu">
				<!--?php wp_list_categories('child_of=3&show_empty=1&title_li='.__('')); ?-->
				<?php wp_list_pages('show_home=false&child_of=327&&sort_column=menu_order&show_empty=1&title_li='.__('')); ?>
			</ul>
		</div>
		<div class="menu">
			<span class="menu-title">Studio</span>
			<ul class="menu">
				<?php wp_list_pages('show_home=false&exclude_tree=45&exclude=113&show_empty=1&title_li='.__('')); ?>
				<?php wp_list_categories('show_empty=1&title_li='.__('')); ?>
			</ul>
</div>
		
</div>				