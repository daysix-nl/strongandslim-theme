<!-- IMAGES - TEXT -->
<section class="section-image-fade-in <?php the_field('padding_top');?> <?php the_field('padding_bottom');?> bg-creme">
    <div class="container smaller-container grid md:grid-cols-2 gap-3 relative h-full md:h-[453px] lg:h-[472px]">
        <div class="hidden md:block col-span-1 relative h-full md:w-full md:max-w-[450px] lg:w-[450px] mx-auto">
            <img class="absolute top-0 left-0 w-full max-w-[280px] rounded-3xl object-cover max-h-[340px] h-full image-top" src="<?php the_field('afbeelding_1');?>" alt="<?php the_field('afbeelding_1_alt');?>">
            <img class="absolute bottom-0 right-0 w-full max-w-[280px] rounded-3xl object-cover max-h-[340px] h-full image-bottom" src="<?php the_field('afbeelding_2');?>" alt="<?php the_field('afbeelding_2_alt');?>">
        </div>  
        <div class="col-span-1 my-auto max-w-[650px] md:max-w-[460px]">
            <h2 class="text-green text-40 leading-40 md:text-60 md:leading-60 lg:text-70 lg:leading-70 mb-3 lg:mb-4 font-frederick-normal"><?php the_field('titel');?></h2>
            <p class="text-green text-20 leading-26"><?php the_field('tekst');?></p>
        </div>
        <div class="grid md:hidden col-span-1 grid-cols-2 gap-2">
            <img class="rounded-3xl object-cover h-[50vw] w-full col-span-1" src="<?php the_field('afbeelding_1');?>" alt="<?php the_field('afbeelding_1_alt');?>">
            <img class="rounded-3xl object-cover h-[50vw] w-full col-span-1" src="<?php the_field('afbeelding_2');?>" alt="<?php the_field('afbeelding_2_alt');?>">
        </div>
    </div>
</section>




