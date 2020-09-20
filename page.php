<?php 
if(is_page()) {
 get_header('new');
}
else {
 get_header();
}
 wp_head();


while(have_posts()) {
    the_post(); ?>
    
    <div class="container-llarge">
    <div class="row-p d-flex justify-content-center">
        <div class="column-1-left">
             <?php  
             $theparent=wp_get_post_parent_id(get_the_ID());
            if ($theparent) { ?>
              <div class="metabox ">
              <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theparent); ?>"><i  aria-hidden="true"></i> Nazaj </a> <span class="metabox__main"><?php the_title(); ?></span></p>
             </div>
              <?php  } 
            ?><br>
           <h2><?php the_title(); ?></h2>
   <?php the_content();  ?>
</div>
<div class="column-1-right d-flex justify-content-center"><br>
    
    <?php 
    $testarray= get_pages(array(
        'child_of'=> get_the_ID()
    ));
    if($theparent or $testarray) { ?>
<div class="page-links ">
     <h2 class="page-links__title"><a href="<?php echo get_permalink($theparent); ?>"><?php echo get_the_title($theparent) ?></a></h2>
      <ul class="min-list child-ul">
        <?php 
        if($theparent) {
$findchildrenof=$theparent;
        } else {
         $findchildrenof=get_the_ID();   
        }
        wp_list_pages( array (
        'title_li'=>NULL,
        'child_of'=> $findchildrenof,
        'sort_column'=>'menu_order'  
        ));
        ?>
      </ul>
    </div>
    <?php } ?>
</div>
</div>
 </div>   
    
<?php }

 get_footer(); ?>