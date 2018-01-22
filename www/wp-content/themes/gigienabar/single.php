<?php get_header(); ?>
<main id="main-container">
<div class="single-news">
<script>
 $(document).ready(function(){
  $(".scroll").css("display","none");
 });
 $(window).resize(function() {
  $(".scroll").css("display","none");
 });
</script>
<script>
 $(".top-line__menu").on("click","> span", function (event){
  $(".scroll").css("display","none");
 });
</script>
<?php
 while ( have_posts() ) : the_post();
  get_template_part( 'template-parts/content', get_post_format() );
 endwhile; // End of the loop.
?>
</div>
</main>
<?php get_footer();