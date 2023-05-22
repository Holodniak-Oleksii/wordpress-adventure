<?php
/*
Template Name: destination
*/
?>

        <?php get_header(); ?>
            <main class="main">
            <section class="adventure pt-80 wrapper" style="background-image: url(<?php if(get_field('banner_image')) {
                 the_field('banner_image');
            } ?>)">
                <div class="banner_section">
                    <span class="banner_title"><?php echo get_field('banner_subtitle') ?></span>
                    <h2 class="banner_logo">
                    <?php echo get_field('banner_title') ?>    </h2>
                    <p class="banner_text">
                    <?php echo get_field('banner_description') ?></p>
                    <button class="banner_button" type="button">
                        Давай розпочнемо
                    </button>
                </div>
            </section>
            <section class="destination wrapper space-v">
                <div class="destination_container">
                    <div class="destination_title">
                        <h2>
                            <?php the_field('title_of_road'); ?>
                        </h2>
                        <p>
                        <?php the_field('subtitle_of_road'); ?>    </p>
                    </div>
                    
                    <div class="destination_row">
                    <?php
                            $destination = new WP_Query(array( 'category_name' => 'destination')); 
                            if ($destination->have_posts() ) :
                                while ( $destination->have_posts() ) : $destination->the_post(); ?> 
                            <div class="destination_card">
                                <a href='<?php echo get_permalink( $destination->ID ); ?>'>
                                    <?php 
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail('medium', array('class' => 'destination_img'));
                                    }
                                    ?>
                                    <div class="destination_description">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_field('destination_name'); ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; else :  ?>   
                                Напрямки відсутні
                        <?php endif;  wp_reset_postdata();?>        
                    
                    </div>
                </div>
            </section>
        </main>
        <?php get_footer(); ?>