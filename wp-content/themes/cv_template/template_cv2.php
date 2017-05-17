<?php /* Template Name: CV2 */ ?>

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

    foreach ($all_posts as $postCat => $posts) { ?>
        <?php $category = get_category($postCat); ?>
        <section id='<?php echo $category->slug  ?>'>
            <h2><?php echo get_cat_name($postCat) ?></h2>
            <?php foreach ($posts as $post) { ?>
            <h3><?php echo $post->post_title ?></h3>
            <?php edit_post_link('Edit'); ?>
            <p><?php echo $post->post_content ?></p>
            <?php } ?>
        </section>

    <?php } ?>



<?php get_footer() ?>
