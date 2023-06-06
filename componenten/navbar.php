<section class="mobile-navbar lg:hidden">
  <div class="hamburger-overlay relative h-full min-h-[700px] md:min-h-[600px] overflow-hidden">
      <nav class="content-overlay grid gap-3 pt-[100px]">
          <a id="<?php the_field("id_link_header_dropdown", "option") ?>-mobile" href="<?php the_field("url_link_header_dropdown", "option") ?>" class="text-green hover:text-soft-peache duration-300 text-center text-35 leading-35 font-frederick-normal"><?php the_field("naam_header_dropdown", "option") ?></a>
          <?php if( have_rows('header_links', 'option') ): ?>
              <?php while( have_rows('header_links', 'option') ): the_row(); ?>
                  <a id="<?php the_sub_field("id_link", "option") ?>-mobile" class="text-green hover:text-soft-peache duration-300 text-center text-35 leading-35 font-frederick-normal" href="<?php the_sub_field("url_link", "option") ?>"><?php the_sub_field("naam_link", "option") ?></a>
              <?php endwhile; ?>
          <?php endif; ?>
          <?php if( have_rows('header_rechts', 'option') ): ?>
              <?php while( have_rows('header_rechts', 'option') ): the_row(); ?>
                  <a id="<?php the_sub_field("id_link", "option") ?>-mobile" class="text-green hover:text-soft-peache duration-300 text-center text-35 leading-35 font-frederick-normal" href="<?php the_sub_field("url_link", "option") ?>"><?php the_sub_field("naam_link", "option") ?></a>
              <?php endwhile; ?>
          <?php endif; ?>
                <a id="login-mobile" class="text-green hover:text-soft-peache duration-300 text-center text-35 leading-35 font-frederick-normal" href="/mijn-account">Login</a>
      </nav>
      <div class="absolute bottom-0 grid justify-center w-full">
        <p class="text-center text-14 leading-20 text-green">© <?php echo date("Y") ?>, Strong & Slim - Alle rechten voorbehouden.</p>
      </div>
  </div>
</section>