<?php

get_header();


if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content-works');
    endwhile; ?>
<?php elseif (is_404()) : ?>
    <div class="error">
        <p>Oops...404 Error</p>
        <p>Page not fund &#128533; </p>



    <?php else :
    get_template_part('template-parts/content-none.php');

endif;


get_footer();
