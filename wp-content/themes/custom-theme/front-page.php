  <?php get_header() ?>
    <main>
        <h2>Strona główna</h2>
    </main>


<?php  
       if(have_posts() ){
           while( have_posts() ){
            the_post();
                ?>
                    <article style="border: 1px solid black; margin: 5px;">
                        <?php the_title('<h3>', '</h3>'); ?>
                        <?php the_content(); ?>
                    </article>

                <?php
           }
        }
 ?>



    
   <?php get_footer() ?>
    <?php // wp_footer() ?>
