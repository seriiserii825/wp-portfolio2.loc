<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>

    <title><?php wp_get_document_title(); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="Responsive Creative CV Template">
    <meta name="author" content="balapa">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font link -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <!-- begin .preloader -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <div class="preloader-left"></div>
    <div class="preloader-right"></div>
    <!-- end preloader -->

    <!-- begin #main-container -->
    <div id="main-container">
        <!-- begin #profile -->
        <div id="profile" class="profile">
            <div id="top-profile" class="expand add-expand">
                <h1>Profile</h1>
                <img class="small-image icon icon-left fa" src="<?php bloginfo('template_url'); ?>/assets/img/profile-picture.jpg" alt="Mobile Profile Picture">
            </div>
            <div class="main-content-profile">
                <div class="close-icon-container">
                    <a href="#top-profile" class="close-icon expand-profile"></a>
                </div>
                <div class="summary">

                    <!-- logo -->
                    <div class="logo-wrap">
                        <?php the_custom_logo(); ?>
                    </div>

                    <div class="occupation">
                        <?php $profile = new WP_Query([
                                'post_type' => 'post',
                                'cat' => 2
                        ]); ?>
                        
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          <?php the_field('profil'); ?>
                          <?php endwhile; ?>
                          <?php else: ?>
                          <!-- no posts found -->
                        <?php endif; ?>

                    </div>
                </div>
                <p class="hi">
                    <!-- <span class="dropcap">Hi</span> -->
                    <?php $running_line = new WP_Query('cat => 2'); ?>
                    <span class="detail typer-detail" id="js-detail">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php the_field('running_line'); ?>
                          <?php endwhile; ?>
                          <!-- post navigation -->
                          <?php else: ?>
                          <!-- no posts found -->
                        <?php endif; ?>
                        
                    </span>
                </p>
                <div class="button">
                    <a href="http://wp-portfolio2.loc/wp-content/uploads/2018/04/burduja_serghei.odt" class="download">Download CV &nbsp;
                        <span class="fa fa-download"></span>
                    </a>
                </div>
                <div class="social-container">
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-dribbble"></a></li>
                        <li><a href="#" class="fa fa-behance"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end #profile -->

        <!-- begin #features -->
        <div id="features">

            <!-- begin #resume -->
            <div id="resume" class="absolute">
                <div id="top-resume" class="expand add-expand">
                    <h1>Мой опыт</h1>
                    <div class="detail">Посмотрите мой опыт работы</div>
                    <div class="icon icon-left fa fa-file-o"></div>
                </div>
                <div class="main-content">
                    <a href="#top-resume" class="close-icon expand"></a>
                    <h1 class="title">Мое резюме</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title">Опыт работы</h2>
                            <!-- begin #timeline -->

                            <?php $work_exp = new WP_Query([
                                    'cat' => 3,
                                    'posts_per_page' => -1
                                ]); ?>

                            <?php if ( $work_exp->have_posts() ) : while ( $work_exp->have_posts() ) : $work_exp->the_post(); ?>
                                    <div id="timeline">
                                        <div class="timeline-item">
                                            <div class="briefcase fa fa-briefcase"></div>
                                            <div class="job">
                                                <h2 class="job-title"><?php the_title(); ?> <span>- <?php the_field('profession'); ?></span></h2>
                                                <h3 class="year"><?php the_field('year'); ?></h3>
                                                <div class="job-detail"><?php the_content(); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                  <?php endwhile; ?>
                                  <!-- post navigation -->
                                  <?php else: ?>
                                  <!-- no posts found -->
                                <?php endif; ?>    
                            
                            <!-- end #timeline -->
                        </div>
                        <div class="col-md-5">
                            <!-- begin #skills -->
                            <div id="skills">
                                <h2 class="title">My skills</h2>
                                <div class="skill-item">
                                    <h3 class="skill-title">HTML / CSS</h3>
                                    <div class="skill-bar-bg" data-percent="100">
                                        <div class="skill-bar"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <h3 class="skill-title">jQuery</h3>
                                    <div class="skill-bar-bg" data-percent="90">
                                        <div class="skill-bar"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <h3 class="skill-title">WordPress</h3>
                                    <div class="skill-bar-bg" data-percent="65">
                                        <div class="skill-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end #skills -->

                            <!-- begin #testimonials -->
                            <div id="testimonials">
                                <h2 class="title">Отзывы заказчиков:</h2>
                                <div id="carousel-container" class="owl-carousel owl-theme">

                                    <?php $reviews = new WP_Query([
                                            'post_type' => 'my_reviews',
                                            'posts_per_page' => -1
                                        ]); ?>

                                    <?php if ( $reviews->have_posts() ) : while ( $reviews->have_posts() ) : $reviews->the_post(); ?>
                                        <div class="item testi-item">
                                            <a href="<?php the_field('link'); ?>" target="_blank">
                                                <div class="testi-profile">
                                                    <div class="img-wrap">
                                                        <?php the_post_thumbnail(); ?>      
                                                    </div>
                                                    <div class="detail">
                                                        <h3><?php the_title(); ?></h3>
                                                        <h4><?php the_field('nick'); ?></h4>
                                                    </div>
                                                </div>
                                            </a>

                                            <div class="words"><?php the_content(); ?></div>
                                        </div>
                                      <?php endwhile; ?>
                                      <!-- post navigation -->
                                      <?php else: ?>
                                      <!-- no posts found -->
                                    <?php endif; ?>

                                </div>
                            </div>
                            <!-- end #testimonials -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end #resume -->

            <!-- begin #portfolio -->
            <div id="portfolio" class="absolute">
                <div id="top-portfolio" class="expand add-expand">
                    <h1>Портфолио</h1>
                    <div class="detail">Посмотрите мои работы</div>
                    <div class="icon icon-left fa fa-briefcase"></div>
                </div>
                <div class="main-content">
                    <a href="#top-portfolio" class="close-icon expand"></a>
                    <h1 class="title">My Portfolio</h1>
                        <ul id="filter">
                            <li><a class="active" href="#" data-group="all">All</a></li>
                            <li><a href="#" data-group="print">Print</a></li>
                            <li><a href="#" data-group="logo">Logo</a></li>
                            <li><a href="#" data-group="sketch">Skecth</a></li>
                        </ul>

                        <div id="masonry-container">

                            <div class="masonry-item" data-groups='["all", "sketch"]'>
                                <a class="overlay" href="portfolio-case.html">
                                    <h1>Badge</h1>
                                    <h4>This is my project about lorem ipsum dolor.</h4>
                                </a>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/1.jpg" alt="item 1">
                            </div>

                            <div class="masonry-item" data-groups='["all", "sketch"]'>
                                <a class="overlay" href="portfolio-case.html">
                                    <h1>Sketch</h1>
                                    <h4>This is my project about lorem ipsum dolor.</h4>
                                </a>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/2.jpg" alt="item 2">
                            </div>

                            <div class="masonry-item" data-groups='["all", "print"]'>
                                <a class="overlay" href="portfolio-case.html">
                                    <h1>Breaking Bad</h1>
                                    <h4>This is my project about lorem ipsum dolor.</h4>
                                </a>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/3.jpg" alt="item 3">
                            </div>

                            <div class="masonry-item" data-groups='["all", "logo"]'>
                                <a class="overlay" href="portfolio-case.html">
                                    <h1>Hopdog</h1>
                                    <h4>This is my project about lorem ipsum dolor.</h4>
                                </a>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/4.png" alt="item 4">
                            </div>

                            <div class="masonry-item" data-groups='["all", "logo"]'>
                                <a class="overlay" href="portfolio-case.html">
                                    <h1>Playstation</h1>
                                    <h4>This is my project about lorem ipsum dolor.</h4>
                                </a>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/5.jpg" alt="item 5">
                            </div>
                        </div>
                </div>
            </div>
            <!-- end #portfolio -->

            <!-- begin #blog -->
            <div id="blog" class="absolute">
                <div id="top-blog" class="expand add-expand">
                    <h1>Blog</h1>
                    <div class="detail">Read My Thoughts</div>
                    <div class="icon icon-left fa fa-pencil"></div>
                </div>
                <div class="main-content">
                    <a href="#top-blog" class="close-icon expand"></a>
                    <h1 class="title">My Latest Blog</h1>
                    <div class="blog-row row">
                        <div id="blog-list-container" class="col-md-12">

                            <!-- begin #blog-item -->
                            <div class="col-md-5">
                                <div class="blog-item">
                                    <a class="overlay" href="blog-post.html">
                                        <h1>Read More</h1>
                                    </a>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/blog/1.jpg" alt="Blog thumbnail">
                                    <div class="detail row">
                                        <div class="date">
                                            <span>18</span>
                                            <span>may</span>
                                        </div>
                                        <div class="like">
                                            <span class="fa fa-heart"></span>
                                            <span>13</span>
                                        </div>
                                        <div class="blog-title">20 things i learn as developer</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end #blog-item -->

                            <!-- begin #blog-item -->
                            <div class="col-md-5">
                                <div class="blog-item">
                                    <a class="overlay" href="blog-post.html">
                                        <h1>Read More</h1>
                                    </a>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/blog/2.png" alt="Blog thumbnail">
                                    <div class="detail row">
                                        <div class="date">
                                            <span>21</span>
                                            <span>july</span>
                                        </div>
                                        <div class="like">
                                            <span class="fa fa-heart"></span>
                                            <span>50</span>
                                        </div>
                                        <div class="blog-title">Responsive grid system essential</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end #blog-item -->

                            <!-- begin #blog-item -->
                            <div class="col-md-5">
                                <div class="blog-item">
                                    <a class="overlay" href="blog-post.html">
                                        <h1>Read More</h1>
                                    </a>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/blog/3.png" alt="Blog thumbnail">
                                    <div class="detail row">
                                        <div class="date">
                                            <span>19</span>
                                            <span>des</span>
                                        </div>
                                        <div class="like">
                                            <span class="fa fa-heart"></span>
                                            <span>36</span>
                                        </div>
                                        <div class="blog-title">Premium template themeforest give away</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end #blog-item -->

                            <!-- begin #blog-item -->
                            <div class="col-md-5">
                                <div class="blog-item">
                                    <a class="overlay" href="blog-post.html">
                                        <h1>Read More</h1>
                                    </a>
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/blog/4.jpg" alt="Blog thumbnail">
                                    <div class="detail row">
                                        <div class="date">
                                            <span>25</span>
                                            <span>May</span>
                                        </div>
                                        <div class="like">
                                            <span class="fa fa-heart"></span>
                                            <span>101</span>
                                        </div>
                                        <div class="blog-title">CSS Done Right!</div>
                                    </div>
                                </div>
                            </div>
                            <!-- end #blog-item -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- end #blog -->

            <!-- begin #contact -->
            <div id="contact" class="absolute">
                <div id="top-contact" class="expand add-expand">
                    <h1>Contact</h1>
                    <div class="detail">Get in Touch</div>
                    <div class="icon icon-left fa fa-envelope-o"></div>
                </div>
                <div class="main-content">
                    <a href="#top-contact" class="close-icon expand"></a>
                    <h1 class="title">Get In Touch</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title">Find Me Here</h2>
                            <section id="cd-google-map">
                                <div id="google-container"></div>
                                <div id="cd-zoom-in"></div>
                                <div id="cd-zoom-out"></div>
                                <address>St Petersburg, Russia</address> 
                            </section>
                            <ul class="list">
                                <li><div class="icon fa fa-map-marker"></div>Saint Petersburg, Russia</li>
                                <li><div class="icon fa fa-envelope-o"></div>katya@gmail.com</li>
                                <li><div class="icon fa fa-phone"></div>+6282365104013</li>
                            </ul>
                            <h2 class="title">Latest tweet</h2>
                            <div id="twitter">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <h2 class="title">Drop Me A Mail</h2>
                            <form id="contact-form" action="http://balapa.com/katya/contact.php" method="POST">
                                <input type="text" name="subject" placeholder="Subject">
                                <input type="text" name="name" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <textarea name="message" placeholder="What to tell?"></textarea>
                                <input id="send" type="submit" value="Send Message">
                                <input type="hidden" name="submitted" value="true">
                                <div class="words contact-notification">Your message has been sent</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end #contact -->

        </div>
        <!-- end #features -->

    </div>
    <!-- end #main-container -->

    <!-- begin #switcher -->
    <div id="switcher">
      <div id="gear" class="fa fa-gear"></div>
      <div class="container-setting">
        <p class="setting">Setting</p>
        <p class="switcher-title">Color Scheme</p>
        <div class="container-color-list">
            <ul class="color-list">
                <li rel="blue" class="styleswitch blue"></li>
                <li rel="green" class="styleswitch green"></li>
                <li rel="purple" class="styleswitch purple"></li>
            </ul>
            <ul class="color-list">
                <li rel="gold" class="styleswitch gold"></li>
                <li rel="red" class="styleswitch red"></li>
                <li rel="pink" class="styleswitch pink"></li>
            </ul>
        </div>
        <!--
        <p class="title">Background Type</p>
        <ul class="layout-list">
            <li><a href="../slideshow">Slideshow</a></li>
            <li><a href="../youtube">Youtube</a></li>
            <li><a href="../gradient">Gradient</a></li>
            <li><a href="../pattern">Pattern</a></li>
            <li><a href="../particle">Particle</a></li>
        </ul>
        -->
      </div>
    </div>
    <!-- end #switcher -->

    <?php wp_footer(); ?>
</body>
</html>