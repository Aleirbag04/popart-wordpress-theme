<?php

get_header(); ?>

<main class="contact-main">
    <div class="contact-form">
        <h2>Send me an email</h2>
        <?php echo do_shortcode(
            '[contact-form-7 id="91" title="Contact me"]'
        ); ?>
    </div>
</main>
<?php
get_footer();
