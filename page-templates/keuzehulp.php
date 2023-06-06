<?php
/**
 * Template name: Keuzehulp
 */


 get_header('empty'); ?>

<style>
      body {
            background-image: url("/wp-content/themes/strongandslim-theme/img/local/Achtergrond2.jpg");
            background-repeat: no-repeat;
            background-size: auto;
            background-position: center;
      }
</style>

<main class=relative">
            <div class="absolute top-2 left-2 right-0"><a href="/" class="underline">Terug naar homepagina</a></div>
<div class="">
      <div class="max-w-[600px] mx-auto">
            <div class="keuzehulp h-screen flex flex-col justify-center">
                   <?php echo do_shortcode('[gravityform id="2" title="false"]'); ?>
             </div>
      </div>     
</div>
</main>

<?php get_footer('empty'); ?>