<?php get_header() ?>

<?php if(have_posts()): ?>

<?php while(have_posts()) : the_post() ?>

    <div class="post">
       <b><?php the_title() ?></b>
       <p><?php the_content() ?></p>
    </div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer() ?>