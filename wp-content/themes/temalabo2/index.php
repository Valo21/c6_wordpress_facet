<?php get_header(); ?>

<section class="layout-principal">

    <?php get_sidebar(); ?>

    <main>

        <?php

        if (is_home()) {
            echo '
            <div class="bienvenida-alert alert alert-info alert-dismissible fade show" role="alert">
                <strong>¡Bienvenido!</strong> Explorá las últimas entradas del sitio a continuación.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
            ';
        }
        ?>

        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();

                echo '<article class="post-card">';

                echo '<h2 class="post-titulo">';
                echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
                echo '</h2>';

                echo '<div class="post-meta">';
                echo '<span>' . get_the_time('d/m/Y') . '</span>';
                echo '<span>' . get_the_author() . '</span>';
                echo '</div>';

                echo '<div class="post-contenido">';
                the_content();
                echo '</div>';

                echo '</article>';
            }
        } else {
            echo '<div class="no-posts">No hay entradas para mostrar.</div>';
        }
        ?>

    </main>

</section>

<?php get_footer(); ?>