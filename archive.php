<?php
get_header();
?>
<section class="portfolio-section">
    <h2 class="archive-title">
        <?php the_archive_title(); ?>
    </h2>

    <?php
    // echo "Hey, my theme is working";

    if (have_posts()) :
        // echo "We have posts!";
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content-works');
        endwhile;

    // the_posts_navigation();

    else :
        echo "We do NOT have posts";
    endif; ?>
</section>
<?php
get_footer();
