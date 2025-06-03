<?php
get_header();
?>
<main>
    <h1><?php bloginfo('name'); ?></h1>
    <div class="profiles">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
            <article class="profile-card">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="profile-img">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>
                <h2 class="profile-name"><?php the_title(); ?></h2>
                <div class="profile-excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="profile-link">View Profile</a>
            </article>
        <?php
            endwhile;
        else :
            echo '<p>No profiles found</p>';
        endif;
        ?>
    </div>
</main>
<?php
get_footer();
