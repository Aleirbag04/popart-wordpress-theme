<?php ?>
<article <?php post_class(); ?>>

    <div class="entry-content">
        <?php
        if (is_single()) : ?>
            <h2 class="entry-title">
                <?php the_title(); ?>
            </h2>
            <div class="project-date">
                <p> Date: <?php the_field('project_date'); ?> </p>
            </div>
            <div class="project-client">
                <p>Client: <?php the_field('project_client'); ?> </p>
            </div>
            <div class="entry-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="project-content">
                <?php the_content(); ?>
            </div>
            <div class="entry-footer">
                <div class="entry-category">
                    <p><i class="fas fa-hat-wizard"></i> Category:
                        <?php the_category('&bull; '); ?> </p>
                </div>
                <div class="entry-tags">
                    <p><i class="fas fa-bomb"></i> Tags:
                        <?php the_tags(" ", " | "); ?> </p>
                </div>
            </div>
        <? else : ?>
            <div class="entry-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            </div>
            <div class="entry-category">
                <?php if (in_category('design')) : ?>
                    <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/design.png" alt="Design Category" class="design">
                <?php elseif (in_category('code')) : ?>
                    <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/code.png" alt="Code Category" class="code">
                <?php elseif (in_category('wordpress')) : ?>
                    <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/wp.png" alt="Wordpress Category" class="wp">
                <? else : ?>
                <?php endif;
                ?>
            </div>
        <? endif;
        ?>
    </div>

</article>