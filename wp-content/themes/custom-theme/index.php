<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bieszczadomki</title>

</head>
<body>

    <?php 
        if(have_posts() ){
           while( have_posts() ){
            the_post();
                ?>
                    <article style="border: 1px solid black; margin: 5px;">
                        <?php the_title('<h3>', '</h3>'); ?>
                        <?php the_excerpt(); ?>
                        <?php the_shortlink('czytaj dalej'); ?>
                    </article>

                <?php
           }
        }
    ?>

</body>
</html>