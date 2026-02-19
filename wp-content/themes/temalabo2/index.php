<?php get_header(); ?>
<section class="d-flex">
    <?php get_sidebar(); ?>
    <main>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                echo ('<article class="card shadow-sm mb-4">');
                echo ('<div class="card-body">');
                echo ('<h2 class="card-title h4">' . get_the_title() . '</h2>');
                echo ('<p class="text-muted small mb-2">Por: ' . get_the_author() . '</p>');
                echo ('<div class="card-text">' . get_the_excerpt() . '</div>');
                if (is_single() && get_post_type() == "post") {
                    echo ('<a href="' . get_the_permalink() . '" class="btn btn-primary mt-3">Leer más</a>');
                }
                echo ('</div>');
                echo ('</article>');
            }
        }
        ?>
    </main>
</section>
<?php get_footer(); ?>
