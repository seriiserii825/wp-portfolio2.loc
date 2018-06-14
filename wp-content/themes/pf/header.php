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

    <!--[if lt IE 9]>
		<script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php  body_class(); ?>>
	<div class="wrap-body">

		<header >
			<div class="zerogrid">
				<div class="wrap-header">
					<div class="logo t-center">
                        <a href="index.html">
                            <?php the_custom_logo(); ?>
                        </a>
                    </div>
                    
                    <div id='cssmenu' class="align-center">
                      <ul>
                         <li class="active"><a href='index.html'><span>Home</span></a></li>
                         <li><a href='single.html'><span>About</span></a></li>
                         <li><a href='gallery.html'><span>Gallery</span></a></li>
                         <li><a href='archive.html'><span>Blog</span></a>
                         </li>
                         <li class='last'><a href='contact.html'><span>Contact</span></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </header>