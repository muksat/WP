<?php get_header();?>


<?php

while(have_posts()){

the_post();?>

<h1>This is page</h1>
<?php the_content();?>



<?php } ?>

<?php get_footer();?>