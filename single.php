<?php get_header(); ?>
        <main class="main">
            <section class="detail wrapper">
                <div class="detail_info">
                    <?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail('medium', array('class' => 'detail_image'));
                        }
                    ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
