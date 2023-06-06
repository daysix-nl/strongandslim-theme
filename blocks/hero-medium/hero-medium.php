<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<section class="relative <?php the_field('basis_achtergrond');?> overflow-hidden">
    <div class="absolute left-0 top-0 h-full md:w-[100vw] overflow-hidden acf-home-hero-achtergrond">
        <img class="w-full object-cover scale-150 image-floating" src="<?php the_field('huisstijl_achtergrond');?>" alt="<?php the_title();?>_hero">
    </div>
    <img class="hidden md:block absolute w-[40vw] right-0 top-0 h-full object-cover acf-home-hero-afbeelding" src="<?php the_field('afbeelding');?>" alt="<?php the_field('afbeelding_alt');?>">
    <section class="grid md:grid-cols-2  h-[300px] md:h-[400px] hero-home relative container">
        <div class="col-span-1 relative flex items-center h-[300px] md:h-[400px] w-full overflow-hidden ">
            <div class="relative z-[2] flex flex-col h-full justify-center">
                <h1 class="textcolor text-52 leading-42 lg:text-75 lg:leading-65 font-frederick-normal mt-auto pt-4"><?php the_title();?></h1>
                <p class="flex flex-row items-center  text-white text-15 mb-4 mt-auto"><a href="/">Home</a> <span class="w-[4px] h-[4px] rounded-full bg-white block mx-1"></span> <a href=""><?php the_title(); ?></a></p>
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