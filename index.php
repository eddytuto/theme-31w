<?php get_header(); ?> 
<h1>Mon premier modèle Wordpress</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>


<?php $lien = "<a href='" . get_permalink()  . "'>lien</a>"; 
echo $lien;
?>
<p><?= wp_trim_words(get_the_content(), 20, "") ?></p>


    <?php endwhile; ?>
<?php endif; ?>    

<?php get_footer(); ?>