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
                            <?php
                                //Get the field like normal 
                                $fielddata = get_field('contacts_map');

                                //Apply filter to initiate shortcodes
                                $fielddata = apply_filters('the_content', $fielddata);
                                echo $fielddata;
                            ?>
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



