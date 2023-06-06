<section class="bg-creme <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container smaller-container grid grid-cols-2 md:grid-cols-4 relative gap-2 md:gap-3 lg:gap-5">
        <div class="col-span-2 md:col-span-4">
            <h2 class="text-green text-40 leading-40 md:text-60 md:leading-60 lg:text-70 lg:leading-70 font-frederick-normal text-center"><?php the_field('titel');?></h2>
            <p class="text-green text-20 leading-26 text-center mt-3 mx-auto max-w-[800px]"><?php the_field('tekst');?></p>     
        </div>  
        <?php
            // Check value exists.
            if( have_rows('repeater_categorieen') ):
                // Loop through rows.
                while ( have_rows('repeater_categorieen') ) : the_row(); 
                    // Case: Paragraph layout.
                    if( get_row_layout() == 'repeater_categorieen_item' ): ?>
                        <div class="col-span-1 ">
                            <a class="relative rounded-full overflow-hidden block aspect-[2/3] hover-product-uitgelicht" href="<?php the_sub_field('link');?>" id="<?php the_sub_field('link_id');?>">
                                <img class="w-full aspect-[2/3] object-cover" src="<?php the_sub_field('afbeelding');?>" alt="<?php the_sub_field('afbeelding_alt');?>">
                                <div class="py-[10px] px-3 bg-white w-fit h-fit rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-[2] overlay-text"><p class="uppercase font-frederick-normal text-25 leading-25 md:text-30 md:leading-30 lg:text-40 lg:leading-40 mt-[6px] text-green"><?php the_sub_field('titel');?></p></div>
                                <div class="bg-[#2E4A58]/[0.1] absolute top-0 left-0 w-full h-full rounded-full z-[1] overlay"></div>
                            </a>
                        </div>              
                        <?php
                    endif;
                // End loop.
                endwhile;
            // No value.
            else :
                // Do something...
            endif;
        ?>
        <div class="col-span-2 md:col-span-4 flex">
            <a class="block mx-auto py-1.5 px-3 bg-transparent border-2 border-soft-peache rounded-full transition-colors text-green hover:bg-soft-peache hover:text-white hover:transition-colors" href="<?php the_field('button_link');?>" id="<?php the_field('button_id');?>"><p class="text-18 leading-18 "><?php the_field('button_tekst');?></p></a>
        </div>
    </div>
</section>