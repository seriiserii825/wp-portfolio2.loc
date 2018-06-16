<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Basic Page Needs
    	================================================== -->
    	<meta charset="utf-8">
    	<meta name="description" content="">
    	<meta name="author" content="">

    <!-- Mobile Specific Metas
    	================================================== -->
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!--[if lt IE 9]>
		<script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php  body_class(); ?>>
	<header >
		<div class="zerogrid">
			<div class="wrap-header">
				<div class="logo t-center">
                    <?php the_custom_logo(); ?>
                </div>

                <div class="my-photo">
                    <?php 
                        $options = get_option('wfm_options_page')['wfm_options_admin_img'];
                    ?>
                    <img src="<?php echo $options; ?>" alt="">
                </div>

                <div id='cssmenu' class="align-center">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'header-menu',
                        'menu'            => '',
                        'container'       => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'items_wrap'      => '<ul>%3$s</ul>',
                    ) ); ?>
             </div>
         </div>
     </div>
    </header>