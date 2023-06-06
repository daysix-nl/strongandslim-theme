<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
   
</head>
<style>
.woocommerce-error::before, .woocommerce-info::before, .woocommerce-message::before {
display: none !important;
}
	
	.woocommerce-info a {
		text-decoration: underline;
	}
</style>

<body <?php body_class( 'page-block ' ); ?> id="up">
    <header class="sticky top-[-30px] z-10">
        <section class="bg-creme h-3 flex"><p class="text-green my-auto mx-auto font-avenir-light text-12 leeading-28 font-stroke"><?php the_field("header_top", "option") ?></p></section>
        <section class="h-6 lg:h-8 bg-white relative z-10 header-white">
            <div class="container grid grid-cols-2 lg:grid-cols-3 items-center h-full">
                <div class="col-span-1 hidden lg:flex w-full">
                    <button class="button-producten mr-3 text-12 leading-28 font-avenir-light font-stroke uppercase"><a id="<?php the_field("id_link_header_dropdown", "option") ?>" href="<?php the_field("url_link_header_dropdown", "option") ?>"><?php the_field("naam_header_dropdown", "option") ?></a></button> 
                    <?php if( have_rows('header_links', 'option') ): ?>
                        <?php while( have_rows('header_links', 'option') ): the_row(); ?>
                            <a id="<?php the_sub_field("id_link", "option") ?>" class="mr-3 text-12 leading-28 font-avenir-light font-stroke  uppercase remove-link link-navbar" href="<?php the_sub_field("url_link", "option") ?>"><?php the_sub_field("naam_link", "option") ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-span-1 flex lg:justify-center">
                    <a href="/">
                        <?php include get_template_directory() . '/img/icons/logo.php'; ?>
                    </a>
                </div>
                <div class="col-span-1 hidden lg:flex justify-end w-full">
                    <?php if( have_rows('header_rechts', 'option') ): ?>
                        <?php while( have_rows('header_rechts', 'option') ): the_row(); ?>
                            <a id="<?php the_sub_field("id_link", "option") ?>" class="ml-3 text-12 leading-28 font-avenir-light font-stroke uppercase remove-link link-navbar" href="<?php the_sub_field("url_link", "option") ?>"><?php the_sub_field("naam_link", "option") ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <a href="/mijn-account" class="pl-3 flex items-center pb-[2px]"><svg width="auto" height="15px" viewBox="0 0 448 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="user-solid" fill="#37544F" fill-rule="nonzero">
                                <path d="M224,256 C294.692448,256 352,198.692448 352,128 C352,57.307552 294.692448,0 224,0 C153.307552,0 96,57.307552 96,128 C96,198.692448 153.307552,256 224,256 Z M178.3,304 C79.8,304 0,383.8 0,482.3 C0,498.7 13.3,512 29.7,512 L418.3,512 C434.7,512 448,498.7 448,482.3 C448,383.8 368.2,304 269.7,304 L178.3,304 Z" id="Shape"></path>
                            </g>
                        </g>
                    </svg>
                    </a>
                </div>
                <div class="col-span-1 flex lg:hidden justify-end">
                    <button class="hamburger-button border-b-[1px] border-green">Menu</button>
                </div>
            </div>
        </section>
        <div class="desktop-dropdown bg-white border-b-[1px] border-green/20">
            <div class="py-5 container">
                <div class="grid grid-cols-4 inner-dropdown px-10 min-h-[330px]">
                    <div class="col-span-1 flex">
                        <ul>
                            <?php $count = 0; if( have_rows('dropdown_categorieen', 'option') ):  ?>
                                <?php while( have_rows('dropdown_categorieen', 'option') ): the_row();  ?>
                                        <?php 
                                            $term = get_sub_field('categorie', 'option');
                                            if( $term ): 
                                        ?>
                                            <li  class="hover-element mb-1 <?php echo($count === 0 ? "active" : "") ?>" data-target="#<?php echo(str_replace(' ', '', $term->name)) ?>"><a class="uppercase text-16 leading-16 font-avenir-light" id="id="<?php the_sub_field('link_id', 'option'); ?>" href="<?php the_sub_field('url', 'option'); ?>"><?php the_sub_field('naam_url', 'option'); ?></a> </li>
                                        <?php  endif; ?>
                                <?php $count++;  endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>


                        <?php $countSecond = 0; if( have_rows('dropdown_categorieen', 'option') ):  ?>
                            <?php while( have_rows('dropdown_categorieen', 'option') ): the_row();  ?>

                                        <?php 
                                            $term = get_sub_field('categorie', 'option');

                                            if( $term ): 
                                        ?>
                                            <div id="<?php echo(str_replace(' ', '', $term->name)) ?>" class="col-span-3 grid grid-cols-3 gap-4 <?php echo($countSecond === 0 ? "" : "remove") ?>  all-cat ">


                                        <?php
                                            $args = array(
                                                'post_type' => 'product',
                                                'posts_per_page' => 3,
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'product_cat',
                                                        'field'    => 'slug',
                                                        'terms'    => $term->slug,
                                                    ),
                                                ),
                                                );
                                            $loop = new WP_Query( $args );
                                            if ( $loop->have_posts() ) {
                                                while ( $loop->have_posts() ) : $loop->the_post(); 
                                                $product = wc_get_product( get_the_ID() );
                                                $active_price  = $product->get_price();
                                                $regular_price = $product->get_regular_price();?>

                                                <div class="col-span-1  border-creme item-cat">
                                                    <a class="relative flex flex-col hover:scale-105 duration-300" href="<?php the_permalink(); ?>">
                                                        <img class="w-full h-full object-cover aspect-square rounded-full" src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" alt=""  style="background-image: url(<?php the_field('product_afbeelding_achtergrond');?>); background-repeat: no-repeat; background-size: cover;">
                                                        <p class="uppercase whitespace-pre-line text-22 leading-32 md:text-28 md:leading-38 font-frederick-normal text-green text-center mt-2"><?php echo $loop->post->post_title; ?></p>
                                                    </a>
                                                </div>  
                                                
                                                <?php
                                                    endwhile;
                                            } else {
                                                echo __( 'Geen producten gevonden.' );
                                            }
                                            wp_reset_postdata();
                                        ?>
                                        <?php $countSecond++; endif; ?>

                                    </div>       
                            <?php  endwhile; ?>
                        <?php endif; ?>
                    

                </div>
            </div>
        </div>
    </header>
    <div class="desktop-dropdown-overlay z-[5] fixed top-0 right-0 w-full h-full"></div>

    <?php include get_template_directory() . '/componenten/navbar.php'; ?>