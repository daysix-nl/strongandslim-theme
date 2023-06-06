<!-- ACCORDION -->
<div class="<?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
        <div class="grid gap-1 w-full justify-center">
  

            <?php

            // Check value exists.
            if( have_rows('repeater_accordion') ):

                // Loop through rows.
                while ( have_rows('repeater_accordion') ) : the_row();

                    // Case: Paragraph layout.
                    if( get_row_layout() == 'accordion_item' ): ?>

                            <div class="accordion-item rounded-3xl overflow-hidden "> 
                                <button class="accordion text-20 leading-20  font-medium px-3 items-center flex w-full"><?php the_sub_field('titel');?></button>
                                <div class="panel px-3">
                                    <p class="py-2 text-16 leading-30 pr-4"><?php the_sub_field('tekst');?></p>
                                </div>
                            </div>
                   <?php
                    endif;

                // End loop.
                endwhile;

            // No value.
            else :
                // Do something...
            endif; ?>
        </div>
</div>

        



