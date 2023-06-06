<section class="py-8 custom-block">
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="col-span-1 pr-10">
            <h3 class="mb-2 text-dark-green text-40 leading-40 text-green font-frederick-normal pr-2"><?php the_field('titel');?></h3>
            <p class="text-16 leading-30 font-heebo-regular text-black mt-2 mb-4"><?php the_field('tekst');?></p>
            <div class="flex flex-col">
                <p class="text-26 leading-26 text-green font-frederick-normal uppercase h-5">Strong & Slim</p>
                <a href="tel:+<?php the_field('telefoonnummer', 'option') ?>"><p class="text-16 leading-30 font-heebo-normal text-black hover:text-green hover:transition-colors"><?php the_field('telefoonnumer_rij_2', 'option') ?></p></a>
                <a href="mailto:<?php the_field('email', 'option') ?>"><p class="text-16 leading-30 font-heebo-normal text-black hover:text-green hover:transition-colors"><?php the_field('email_rij_2', 'option') ?></p></a>
                <p class="text-16 leading-30 font-heebo-normal text-black"><?php the_field('kvk', 'option');?></p>
            </div>
            <div class="flex flex-row mt-4">
                    <?php if (get_field('facebook')): ?>
                        <a target="_blank" class="mr-[15px] footer-icons" href="<?php the_field('facebook') ?>">
                            <?php include get_template_directory() . '/img/icons/facebook.php'; ?>
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('instagram')): ?>
                        <a target="_blank" class="mr-[15px] footer-icons" href="<?php the_field('instagram') ?>">
                            <?php include get_template_directory() . '/img/icons/instagram.php'; ?>
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('linkedin')): ?>
                        <a target="_blank" class="footer-icons" href="<?php get_field('linkedin') ?>">
                            <?php include get_template_directory() . '/img/icons/linkedin.php'; ?>
                        </a>
                    <?php endif; ?>
            </div>
        </div>
        <div class="col-span-1">
            <div class="bg-creme p-4">
                <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
            </div>
        </div>
    </div>
</section>