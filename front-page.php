<?php
get_header(); ?>

<main id="main" class="site-main">

    <div class="section">
        <?php

        //Random Portfolio Works query
        $random_query = new WP_Query(
            array(
                'post_type'       => 'portfolio',
                'posts_per_page'  => '3',
                'orderby'         => 'rand'
            )
        );

        if ($random_query->have_posts()) : ?>
            <h2 class="title"> Some of my works </h2>
        <?php
            while ($random_query->have_posts()) :
                $random_query->the_post();
                get_template_part('template-parts/content-works');
            endwhile;
        else :
            get_template_part('template-parts/content-none.php');
        endif;
        ?>
    </div>
</main>
<?php
get_footer();
