<section>
    <div class="container mt-4 grid sm:flex justify-between grid-cols-2 sm:grid-cols-none">
        <p class="flex flex-row items-center text-green text-15 order-6 sm:order-[unset] col-span-2"><a href="/">Home</a>  <span class="w-[4px] h-[4px] rounded-full bg-green block mx-1"></span> <a href="/producten">Producten</a> </p>
        	<div class="h-0">
                <?php
                /**
                 * Hook: woocommerce_archive_description.
                 *
                 * @hooked woocommerce_taxonomy_archive_description - 10
                 * @hooked woocommerce_product_archive_description - 10
                 */
                do_action( 'woocommerce_archive_description' );
                ?>
            </div>
    </div>
</section>





<section class="mt-4 mb-12">
    <div class="container grid grid-cols-4 relative ">



        <div class="filter-mobile md:col-span-1 h-screen fixed md:relative top-0 md:top-[unset] md:h-full bg-creme left-0 md:left-[unset] z-[20] md:z-[unset] w-screen md:w-auto md:bg-transparent pr-[12.5px]">
            <div class="w-full flex">
                <button class="filter-mobile-close mt-[50px] border-b-[1px] border-green text-green ml-auto mr-2 h-min my-auto md:hidden">Sluiten</button>
            </div>
            <div class="bg-creme rounded-3xl px-3 py-5 sticky top-10 input-block">
            <?php if ( is_active_sidebar( 'filter-sidebar' ) ) { ?>
                <?php dynamic_sidebar( 'filter-sidebar' ); ?>
            <?php } ?>
        </div>
        <div class="card-container col-span-4 md:col-span-3 grid grid-cols-2 md:grid-cols-3 relative md:pl-2">
            <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1,

                    );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    $product = wc_get_product( get_the_ID() );
                    $active_price  = $product->get_price();
                    $regular_price = $product->get_regular_price();?>

                    <div class="col-span-1 border-b-[1px] border-creme pb-4 mb-4 px-[12.5px]">
                        <a class="relative flex flex-col hover:scale-105 duration-300" href="<?php the_permalink(); ?>">
                            <img class="w-full h-full object-cover aspect-square rounded-full" src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" alt=""  style="background-image: url(<?php the_field('product_afbeelding_achtergrond');?>); background-repeat: no-repeat; background-size: cover;">
                            <p class="uppercase text-22 leading-32 md:text-28 md:leading-38 font-frederick-normal text-green text-center my-[15px]"><?php echo $loop->post->post_title; ?></p>
                            <!-- <p class="text-14 leading-20 text-green font-avenir-light text-center">90 Vegacaps</p> -->
                            <p class="text-14 leading-20 text-green font-avenir-black text-center"><?php if ( $price_html = $product->get_price_html() ) : ?><?php echo $price_html; ?><?php endif; ?></p>
                        </a>
                    </div>  
                    
                    <?php
                        endwhile;
                } else {
                    echo __( 'Geen producten gevonden.' );
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<button class="md:hidden filter-mobile-open fixed bottom-0 w-full h-6 bg-blue text-white uppercase text-24 leading-32 md:text-28 md:leading-38 font-frederick-normal text-center">filter</button>

