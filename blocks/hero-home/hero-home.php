<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<section class="relative <?php the_field('basis_achtergrond');?> h-[70vh] md:h-[50vw] md:max-h-[89vh] min-h-[670px] md:min-h-[580px]">
    <!-- BACKGROUND -->
    <div class="absolute left-0 top-0 h-full w-[100vw] overflow-hidden acf-home-hero-achtergrond">
        <img class=" w-full object-cover scale-150 h-full image-floating" src="<?php the_field('huisstijl_achtergrond');?>" alt="<?php the_title();?>_hero">
    </div>
    <!-- IMAGE -->
  <img class="absolute w-full h-[35vh] min-h-[255px] md:min-h-[unset] max-h-[255px] md:max-h-[unset] md:w-[50vw] right-0 top-0 md:h-full object-cover object-top acf-home-hero-afbeelding" src="<?php the_field('afbeelding');?>" alt="<?php the_field('afbeelding_alt');?>">
    <!-- CONTENT -->
    <section class="grid md:grid-cols-2 h-full hero-home relative mx-2">
        <div class="block md:hidden col-span-1 h-[35vh] min-h-[255px] md:min-h-[unset] max-h-[255px] md:max-h-[unset]"></div>
        <div class="col-span-1 relative my-auto grid justify-center overflow-hidden h-[35vh] md:h-full min-h-[365px]">
            <div class="relative w-fit h-fit z-[2] my-auto md:px-2 lg:px-0">
                <h1 class="text-gray text-48 leading-38 lg:text-75 lg:leading-65 font-frederick-normal mb-[15px] lg:mb-3  lg:max-w-[480px]"><?php the_field('titel');?></h1>
                <p class="md:text-18 md:leading-21 xl:text-20 xl:leading-26 text-white font-avenir-light max-w-[500px] mb-2 lg:mb-4"><?php the_field('tekst');?></p>
                <a class="text-18 leading-18 block py-1.5 px-3 bg-transparent border-2 border-soft-peache rounded-full transition-colors text-white hover:bg-soft-peache hover:text-white hover:transition-colors w-fit" href="<?php the_field('button_link');?>" id="<?php the_field('button_id');?>"><?php the_field('button_tekst');?></a>
            </div>
        </div>
    </section>
</section>
<script>
    try {
  var mArea = document.querySelector("body");

  // 1. Set the function and variables
  function parallaxIt(e, target, movement = 0.05) {
    var boundingRect = mArea.getBoundingClientRect();
    var relX = e.pageX - boundingRect.left;
    var relY = e.pageY - boundingRect.top;
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    gsap.to(target, {
      x: (relX - boundingRect.width / 2) * movement,
      y: (relY - boundingRect.height / 2 - scrollTop) * movement,
      ease: "power1",
      duration: 0.6,
    });
  }

  // 2. Call the function
  function callParallax(e) {
    parallaxIt(e, ".image-floating");
  }

  mArea.addEventListener("mousemove", function (e) {
    callParallax(e);
  });
} catch (error) {}
</script>