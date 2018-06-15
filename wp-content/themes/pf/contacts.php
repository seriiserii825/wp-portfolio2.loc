<?php 
/**
 * Template Name: Контакты 
 */
get_header(); ?>

<div class="zerogrid">
    <div class="wrap-container clearfix">
        <div id="main-content">
            <div class="wrap-content">
                <div class="crumbs">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <h1 class="entry-title">Контакты</h1>
                <article>
                    <div class="art-header">
                        <div class="embed-container maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="380" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>

                    <?php if(have_posts()): ?>
                        <?php the_post(); ?>
                        <div class="art-content">
                            <div class="row">
                                <div class="col-1-3">
                                    <div class="wrap-col">
                                        <h3>Contact Info</h3>
                                        <span style="color: #eee;"><?php the_field('contacts_title_contents'); ?></span>
                                        <p><?php the_field('contacts_content'); ?></p>
                                        <p><?php the_field('contacts_address'); ?></p>
                                        <p><?php the_field('contacts_phone'); ?></p>
                                        <p><?php the_field('contacts_email'); ?></p>
                                    </div>
                                </div>
                                <div class="col-2-3">
                                    <div class="wrap-col">
                                        <h3>Contact Form</h3>
                                        <div class="contact">
                                            <div id="contact_form">
                                                <div id="ff"><?php the_content(); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </article>
            </div>
        </div>
        <hr class="line">
    </div>


    <?php get_footer(); ?>



