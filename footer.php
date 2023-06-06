<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>

<footer class="bg-white">
    <div class="container pb-3 ">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-5  gap-3 md:gap-5 border-t-2 border-creme pt-5">
            <div class="col-span-2 md:col-span-1">
                <a class="max-w-[180px] mt-[-10px] mb-1 w-full block h-6 overflow-hidden" href="">
                    <?php include get_template_directory() . '/img/icons/footer-logo.php'; ?>
                </a>
                <p class="text-14 leading-20 mb-[35px] text-green"><?php the_field('tekst_rij_1', 'option') ?></p>
                <div></div>
            </div>
            <div class="col-span-1 mt-1">
                <h4 class="text-26 leading-26 text-green font-frederick-normal uppercase h-5">contact</h4>
                <div class="flex flex-col">
                    <a id="<?php the_field('telefoonnummer_id_rij_2', 'option') ?>" class="text-14 leading-20 text-green hover:text-soft-peache" href="tel:<?php the_field('telefoonnumer_rij_2', 'option') ?>"><?php the_field('telefoonnumer_rij_2', 'option') ?></a>
                    <a id="<?php the_field('email_id_rij_2', 'option') ?>" class="text-14 leading-20 text-green hover:text-soft-peache" href="mailto:<?php the_field('email_rij_2', 'option') ?>"><?php the_field('email_rij_2', 'option') ?></a>
                </div>
                <div class="my-[25px]">
                    <h5 class="uppercase text-14 leading-20 text-green font-avenir-black">LOCATIE</h5>
                    <p class="text-14 leading-20 text-green"><?php the_field('straatnaam', 'option') ?></p>
                    <p class="text-14 leading-20 text-green"><?php the_field('postcode_plaatsnaam', 'option') ?></p>
                </div>
                <div>
                    <h5 class="uppercase text-14 leading-20 text-green font-avenir-black">KVK</h5>
                    <p class="text-14 leading-20 text-green"><?php the_field('kvk', 'option') ?></p>
                </div>
            </div>
            <div class="col-span-1 mt-1">
                <h4 class="text-26 leading-26 text-green font-frederick-normal uppercase h-5">SITEMAP</h4>
                <div>
                    <?php if( have_rows('rij_3', 'option') ): ?>
                        <?php while( have_rows('rij_3', 'option') ): the_row(); ?>
                            <a id="<?php the_field('id', 'option') ?>" href="<?php the_sub_field('link', 'option') ?>">
                                <p class="text-14 leading-20 text-green hover:text-soft-peache"><?php the_sub_field('naam', 'option') ?></p>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?> 
                </div>
            </div>
            <div class="col-span-1 mt-1">
                <h4 class="text-26 leading-26 text-green font-frederick-normal uppercase h-5">Categorie</h4>
                <div>
                    <?php if( have_rows('rij_4', 'option') ): ?>
                        <?php while( have_rows('rij_4', 'option') ): the_row(); ?>
                            <a id="<?php the_field('id', 'option') ?>" href="<?php the_sub_field('link', 'option') ?>">
                                <p class="text-14 leading-20 text-green hover:text-soft-peache"><?php the_sub_field('naam', 'option') ?></p>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?> 
                </div>
            </div>
            <div class="col-span-1 mt-1">
                <h4 class="text-26 leading-26 text-green font-frederick-normal uppercase h-5">Producten</h4>
                <div>
                    <?php if( have_rows('rij_5', 'option') ): ?>
                        <?php while( have_rows('rij_5', 'option') ): the_row(); ?>
                            <a id="<?php the_field('id', 'option') ?>" href="<?php the_sub_field('link', 'option') ?>">
                                <p class="text-14 leading-20 text-green hover:text-soft-peache"><?php the_sub_field('naam', 'option') ?></p>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?> 
                </div>
            </div>
        </div>
    </div>
    <section class="bg-green py-[15px]">
        <div class="container">
            <div class="flex justify-between flex-col sm:flex-row">
                <p class="text-white text-14 leading-14 mb-1 sm:mb-0">© <?php echo date("Y") ?>, Strong & Slim - Alle rechten voorbehouden.</p>
                <p class="text-white text-14 leading-14 "><a href="">Website made by <a href="https://digitalfc.nl"><u>DigitalFC</u></a></a></p>
            </div>
        </div>
    </section>
</footer>



<?php wp_footer(); ?>
</body>
</html>

