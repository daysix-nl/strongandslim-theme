<style>
    .section-50 {
        background: linear-gradient(0deg, rgba(255,255,255,1) 50%, rgba(240,233,227,1) 50%);
    }
</style>
<div class="<?php the_field('padding_top');?> bg-creme"></div>
<section class="bg-white">
    <div class="section-50">
        <div class="container smaller-container">
            <div class="grid md:grid-cols-2 rounded-3xl relative overflow-hidden <?php the_field('basis_achtergrond');?>">

                <div class="col-span-1 relative rounded-l-3xl overflow-hidden order-2 md:order-1">

                    <div class="relative z-[2] p-4 md:p-6 overflow-hidden rounded-l-3xl">
                        <img class="absolute top-0 rounded-l-3xl right-0 w-full h-full object-cover image-full acf-full-h-img" src="<?php the_field('huisstijl_achtergrond');?>" alt="">
                        <div class="relative">
                            <h3 class="textcolor text-40 leading-40 md:text-60 md:leading-60 font-frederick-normal uppercase"><?php the_field('titel');?></h4>
                            <p class="my-3 text-20 leading-26 text-white font-avenir-light "><?php the_field('tekst');?></p>
                            <a class="block py-1.5 px-3 bg-transparent border-2 border-soft-peache rounded-full transition-colors text-white hover:bg-soft-peache hover:text-white hover:transition-colors w-fit" href="<?php the_field('button_link');?>" id="<?php the_field('button_id');?>"><p class="text-18 leading-18 "><?php the_field('button_tekst');?></p></a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 overflow-hidden order-1 md:order-2">
                    <img class="w-full h-full scale-110 object-cover acf-full-h-img" src="<?php the_field('afbeelding');?>" alt="<?php the_field('afbeelding_alt');?>">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="<?php the_field('padding_bottom');?>"></div>