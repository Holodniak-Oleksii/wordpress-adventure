<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>
        <main class="main">
            <section class="contact wrapper">
                <div class="card">
                    <span class="title">Запитай нас</span>
                    <?php echo do_shortcode('[contact-form-7 id="159" title="Contact"]'); ?>

                </div>

            </section>
        </main>
<?php get_footer(); ?>
