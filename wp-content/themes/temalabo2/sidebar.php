<aside class="col-md-2 bg-success bg-opacity-25">
    <hr>
    <h3>Entradas recientes</h3>
    <ul>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a> — ' . get_the_time('d/m/Y') . ' — ' . get_the_author() . '</li>';
            }
        }
        ?>
    </ul>
</aside>