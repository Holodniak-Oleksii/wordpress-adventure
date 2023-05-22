<?php
/*
Template Name: home
*/
?>
        <?php get_header(); ?>
        <main class="main">
            <section class="banner pt-80 wrapper" style="background-image: url(<?php if(get_field('banner_image')) {
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
                            <?php echo get_field('title_of_road'); ?>   
                        </h2>
                        <p>
                            <?php echo get_field('subtitle_of_road'); ?>
                        </p>
                    </div>
                    <div class="destination_row">
                        <?php
                            $destination = new WP_Query(array( 'category_name' => 'destination', 'posts_per_page' => '6' )); 
                            if ($destination->have_posts() ) :
                                while ( $destination->have_posts() ) : $destination->the_post(); 
                                ?> 
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
                        <?php endif; wp_reset_postdata(); ?>    
                    </div>
                </div>
            </section>
            <section class="help wrapper space-v-mt">
                <div class="help-text">
                <h2><?php the_field('question_title'); ?></h2>
                    <p><?php the_field('question_description'); ?></p>
                    <a class="black_button">Повідоте нас</a>
                </div>
                <img src="<?php echo get_template_directory_uri().'/assets/images/mountains.jpg'; ?>" class="help-image" alt="гори">
            </section>
            <section class="">
                <div class="scroll space-v">
                    <div class="content_head">
                        <div class="title">
                            Спеціальні пропозиції
                        </div>
                        <div class="subtitle">
                            Ми раді представити вам найкращі тури та вигідні промоції, щоб зробити ваші мрії про подорож
                            реальністю.
                        </div>
                    </div>
                    <div class="scroll__move">
                        <div class="scroll__line" id="line">                            
                        <?php
                            $offers = new WP_Query(array( 'category_name' => 'offers', 'posts_per_page' => '24' )); 
                            if ($offers->have_posts() ) :
                                while ( $offers->have_posts() ) : $offers->the_post(); ?>
                                
                                <div class="scroll__item">
                                    <img class="scroll__images"  src="<?php if(get_field('special_image')) {the_field('special_image');} ?>" alt="img">
                                    <div class="scroll_content">
                                        <p class="scroll__lab"><?php the_field('special_title'); ?><span class=" scroll__separator">@</span>
                                        </p>
                                        <div class="scroll__name">
                                        <?php the_field('special_city'); ?> <span class=" scroll__separator">@</span><span class="star" ><?php the_field('special_rating'); ?></span>
                                        </div>
                                        <p class="scroll__price"><strong>$<?php the_field('special_price'); ?>/</strong>людина</p>
                                    </div>
                                </div>
                        <?php endwhile; else :  ?>   
                                Пропозиції відсутні
                        <?php endif;  wp_reset_postdata();?> 
                        </div>
                    </div>
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
