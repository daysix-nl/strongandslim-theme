<?php while ( have_posts() ) : ?>
<?php the_post(); ?>
<?php
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
} ?>



<section>
    <div class="container mt-4 grid sm:flex justify-between grid-cols-2 sm:grid-cols-none">
        <p class="flex flex-row items-center text-green text-15 order-6 sm:order-[unset] col-span-2"><a href="/">Home</a>  <span class="w-[4px] h-[4px] rounded-full bg-green block mx-1"></span> <a href="/producten">Producten</a> <span class="w-[4px] h-[4px] rounded-full bg-green block mx-1"></span> <a href=""><?php the_title(); ?></a></p>
        <p class="flex flex-row items-center text-green text-[14.56px] justify-end col-span-2 mb-2 sm:mb-0"><a href="javascript:history.go(-1)" class="back-button">Stap terug</a> </p>
    </div>
</section>
    <!-- Swiper -->
        <?php 
        defined( 'ABSPATH' ) || exit;
        // Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
        if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
            return;
        }
        global $product;
        ?>
        <section class="mt-4 mb-10" id="up">
            <div class="container grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="cols-span-1">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                             <div class="swiper-slide rounded-3xl overflow-hidden h-full w-full cursor-grabbing" style="background-image: url(<?php the_field('product_afbeelding_achtergrond');?>); background-repeat: no-repeat; background-size: cover;">
                                <img class="aspect-square object-cover h-full w-full" src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" />
                            </div>                                  
                        <?php $attachment_ids = $product->get_gallery_image_ids();
							foreach( $attachment_ids as $attachment_id ) 
							{ ?>
                             <div class="swiper-slide rounded-3xl overflow-hidden w-full cursor-grabbing" style="background-image: url(<?php the_field('product_afbeelding_achtergrond');?>); background-repeat: no-repeat; background-size: cover;">
                                <img class="aspect-square object-cover h-full w-full" src="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>" />
                            </div>   
						<?php } ?>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper mt-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide rounded-3xl overflow-hidden h-full w-full cursor-pointer" style="background-image: url(<?php the_field('product_afbeelding_achtergrond');?>); background-repeat: no-repeat; background-size: cover;">
                                <img class="aspect-square object-cover h-full w-full" src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" />
                            </div>    
                        <?php $attachment_ids = $product->get_gallery_image_ids();
							foreach( $attachment_ids as $attachment_id ) 
							{ ?>
                             <div class="swiper-slide rounded-3xl overflow-hidden w-full cursor-pointer" style="background-image: url(<?php the_field('product_afbeelding_achtergrond');?>); background-repeat: no-repeat; background-size: cover;">
                                <img class="aspect-square object-cover h-full w-full" src="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>" />
                            </div>   
						<?php } ?>
                        </div>
                    </div>
                            </div>
                <div class="col-span-1">
                    <div class="bg-creme p-4 rounded-3xl overflow-hidden">
                        <?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action( 'woocommerce_single_product_summary' );
					?>
                    </div>
                </div>
            </div>


        </section>
        <!-- Tabs -->
        <section class="my-12">
            <div class="container grid grid-cols-4 gap-3">
                <div class="col-span-4">
                    <div class="tab-wrapper h-auto">
                        <div class="tab-header flex flex-col md:flex-row">
                            <?php

                                // Check rows existexists.
                                if( have_rows('informatie_repeater') ):

                                    // Loop through rows.
                                    while( have_rows('informatie_repeater') ) : the_row(); ?>
                                        <button class="tab-btn text-14 md:text-20 font-avenir-black md:mr-10"><?php the_sub_field('titel');?></button>
                                    <?php
                                    // End loop.
                                    endwhile;

                                // No value.
                                else :
                                    // Do something...
                                endif;
                            ?>
                            <div class="underline hidden md:flex"></div>
                        </div>
                        <div class="tab-body">
                                <?php

                                // Check rows existexists.
                                if( have_rows('informatie_repeater') ):

                                    // Loop through rows.
                                    while( have_rows('informatie_repeater') ) : the_row(); ?>
                                    <div class="tab-content">
                                        <div class="text-14 text-white"><?php the_sub_field('tekst');?></div>
                                    </div>
                                    <?php
                                    // End loop.
                                    endwhile;

                                // No value.
                                else :
                                    // Do something...
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-span-1">
                    <div class="p-[35px] bg-creme rounded-3xl">
                        <p class="text-28 leading-28 text-green font-frederick-normal">Hier een gezondheids-claim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                        <p class="text-14 leading-24 text-green font-avenir-light mt-2">- DigitalFC</p>
                    </div>
                </div> -->
            </div>
        </section>


<section class="mb-12">
    <div class="container grid grid-cols-2 md:grid-cols-4 relative gap-y-4 gap-x-2.5">
        <div class="col-span-2 md:col-span-4">
            <h2 class="text-green text-40 leading-40 md:text-60 md:leading-60 lg:text-70 lg:leading-70 font-frederick-normal">Gerelateerde producten</h2>
        </div>  

                <?php   global $post;
                $terms = get_the_terms( $post->ID, 'product_cat' );
                $nterms = get_the_terms( $post->ID, 'product_tag'  );
                foreach ($terms  as $term  ) {
                    $product_cat_id = $term->term_id;
                    $product_cat_name = $term->name;
                    break;
                }
                ?>
                        <?php                     
                        $loop = new WP_Query( array(
                            'post_type' => 'product',
                            'posts_per_page' => 4,
                            'orderby' => 'RAND',
							'product_cat' => $product_cat_name,
                             'post__not_in' => array( get_the_ID() ) // voeg hier de huidige post ID toe
                        ));
                        ?>

                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="col-span-1">
                            <a class="relative flex flex-col hover:scale-105 duration-300" href="<?php the_permalink(); ?>">
                                <img class="w-full h-full object-cover aspect-square rounded-full" src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" alt="" style="background-image: url(<?php the_field('product_afbeelding_achtergrond');?>); background-repeat: no-repeat; background-size: cover;">
                                <p class="uppercase text-22 leading-32 md:text-28 md:leading-38 font-frederick-normal text-green text-center my-[15px]"><?php echo $loop->post->post_title; ?></p>
                                <!-- <p class="text-14 leading-20 text-green font-avenir-light text-center">90 Vegacaps</p> -->
                                <p class="text-14 leading-20 text-green font-avenir-black text-center"><?php if ( $price_html = $product->get_price_html() ) : ?><?php echo $price_html; ?><?php endif; ?></p>
                            </a>
                        </div>  
                        <?php endwhile; wp_reset_query(); ?>









       
    </div>
</section>






<?php do_action( 'woocommerce_after_single_product' ); ?>
<?php endwhile; // end of the loop. ?>


   <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 0,
  effect: 'fade',
        thumbs: {
        swiper: swiper,
        },
    });
    </script>

<script>
setTimeout(function() {
    jQuery('.woocommerce-message').slideUp()
}, 3000);
</script>