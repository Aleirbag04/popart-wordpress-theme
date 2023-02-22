<?php
get_header(); ?>
<main class="about-main">
    <section class="about-me">
        <h2>About me</h2>
        <div class="about-me-content">
            <p>I am a Post Degree Diploma in Web and Mobile Development student at Langara College,&nbsp; based in
                Vancouver, BC, Canada.</p>
            <p>I consider myself as a curious person that enjoys putting my creativity into every project that I face.</p>
            <p>When I’m not trying to learn and discover new things about development and design, I enjoy playing video
                games, chilling with my cats, or trying new outdoor activities.</p>
        </div>
        <div class="about-me-pic">

            <img src="http://gabrielafchaves.com/wp-content/uploads/2021/12/aboutme.jpg" alt="Gabriela Pic" class="aboutpic">


        </div>
        <div class="random-pics">

        </div>
    </section>
    <section class="random-facts">
        <h2>Random facts:</h2>
        <ul>
            <li>I am an Accountant.</li>
            <li>I have 3 cats that came to Canada with me from Uruguay.</li>
            <li>I enjoy cooking.</li>
            <li>I drink more coffe than I would like.</li>
            <li>My boyfriend says I am an eternal student. And I like that!</li>
        </ul>
    </section>

    <section class="mystory">
        <h2>My Story</h2>
        <p>If you are interested in knowing a little bit more about me, you can check the link below.</P>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('my-story', OBJECT, 'post'))); ?>"><?php esc_html_e('Read more', 'textdomain'); ?></a>
    </section>
</main>

<?php
get_footer(); ?>