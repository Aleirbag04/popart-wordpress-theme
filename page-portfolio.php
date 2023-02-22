<?php
get_header(); ?>

<main id="main" class="site-portfolio">
    <div class="portfolio-section">
        <?php

        //Design Works query
        $design_query = new WP_Query(
            array(
                'post_type'       => 'portfolio',
                'category_name'   => 'design',
                'posts_per_page'  => '3',
                'orderby'         => 'rand'
            )
        );

        if ($design_query->have_posts()) : ?>
            <h2 class="title"> Design </h2>
        <?php
            while ($design_query->have_posts()) :
                $design_query->the_post();
                get_template_part('template-parts/content-works');
            endwhile;

        endif;
        ?>
    </div>

    <div class="portfolio-section">
        <?php

        //Code Works query
        $code_query = new WP_Query(
            array(
                'post_type'       => 'portfolio',
                'category_name'   => 'code',
                'posts_per_page'  => '3',
                'orderby'         => 'rand'
            )
        );

        if ($code_query->have_posts()) : ?>
            <h2 class="title"> Code </h2>
        <?php
            while ($code_query->have_posts()) :
                $code_query->the_post();
                get_template_part('template-parts/content-works');
            endwhile;

        endif;
        ?>
    </div>

    <div class="portfolio-section">
        <?php

        //Wordpress Works query
        $wordpress_query = new WP_Query(
            array(
                'post_type'       => 'portfolio',
                'category_name'   => 'wordpress',
                'posts_per_page'  => '3',
                'orderby'         => 'rand'
            )
        );

        if ($wordpress_query->have_posts()) : ?>
            <h2 class="title"> Wordpress </h2>
        <?php
            while ($wordpress_query->have_posts()) :
                $wordpress_query->the_post();
                get_template_part('template-parts/content-works');
            endwhile;

        endif;
        ?>
    </div>
</main>
<?php
get_footer();
