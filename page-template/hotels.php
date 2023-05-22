<?php
/*
Template Name: hotels
*/
?>
        <?php get_header(); ?>
        <main class="main">

            <section class="hotels pt-80 wrapper" style="background-image: url(<?php if(get_field('banner_image')) {
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

            <section class="hotel wrapper space-v">
                <div class="content_container">
                    <div class="content_head hotel_max">
                        <h2 class="title"><?php the_field('title_of_hotel'); ?></h2>
                        <p class="subtitle"><?php the_field('subtitle_of_hotel'); ?></p>
                    </div>
                    <div class="hotel_row">
                    <?php
                            $hotels = new WP_Query(array( 'category_name' => 'hotels', 'posts_per_page' => '3' )); 
                            if ($hotels->have_posts() ) :
                                while ( $hotels->have_posts() ) : $hotels->the_post(); ?>
                                
                        <div class="hotel_card">
                            <div class="hotel_destinations">
                                <img src="<?php if(get_field('holet_image')) {the_field('holet_image');} ?>" class="hotel_image" alt="">
                                <div class="hotel_details">
                                    <h4 class="hotel_title">
                                        <?php the_field('holet_title'); ?>
                                    </h4>
                                    <ul class="hotel_package-list">
                                        <li class="hotel_item">
                                            <span>Басейн</span>
                                            <span>
                                            <?php
                                                if (get_field('holet_swiming')) {
                                                    echo "Присутній";
                                                }  else {
                                                    echo "Відсутній";
                                                }
                                                ?>
                                        </span>
                                        </li>
                                        <li class="hotel_item">
                                            <span>Спортзал</span>
                                            <span>
                                            <?php
                                                if (get_field('holet_gum')) {
                                                    echo "Присутній";
                                                }  else {
                                                    echo "Відсутній";
                                                }
                                                ?>
                                            </span>
                                        </li>
                                        <li class="hotel_item">
                                            <span>Wi-fi</span>
                                            <span>
                                            <?php
                                                if (get_field('holet_wifi')) {
                                                    echo "Присутній";
                                                }  else {
                                                    echo "Відсутній";
                                                }
                                                ?>
                                            </span>
                                        </li>
                                        <li class="hotel_item">
                                            <span>Кімнатний сервіс</span>
                                            <span>
                                            <?php
                                                if (get_field('holet_service')) {
                                                    echo "Присутній";
                                                }  else {
                                                    echo "Відсутній";
                                                }
                                                ?>
                                            </span>
                                        </li>
                                        <li class="hotel_item">
                                            <span>Ресторан</span>
                                            <span>
                                            <?php
                                                if (get_field('holet_restourant')) {
                                                    echo "Присутній";
                                                }  else {
                                                    echo "Відсутній";
                                                }
                                                ?>
                                            </span>
                                        </li>
                                        <li class="hotel_item">
                                            <span>Ціна за ніч</span>
                                            <a href="#" class="price-btn">
                                            $<?php the_field('holet_price'); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; else :  ?>   
                                Готелі відсутні
                        <?php endif;  wp_reset_postdata();?> 
                        
                    </div>
            </section>
        </main>
<?php get_footer(); ?>
