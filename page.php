<?php
get_header();
?>
<section class="cpost mt-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<hr>
<?php
get_footer();
?>