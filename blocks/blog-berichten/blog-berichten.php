<section class="bg-creme <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container grid grid-cols-2 md:grid-cols-3 relative gap-2 md:gap-3">
        
            <?php
                $loop = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                )
                );
                ?>
           <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
           <a href="<?php the_permalink();?>" class="col-span-1">
                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="aspect-[3/2] object-cover rounded-3xl">
                <h2 class="text-green text-24 leading-24 mt-1 ml-1"><?php the_title();?></h2>
            </a>
           <?php endwhile; wp_reset_query(); ?>

       
    </div>
</section>