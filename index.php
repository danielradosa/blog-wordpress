<?php get_header() ?>

<?php if (have_posts()) : the_post() ?>

    <?php while (have_posts()) : the_post() ?>

        <div class="post">
            <h1>
                <a href="<?php the_permaLink() ?>"><?php the_title() ?></a>
            </h1>
            <span><?php the_date() ?> at <?php the_time() ?></span>
            <p><?php the_content() ?></p>
        </div>

    <?php endwhile; ?>

    <div class="feet">
        <div class="older-posts">
            <?php  previous_posts_link("Previous posts") ?>
        </div>

        <div class="newer-posts">
            <?php next_posts_link("Newer posts") ?>
        </div>
    </div>

<?php endif; ?>

<?php get_footer() ?>