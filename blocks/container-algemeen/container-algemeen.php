<section class="bg-creme <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container grid grid-cols-1 relative  py-4 md:py-5">
        <?php $allowed_blocks_inner = ['acf/inner-block-accordion', 'acf/inner-block-button', 'acf/inner-block-image', 'acf/inner-block-video', 'acf/inner-block-images', 'acf/inner-block-subtitle', 'acf/inner-block-title', 'acf/inner-block-text',];?>
        <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks_inner ) ); ?>"/>
    </div>
</section>