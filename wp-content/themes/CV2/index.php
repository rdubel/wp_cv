<?php get_header() ?>

<?php
    $cat = get_categories( array(
        'orderby' => 'include',
        'include' => array(2, 3, 7, 5, 4, 6)
    ));

    foreach ($cat as $key) {
        $all_posts[$key->cat_ID] = get_posts( array(
            'category' => $key->cat_ID
        ));

    }

    foreach ($all_posts as $postCat => $posts) {
        $category = get_category($postCat); ?>

        <section id='<?php echo $category->slug;  ?>' class="categories">
            <h2><?php echo get_cat_name($postCat) ?></h2>

            <?php foreach ($posts as $post) { ?>

            <h3><?php $post->post_title; ?></h3>

            <?php
            edit_post_link('Edit');
            $gradate = get_post_meta($post->ID, "Graduation Date");
            $train = get_post_meta($post->ID, "Training Date");
            ?>

            <p><?php echo $gradate[0] . $train[0]; ?></p>
            <p><?php echo $post->post_content; ?></p>

            <?php } ?>

        </section>

    <?php } ?>



<?php get_footer();
