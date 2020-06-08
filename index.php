<?php
get_header();
?>
<!-- posts list -->
<section class="cpostlist">
    <!-- table posts -->
    <table class="table table-sm">
        <thead>
            <tr>
                <th class="th-releaser">Releaser</th>
                <th class="th-desc">Description</th>
                <th class="th-category">Category</th>
            </tr>
        </thead>
        <tbody>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <tr>
                        <td class="th-releaser"><?php the_author(); ?></td>
                        <td class="th-desc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                        <td class="th-category"><?php the_category('name'); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>

        </tbody>
    </table>
    <!-- pagination -->
    <div class="pagination d-flex justify-content-center pb-3 mb-4">
            <?= paginate_links(); ?>
    </div>
</section>
<?php
get_footer();
?>