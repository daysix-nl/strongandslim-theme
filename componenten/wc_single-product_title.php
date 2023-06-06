<?php the_title( '<h1 class="text-green text-40 leading-40 md:text-60 md:leading-60 lg:text-70 lg:leading-70 font-frederick-normal">', '</h1>' ); ?>
<?php global $product;?>
<p class="text-green text-20 leading-26"><?php echo $product->get_price_html(); ?></p>
<!-- USP -->
<div class="my-3 grid gap-[16px]">
    <?php if(get_field('usp_1')): ?>
        <div class="flex">
            <div class="w-fit mr-2"><?php include get_template_directory() . '/img/icons/vinkje.php'; ?></div>
            <div class="text-green text-20 leading-26"><?php the_field('usp_1');?></div>
        </div>
    <?php endif; ?>
    <?php if(get_field('usp_2')): ?>
        <div class="flex">
            <div class="w-fit mr-2"><?php include get_template_directory() . '/img/icons/vinkje.php'; ?></div>
            <div class="text-green text-20 leading-26"><?php the_field('usp_2');?></div>
        </div>
    <?php endif; ?>
    <?php if(get_field('usp_3')): ?>
        <div class="flex">
            <div class="w-fit mr-2"><?php include get_template_directory() . '/img/icons/vinkje.php'; ?></div>
            <div class="text-green text-20 leading-26"><?php the_field('usp_3');?></div>
        </div>
    <?php endif; ?>
    <?php if(get_field('usp_4')): ?>
        <div class="flex">
            <div class="w-fit mr-2"><?php include get_template_directory() . '/img/icons/vinkje.php'; ?></div>
            <div class="text-green text-20 leading-26"><?php the_field('usp_4');?></div>
        </div>
    <?php endif; ?>
</div>