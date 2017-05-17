<?php /* Template Name: CV */ ?>

<?php get_header() ?>
    <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>

<?php
 ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php
    $infos = get_posts( array(
        'category' => 2
    ));
    $diplomas = get_posts( array(
        'category' => 3
    ));
    $experiences = get_posts( array(
        'category' => 4
    ));
    $formations = get_posts( array(
        'category' => 5
    ));
    $skills = get_posts( array(
        'category' => 7
    ));
    $fun = get_posts( array(
        'category' => 6
    ));
    echo "<div class=cat-container>";
    echo "<h2 id='infos'>Informations</h2>";
    foreach ($infos as $post) {
        ?>
        <h3><?php echo $post->post_title ?></h3>
        <p><?php echo $post->post_content ?></p>
    <?php }
    echo "</div>";
    echo "<div class=cat-container>";
    echo "<h2 id='diplomas'>Diplomas</h2>";
    foreach ($diplomas as $post) {
        ?>
        <h3><?php echo $post->post_title ?></h3>
        <p><?php echo $post->post_content ?></p>
    <?php }
    echo "</div>";
    echo "<div class=cat-container>";
    echo "<h2 id='experiences'>Experiences</h2>";
    foreach ($experiences as $post) {
        ?>
        <h3><?php echo $post->post_title ?></h3>
        <p><?php echo $post->post_content ?></p>
    <?php }
    echo "</div>";
    echo "<div class=cat-container>";
    echo "<h2 id='formations'>Formations</h2>";
    foreach ($formations as $post) {
        ?>
        <h3><?php echo $post->post_title ?></h3>
        <p><?php echo $post->post_content ?></p>
    <?php }
    echo "</div>";
    echo "<div class=cat-container>";
    echo "<h2 id='skills'>Skills</h2>";
    foreach ($skills as $post) {
        ?>
        <h3><?php echo $post->post_title ?></h3>
        <p><?php echo $post->post_content ?></p>
    <?php }
    echo "</div>";
    echo "<div class=cat-container>";
    echo "<h2 id='fun'>Hobbies</h2>";
    foreach ($fun as $post) {
        ?>
        <h3><?php echo $post->post_title ?></h3>
        <p><?php echo $post->post_content ?></p>
    <?php }
    echo "</div>";
     ?>


    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
