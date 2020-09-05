<?php 
get_header();
while(have_posts()) {
    the_post();?>

    <div class="position1"> 
   <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
</div>
hhhhhh
<?php }
get_footer();
?>