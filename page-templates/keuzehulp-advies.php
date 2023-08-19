<?php
/**
 * Template name: Keuzehulp advies
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

<main class="relative">
      <div class="absolute top-2 left-2 right-0"><a href="/" class="underline">Terug naar homepagina</a></div>
      <div class="container py-12">
            <h1 class="pb-3 text-green text-40 leading-40 md:text-60 md:leading-60 font-frederick-normal">Ons advies:</h1>
                  <?php $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
            
            
                  <?php
                        if(isset($_GET['advice']) && $_GET['advice'] === '1') {
                        ?>
                        <!-- ADVIES 1 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Als jouw doel met betrekking tot het sporten is dat je gezond wilt blijven zijn er een aantal supplementen die voor jou van belang kunnen zijn. Belangrijk is natuurlijk gezonde en gevarieerde voeding maar (sport)supplementen kunnen een welkome aanvulling zijn. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke (sport)supplementen erg belangrijk kunnen zijn bij het behouden van je gezondheid.</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Zelfs als je maar 1 keer per week traint en je voornaamste doel niet het opbouwen van spiermassa is kan whey proteïne een nuttige aanvulling zijn op het behouden van je spiermassa. Als je regelmatig maaltijden overslaat of niet bij elke maaltijd een eiwitbron neemt is het nuttig om aanvulling met een eiwit- of proteïneshake in overweging te nemen. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om mee te nemen om zodoende je eiwitgehalte op peil te houden.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                              <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                              <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                          <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              
                             
                          
                        <?php
                        }
                         elseif(isset($_GET['advice']) && $_GET['advice'] === '2') {
                        ?>

                        <!-- ADVIES 2 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Als jouw doel met betrekking tot het sporten is dat je gezond wilt blijven zijn er een aantal supplementen die voor jou van belang kunnen zijn. Belangrijk is natuurlijk gezonde en gevarieerde voeding maar (sport)supplementen kunnen een welkome aanvulling zijn. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het behouden van je gezondheid.</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Bij 3 a 4 keer sporten per week is er al snel sprake van een behoorlijke belasting van de spieren en deze spieren hebben dan ook extra eiwitten nodig. Whey proteïne is dan een nuttige aanvulling voor het behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om je eiwitgehalte op peil te houden.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                               <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                              <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                           <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden. </p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              
                             
                        <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '3') {
                        ?>
                        <!-- ADVIES 3 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Als jouw doel met betrekking tot het sporten is dat je gezond wilt blijven zijn er een aantal supplementen die voor jou van belang kunnen zijn. Belangrijk is natuurlijk gezonde en gevarieerde voeding maar (sport)supplementen kunnen een welkome aanvulling zijn. Zeker bij 4 keer of meer per week trainen. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het behouden van je gezondheid.</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Bij 4 keer of meer sporten per week is er al snel sprake van een zware belasting van de spieren en deze spieren hebben dan ook extra eiwitten nodig. Whey proteïne is dan een nuttige aanvulling voor  behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om je eiwitgehalte op peil te houden.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                               <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                              <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                          <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden.  </p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              

                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine B-complex</h2>
                                          <p class="pb-2">Bij zoveel keer trainen in de week kan je alle energie gebruiken die je uit je lichaam kan halen. Vitamine B-complex is bij uitstek de vitamine die van belang is voor het ondersteunen van je energieniveau omdat ze vetten, eiwitten en koolhydraten kunnen omzetten in energie. Dit vergroot  je uithoudingsvermogen. Vitamine B1, B2, B3, B5, B6 en B12 zijn allemaal van belang voor het energieniveau.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 30 Vegacapsules - € 11,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=760" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 90 Vegacapsules - € 29,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=761" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>

                   <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '4') {
                        ?>
                        <!-- ADVIES 4 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Sporten, en dan met name krachttraining, kan je helpen gespierder te worden. Door middel van krachttraining bouw je extra spierweefsel op en dit heeft als extra voordeel dat je op lange termijn vet verbrand. Deze krachttrainingen vragen echter wel veel van je lichaam en hiervoor is goede, gevarieerde voeding onontbeerlijk. Aanvulling met (sport)supplementen bieden hierin een uitkomst. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het bereiken van je doel:</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Ook als je 1 of 2 keer per week sport om spiermassa te kweken heeft je lichaam extra eiwitten nodig. Whey proteïne is dan een nuttige aanvulling voor behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne). Deze eiwitten/proteïne kan je aanvullen middels een proteïne shake, proteïne pannenkoeken of proteïne reep. De reep is met name makkelijk om mee te nemen, vooral als je af en toe een maaltijd vergeet/overslaat.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                               <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium bij kracht -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium bij kracht </h2>
                              <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert. Aan Magnesium bij Kracht is “Gember Wortelextract” toegevoegd. Dit ondersteund het behoud van sterke en soepele spieren en verminderd pijnlijke spieren na krachttraining of loopsessie.</p>
                                    <<div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38390_Magnesium-bij-Kracht-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium bij Kracht - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=594" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                           <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de herfst en winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden. Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden. </p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              

                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine B-complex</h2>
                                          <p class="pb-2">Bij zoveel keer trainen in de week kan je alle energie gebruiken die je uit je lichaam kan halen. Vitamine B-complex is bij uitstek de vitamine die van belang is voor het ondersteunen van je energieniveau omdat ze vetten, eiwitten en koolhydraten kunnen omzetten in energie. Dit vergroot  je uithoudingsvermogen. Vitamine B1, B2, B3, B5, B6 en B12 zijn allemaal van belang voor het energieniveau.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 30 Vegacapsules - € 11,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=760" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 90 Vegacapsules - € 29,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=761" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>

                        <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '5') {
                        ?>
                        <!-- ADVIES 5 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Sporten, en dan met name krachttraining, kan je helpen gespierder te worden. Door middel van krachttraining bouw je extra spierweefsel op en dit heeft als extra voordeel dat je op lange termijn vet verbrand. Deze krachttrainingen vragen echter wel veel van je lichaam en hiervoor is goede, gevarieerde voeding onontbeerlijk. Aanvulling met (sport)supplementen bieden hierin een uitkomst. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het bereiken van je doel:</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Bij 3 of 4 keer sporten per week is er al snel sprake van een behoorlijke belasting van de spieren en deze spieren hebben dan ook extra eiwitten nodig voor behoud maar zeker ook voor herstel en groei. Whey proteïne is dan een nuttige aanvulling voor behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne). Dit kan je aanvullen middels een proteïne shake, proteïne pannenkoeken of een proteïne reep. De reep is met name makkelijk om mee te nemen, vooral als je af en toe een maaltijd vergeet/overslaat.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                              <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium bij kracht -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium bij kracht</h2>
                              <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert. Aan Magnesium bij Kracht is “Gember Wortelextract” toegevoegd. Dit ondersteund het behoud van sterke en soepele spieren en verminderd pijnlijke spieren na krachttraining of loopsessie.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38390_Magnesium-bij-Kracht-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium bij Kracht - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=594" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                              
                              <!-- Creatine monohydraat -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Creatine monohydraat</h2>
                              <p class="pb-2">Deze stof stelt je in staat om meer energie uit je spieren te halen waardoor je net die aantal meer reps kan maken. Daar komt ook nog eens bij dat je lichaam zich na een training sneller hersteld. (lees meer in de blog van Strong & Slim over creatine)</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/39825_Creatine-Monohydraat-poeder-200-gram.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Creatine Monohydraat poeder - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=597" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                          <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden. Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden. </p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              
                         <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '6') {
                        ?>
                        <!-- ADVIES 6 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Sporten, en dan met name krachttraining, kan je helpen gespierder te worden. Door middel van krachttraining bouw je extra spierweefsel op en dit heeft als extra voordeel dat je op lange termijn vet verbrand. Deze krachttrainingen vragen echter wel veel van je lichaam, zeker als je zo vaak per week traint. Hiervoor is goede, gevarieerde voeding onontbeerlijk. Aanvulling met (sport)supplementen bieden hierin een uitkomst. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het bereiken van je doel:</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Zeker als je meer dan 4 keer per week sport om spiermassa te kweken heeft je lichaam extra eiwitten nodig. Whey proteïne is dan een nuttige aanvulling voor behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne). Deze extra eiwitten kan je aanvullen middels een proteïne shake, proteïne pannenkoeken of proteïne reep. De reep is met name makkelijk om mee te nemen als je af en toe een maaltijd vergeet/overslaat.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                              <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium bij kracht -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium bij kracht </h2>
                             <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert. Aan Magnesium bij Kracht is “Gember Wortelextract” toegevoegd. Dit ondersteund het behoud van sterke en soepele spieren en verminderd pijnlijke spieren na krachttraining of loopsessie.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38390_Magnesium-bij-Kracht-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium bij Kracht - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=594" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Creatine monohydraat  -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Creatine monohydraat  </h2>
                              <p class="pb-2">Deze stof stelt je in staat om meer energie uit je spieren te halen waardoor je net die aantal meer reps kan maken. Daar komt ook nog eens bij dat je lichaam zich na een training sneller hersteld. (lees meer in de blog van Strong & Slim over creatine) </p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                              
                              <!-- Co-Enzym Q10  -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Co-Enzym Q10  </h2>
                              <p class="pb-2">Co-Enzym Q10 is een natuurlijke stof die een belangrijke rol speelt bij het vrijmaken van energie in onze cellen. Wanneer jij je meer dan gemiddeld inspant kan je Q10 gebruiken voor de energieproductie, voor meer spierkracht en een efficiënt zuurstoftransport. Co-enzym Q10 is verder ook een belangrijke antioxidant. </p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/34100_Co-Enzym-Q10-Ubiquinon-30-mg-60-caps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Co-Enzym Q10 Ubiquinon - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=577" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                           <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden. Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden. </p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              

                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine B-complex</h2>
                                          <p class="pb-2">Bij zoveel keer trainen in de week kan je alle energie gebruiken die je uit je lichaam kan halen. Vitamine B-complex is bij uitstek de vitamine die van belang is voor het ondersteunen van je energieniveau omdat ze vetten, eiwitten en koolhydraten kunnen omzetten in energie. Dit vergroot  je uithoudingsvermogen. Vitamine B1, B2, B3, B5, B6 en B12 zijn allemaal van belang voor het energieniveau.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 30 Vegacapsules - € 11,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=760" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 90 Vegacapsules - € 29,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=761" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>                  
                         <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '7') {
                        ?>
                        <!-- ADVIES 7 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Als jouw doel met betrekking tot het sporten is dat je gewicht wilt verliezen zijn er een aantal supplementen die voor jou van belang kunnen zijn. Belangrijk is natuurlijk gezonde en gevarieerde voeding maar (sport)supplementen kunnen een welkome aanvulling zijn. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het behouden van je gezondheid.</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Zelfs als je maar 1 keer per week traint en je voornaamste doel het afvallen is kan whey proteïne van belang zijn. Doordat je de inname van het aantal calorieën gaat verlagen is de kans groot dat je te weinig eiwitten binnenkrijgt. Ook als je regelmatig maaltijden overslaat of niet bij elke maaltijd een eiwitbron neemt is het nuttig om aanvulling met een eiwit- of proteïneshake in overweging te nemen. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om je eiwitgehalte op peil te houden.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                              <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                              <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                           <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              
                         <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '8') {
                        ?>
                        <!-- ADVIES 8 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Als jouw doel met betrekking tot het sporten is dat je gewicht wilt verliezen zijn er een aantal supplementen die voor jou van belang kunnen zijn. Belangrijk is natuurlijk gezonde en gevarieerde voeding maar (sport)supplementen kunnen een welkome aanvulling zijn, zeker als je dit doet met 3 a 4 keer trainen per week. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het behouden van je gezondheid.</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Bij 3 of 4 keer sporten per week is er al snel sprake van een behoorlijke belasting van de spieren en deze spieren hebben dan ook extra eiwitten nodig voor behoud maar zeker ook voor herstel en groei. Een bijkomend voordeel van spieropbouw is dat je ook meer energie verbrandt waardoor je sneller zult afvallen. Whey proteïne is dan een nuttige aanvulling voor behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om je eiwitgehalte op peil te houden.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                              <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                              <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                              
                              <!-- Co-Enzym Q10  -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Co-Enzym Q10 </h2>
                              <p class="pb-2">Co-Enzym Q10 is een natuurlijke stof die een belangrijke rol speelt bij het vrijmaken van energie in onze cellen. Wanneer jij je meer dan gemiddeld inspant kan je Q10 gebruiken voor de energieproductie, voor meer spierkracht en een efficiënt zuurstoftransport. Co-enzym Q10 is verder ook een belangrijke antioxidant.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/34100_Co-Enzym-Q10-Ubiquinon-30-mg-60-caps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Co-Enzym Q10 Ubiquinon - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=577" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                          <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              

                        
                         <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '9') {
                        ?>
                        <!-- ADVIES 9 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Als jouw doel met betrekking tot het sporten is dat je gewicht wilt verliezen zijn er een aantal supplementen die voor jou van belang kunnen zijn. Belangrijk is natuurlijk gezonde en gevarieerde voeding maar (sport)supplementen kunnen een welkome aanvulling zijn, zeker als je dit doet met meer dan 4 keer trainen per week. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het behouden van je gezondheid..</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Bij meer dan 4 keer sporten per week is er al snel sprake van een behoorlijke belasting van de spieren en deze spieren hebben dan ook extra eiwitten nodig voor behoud maar zeker ook voor herstel en groei. Een bijkomend voordeel van spieropbouw is dat je ook meer energie verbrandt waardoor je sneller zult afvallen. Whey proteïne is dan een nuttige aanvulling voor behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om je eiwitgehalte op peil te houden. </p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                              <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>
                                  
                              <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                              <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                             
                              <!-- Co-Enzym Q10  -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Co-Enzym Q10  </h2>
                              <p class="pb-2">Co-Enzym Q10 is een natuurlijke stof die een belangrijke rol speelt bij het vrijmaken van energie in onze cellen. Wanneer jij je meer dan gemiddeld inspant kan je Q10 gebruiken voor de energieproductie, voor meer spierkracht en een efficiënt zuurstoftransport. Co-enzym Q10 is verder ook een belangrijke antioxidant.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/34100_Co-Enzym-Q10-Ubiquinon-30-mg-60-caps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Co-Enzym Q10 Ubiquinon - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=577" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                          <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              

                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine B-complex</h2>
                                          <p class="pb-2">Bij zoveel keer trainen in de week kan je alle energie gebruiken die je uit je lichaam kan halen. Vitamine B-complex is bij uitstek de vitamine die van belang is voor het ondersteunen van je energieniveau omdat ze vetten, eiwitten en koolhydraten kunnen omzetten in energie. Dit vergroot  je uithoudingsvermogen. Vitamine B1, B2, B3, B5, B6 en B12 zijn allemaal van belang voor het energieniveau.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 30 Vegacapsules - € 11,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=760" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 90 Vegacapsules - € 29,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=761" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                         <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '10') {
                        ?>
                        <!-- ADVIES 10 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Als je uitsluitend met trainen je gewicht wilt verliezen zal je ook zonder meer je voedingspatroon moeten aanpassen. Ook zijn er een aantal (sport)supplementen die voor jou van belang kunnen zijn. Belangrijk om te weten is dat deze supplementen geen vervanging kunnen zijn van gezonde en gevarieerde voeding. De (sport)supplementen kunnen hierin een aanvulling zijn. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het afvallen.</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Als je maar 1 of 2 keer per week traint en je voornaamste doel het afvallen is kan whey proteïne van belang zijn. Ook als je regelmatig maaltijden overslaat of niet bij elke maaltijd een eiwitbron neemt is het nuttig om aanvulling met een eiwit- of proteïneshake in overweging te nemen. Een bijkomend voordeel van spieropbouw is dat je ook meer energie verbrandt waardoor je sneller zult afvallen. Whey proteïne is dan een nuttige aanvulling voor behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om je eiwitgehalte op peil te houden.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                               <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                              <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                          <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>

                         <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '11') {
                        ?>
                        <!-- ADVIES 11 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Als je gemiddeld 3 a 4 keer traint en zo wilt afvallen zal je ook zonder meer je voedingspatroon moeten aanpassen. Ook zijn er een aantal (sport)supplementen die voor jou van belang kunnen zijn. Belangrijk om te weten is dat deze supplementen geen vervanging kunnen zijn van gezonde en gevarieerde voeding. De (sport)supplementen kunnen hierin een aanvulling zijn. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het afvallen.</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Als je 3 of 4 keer per week traint en je voornaamste doel het afvallen is kan whey proteïne daar een belangrijke rol spelen. Ook als je regelmatig maaltijden overslaat of niet bij elke maaltijd een eiwitbron neemt is het nuttig om aanvulling met een eiwit- of proteïneshake in overweging te nemen. Een bijkomend voordeel van spieropbouw is namelijk dat je ook meer energie verbrandt waardoor je sneller zult afvallen. Whey proteïne is dan een nuttige aanvulling voor behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om je eiwitgehalte op peil te houden.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                               <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                              <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Co-Enzym Q10  -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Co-Enzym Q10 </h2>
                              <p class="pb-2">Co-Enzym Q10 is een natuurlijke stof die een belangrijke rol speelt bij het vrijmaken van energie in onze cellen. Wanneer jij je inspant kan je Q10 gebruiken voor de energieproductie, voor meer spierkracht en een efficiënt zuurstoftransport. Co-enzym Q10 is verder ook een belangrijke antioxidant.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/34100_Co-Enzym-Q10-Ubiquinon-30-mg-60-caps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Co-Enzym Q10 Ubiquinon - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=577" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                           <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              

                         <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '12') {
                        ?>
                        <!-- ADVIES 12 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Als je meer dan 4 keer traint en wilt afvallen zal je ook zonder meer je voedingspatroon moeten aanpassen. Ook zijn er een aantal (sport)supplementen die voor jou van belang kunnen zijn. Belangrijk om te weten is dat deze supplementen geen vervanging kunnen zijn van gezonde en gevarieerde voeding. De (sport)supplementen kunnen hierin een aanvulling zijn. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het afvallen.</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Als je 3 of 4 keer per week traint en je voornaamste doel het afvallen is kan whey proteïne daar een belangrijke rol spelen. Ook als je regelmatig maaltijden overslaat of niet bij elke maaltijd een eiwitbron neemt is het nuttig om aanvulling met een eiwit- of proteïneshake in overweging te nemen. Een bijkomend voordeel van spieropbouw is namelijk dat je ook meer energie verbrandt waardoor je sneller zult afvallen. Whey proteïne is dan een nuttige aanvulling voor behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om je eiwitgehalte op peil te houden.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                              <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                             <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Co-Enzym Q10  -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Co-Enzym Q10 </h2>
                              <p class="pb-2">Co-Enzym Q10 is een natuurlijke stof die een belangrijke rol speelt bij het vrijmaken van energie in onze cellen. Wanneer jij je inspant kan je Q10 gebruiken voor de energieproductie, voor meer spierkracht en een efficiënt zuurstoftransport. Co-enzym Q10 is verder ook een belangrijke antioxidant.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/34100_Co-Enzym-Q10-Ubiquinon-30-mg-60-caps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Co-Enzym Q10 Ubiquinon - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=577" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                          <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden. </p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              

                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine B-complex</h2>
                                          <p class="pb-2">Bij zoveel keer trainen in de week kan je alle energie gebruiken die je uit je lichaam kan halen. Vitamine B-complex is bij uitstek de vitamine die van belang is voor het ondersteunen van je energieniveau omdat ze vetten, eiwitten en koolhydraten kunnen omzetten in energie. Dit vergroot  je uithoudingsvermogen. Vitamine B1, B2, B3, B5, B6 en B12 zijn allemaal van belang voor het energieniveau.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 30 Vegacapsules - € 11,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=760" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 90 Vegacapsules - € 29,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=761" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                              <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '13') {
                        ?>
                        <!-- ADVIES 13 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">Als je echt stappen wilt maken met het afvallen is de combinatie van sporten en voeding natuurlijk een zeer goede keuze. Ook zijn er een aantal (sport)supplementen die voor jou van belang kunnen zijn. Belangrijk om te weten is dat deze supplementen geen vervanging kunnen zijn van gezonde en gevarieerde voeding. De (sport)supplementen kunnen hierin een aanvulling zijn. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het afvallen.</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Als je maar 1 of 2 keer per week traint en je voornaamste doel het afvallen is kan whey proteïne van belang zijn. Ook als je regelmatig maaltijden overslaat of niet bij elke maaltijd een eiwitbron neemt is het nuttig om aanvulling met een eiwit- of proteïneshake in overweging te nemen. Een bijkomend voordeel van spieropbouw is dat je ook meer energie verbrandt waardoor je sneller zult afvallen. Whey proteïne is dan een nuttige aanvulling voor behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om je eiwitgehalte op peil te houden.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                              <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                             <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                           <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>

                                    <div class="pb-2">
                                          <a class="block py-1.5 px-3 bg-transparent border-2 border-soft-peache rounded-full transition-colors text-green hover:bg-soft-peache hover:text-white hover:transition-colors mx-auto w-fit" href="/voedingscoaching" id="voedingsadvies_advies13"><p class="text-18 leading-18 ">Lees meer over voedingsadvies</p></a>
                                    </div>

                         <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '14') {
                        ?>
                        <!-- ADVIES 14 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">De combinatie van het vele sporten en daarbij ook je voeding aan te passen is natuurlijk een mooie stap in de goede richting. Ook zijn er een aantal (sport)supplementen die voor jou van belang kunnen zijn. Belangrijk om te weten is dat deze supplementen geen vervanging kunnen zijn van gezonde en gevarieerde voeding. De (sport)supplementen kunnen hierin een aanvulling zijn. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het afvallen.</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Als je 3 of 4 keer per week traint en je voornaamste doel het afvallen is kan whey proteïne daar een belangrijke rol spelen. Ook als je regelmatig maaltijden overslaat of niet bij elke maaltijd een eiwitbron neemt is het nuttig om aanvulling met een eiwit- of proteïneshake in overweging te nemen. Een bijkomend voordeel van spieropbouw is namelijk dat je ook meer energie verbrandt waardoor je sneller zult afvallen. Whey proteïne is dan een nuttige aanvulling voor behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om je eiwitgehalte op peil te houden.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                               <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                             <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Co-Enzym Q10  -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Co-Enzym Q10 </h2>
                              <p class="pb-2">Co-Enzym Q10 is een natuurlijke stof die een belangrijke rol speelt bij het vrijmaken van energie in onze cellen. Wanneer jij je inspant kan je Q10 gebruiken voor de energieproductie, voor meer spierkracht en een efficiënt zuurstoftransport. Co-enzym Q10 is verder ook een belangrijke antioxidant.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/34100_Co-Enzym-Q10-Ubiquinon-30-mg-60-caps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Co-Enzym Q10 Ubiquinon - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=577" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                          <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              
                                    <div class="pb-2">
                                          <a class="block py-1.5 px-3 bg-transparent border-2 border-soft-peache rounded-full transition-colors text-green hover:bg-soft-peache hover:text-white hover:transition-colors mx-auto w-fit" href="/voedingscoaching" id="voedingsadvies_advies14"><p class="text-18 leading-18 ">Lees meer over voedingsadvies</p></a>
                                    </div>
                         <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '15') {
                        ?>
                        <!-- ADVIES 15 -->
                              <!-- Introductie -->
                              <p class="font-bold pb-2">De combinatie van meer dan 4 x in de week sporten en daarbij ook je voeding nog eens aan te passen is natuurlijk een hele mooie stap in de goede richting. Ook zijn er, met zoveel keer trainen, een aantal (sport)supplementen die voor jou van belang kunnen zijn. Belangrijk om te weten is dat deze supplementen geen vervanging kunnen zijn van gezonde en gevarieerde voeding. De (sport)supplementen kunnen hierin een aanvulling zijn. Hieronder geeft Strong & Slim (met 40 jaar ervaring in de sport-, voeding- en supplementenbranche) je advies over welke supplementen erg belangrijk kunnen zijn bij het afvallen.</p>
                              
                              <!-- Whey Proteïne -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Whey Proteïne</h2>
                              <p class="pb-2">Bij meer dan 4 keer per week trainen en je voornaamste doel het afvallen is, speelt whey proteïne daar een belangrijke rol in. Ook als je regelmatig maaltijden overslaat of niet bij elke maaltijd een eiwitbron neemt is het nuttig om aanvulling met een eiwit- of proteïneshake in overweging te nemen. Een bijkomend voordeel van spieropbouw is namelijk dat je ook meer energie verbrandt waardoor je sneller zult afvallen. Whey proteïne is dan een nuttige aanvulling voor behoud, herstel en groei van je spiermassa. (zie ook de blog over proteïne) En als je niet altijd een shake mee wilt nemen kan ook de proteïne reep makkelijk zijn om je eiwitgehalte op peil te houden.</p>
                              <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41233_Whey-Proteine-Vanille-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/Strong-Slim-Whey-Vanille-1800gr.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Vanille 1800 gram - € 55,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=879" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41234_Whey-Proteine-Aardbei-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Aardbei 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=599" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41235_Whey-Proteine-Banaan-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Banaan 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=603" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41239_Whey-Proteine-Chocolade-900-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Whey Proteïne Chocolade 900 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=880" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/41236_Vegan-Protein-Vanille-Koekie-1000-gram.png" alt=""></div>
                                    <div class="col-span-2"><p class="font-bold">Vegan Proteïne - Vanille Koekie 1000 gram - € 29,95</p></div>
                                    <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=601" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                              </div>
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                              <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Als je daarbij ook nog eens actief sport, verbruik je meer energie. Je hebt dus meer voeding nodig en daarmee samenhangend meer vitamines en mineralen. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                             <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Co-Enzym Q10  -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Co-Enzym Q10 </h2>
                              <p class="pb-2">Co-Enzym Q10 is een natuurlijke stof die een belangrijke rol speelt bij het vrijmaken van energie in onze cellen. Wanneer jij je inspant kan je Q10 gebruiken voor de energieproductie, voor meer spierkracht en een efficiënt zuurstoftransport. Co-enzym Q10 is verder ook een belangrijke antioxidant.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/34100_Co-Enzym-Q10-Ubiquinon-30-mg-60-caps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Co-Enzym Q10 Ubiquinon - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=577" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                           <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden. </p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              

                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine B-complex</h2>
                                          <p class="pb-2">Bij zoveel keer trainen in de week kan je alle energie gebruiken die je uit je lichaam kan halen. Vitamine B-complex is bij uitstek de vitamine die van belang is voor het ondersteunen van je energieniveau omdat ze vetten, eiwitten en koolhydraten kunnen omzetten in energie. Dit vergroot  je uithoudingsvermogen. Vitamine B1, B2, B3, B5, B6 en B12 zijn allemaal van belang voor het energieniveau.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 30 Vegacapsules - € 11,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=760" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/36320_Vitamine-B-Formule-Advanced-30-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitamine B Formule Advanced, 90 Vegacapsules - € 29,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=761" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>

                                    <div class="pb-2">
                                          <a class="block py-1.5 px-3 bg-transparent border-2 border-soft-peache rounded-full transition-colors text-green hover:bg-soft-peache hover:text-white hover:transition-colors mx-auto w-fit" href="/voedingscoaching" id="voedingsadvies_advies15"><p class="text-18 leading-18 ">Lees meer over voedingsadvies</p></a>
                                    </div>

                         <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '16') {
                        ?>
                        <!-- ADVIES 16 -->
                              <!-- Introductie -->
                             
                              
                              
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                              <p class="pb-2">Als je een gezonde levensstijl hebt zonder overgewicht en je volgt alle richtlijnen nauwkeurig op, je eet regelmatig groenten en fruit, je vermijdt ongezonde voeding, je drinkt voldoende water, je beweegt dagelijks 30 minuten intensief en slaapt ten minste 7 uur per nacht. Als je verder stress weet te vermijden en goed voor jezelf zorgt, dan heb je misschien geen aanvulling van supplementen nodig. Maar laten we eerlijk zijn, dat lukt zeker niet iedereen en zeker ook niet elke dag. Juist om die redenen adviseert Strong & Slim voorzorgshalve het gebruik van een multivitamine zodat we ervoor kunnen zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te kunnen functioneren en gezond te blijven.</p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                             <p class="pb-2">Magnesium is een mineraal wat we dagelijks nodig hebben. Het lichaam maakt het niet zelf aan en daarom moeten we het dagelijks zelf uit onze voeding halen. Magnesium is met name belangrijk voor de vorming van bot en spieren. Het speelt verder een rol bij de goede werking van spieren en het is van cruciaal belang voor het omzetten van voedsel in bruikbare energie. Onderzoek heeft aangetoond dat magnesiumsupplementen kunnen helpen bij het verminderen van frequentie en intensiteit van migraineaanvallen. Ook kan magnesium helpen de kwaliteit van slaap te verbeteren omdat het de ontspanning bevordert en de activiteit van stresshormonen vermindert.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                              
                              <!-- Co-Enzym Q10  -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Co-Enzym Q10  </h2>
                              <p class="pb-2">Een Q10 supplement kan verschillende voordelen hebben voor het menselijk lichaam. Co-enzym Q10 speelt een belangrijke rol bij de energieproductie in onze cellen, en het kan ons helpen om vermoeidheid te verminderen en ons energieniveau te verbeteren. Bovendien kan Q10 ook een positief effect hebben op onze hartgezondheid en het kan helpen om de bloeddruk te verlagen. Daarnaast heeft Q10 ook antioxiderende eigenschappen en kan het ons lichaam helpen beschermen tegen schade door vrije radicalen. Als je op zoek bent naar een natuurlijk supplement dat verschillende voordelen voor je gezondheid kan bieden, dan kan het Q10 supplement van Strong & Slim zeker de moeite waard zijn om te overwegen.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/34100_Co-Enzym-Q10-Ubiquinon-30-mg-60-caps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Co-Enzym Q10 Ubiquinon - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=577" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                           <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. DHA en EPA (de visvetzuren in Omega-3) dragen bij tot de instandhouding van een normale bloeddruk. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). <br><br>Strong & Slim heeft overigens ook plantaardige omega-3 (afkomstig van algen).</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden.  </p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              

                              <?php
                        } elseif(isset($_GET['advice']) && $_GET['advice'] === '17') {
                        ?>
                        <!-- ADVIES 17 -->
                              <!-- Introductie -->
                             
                              
                              
                              <!-- Multi vitamine -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Multi vitamine </h2>
                              <p class="pb-2">Multivitamines zijn belangrijk omdat ze ons lichaam voorzien van essentiële voedingsstoffen die we misschien niet voldoende binnenkrijgen via onze dagelijkse voeding. Omdat het merendeel van de mensen niet altijd aan de voorgeschreven 3 ons groente en 2 stuks fruit toekomt is een aanvulling met een multi vitamine altijd aan te raden. De multivitamine van Strong & Slim bevat een combinatie van vitamines en mineralen die helpen om ons immuunsysteem te versterken, ons energieniveau te ondersteunen en ons algemene welzijn te verbeteren. Door regelmatig een multivitamine te nemen, kunnen we ervoor zorgen dat ons lichaam de voedingsstoffen krijgt die het nodig heeft om goed te functioneren en gezond te blijven. </p>

                                    <!-- Multi vitamine 50+ -->
                                    <?php
                                    if(isset($_GET['age']) && $_GET['age'] >= 50) {
                                    ?>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37110_Multi-Senioren-50-60-Vegacaps.png" alt=""></div>
                                          <div class="col-span-2">Multi Senioren 50+ - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=587" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                                    
                                    <?php
                                    } else {
                                    ?>
                                          <!-- Multi vitamine man/vrouw -->
                                          <?php
                                          if(isset($_GET['gender']) && $_GET['gender'] === 'Man') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37210_Multi-Pro-Man-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Man - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=589" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } elseif(isset($_GET['gender']) && $_GET['gender'] === 'Vrouw') {
                                          ?>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/37200_Multi-Pro-Vrouw-90-Vegacaps.png" alt=""></div>
                                                <div class="col-span-2">Multi Pro Vrouw - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=588" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                          <?php
                                          } else {
                                          ?>
                                          <?php
                                          }
                                          ?>
                                    <?php
                                    }
                                    ?>
                              
                              <!-- Magnesium Advanced Formule -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Magnesium Advanced Formule </h2>
                              <p class="pb-2">Magnesium supplementen bieden verschillende voordelen voor het lichaam, waaronder het ondersteunen van een gezonde spier- en zenuwfunctie, het bevorderen van een gezonde slaap, het verminderen van stress en angst, en het reguleren van de bloeddruk. Magnesium is een essentieel mineraal dat betrokken is bij meer dan 300 enzymatische reacties in het lichaam, dus het is belangrijk om ervoor te zorgen dat je voldoende magnesium binnenkrijgt. Een magnesium supplement kan helpen om een tekort aan te vullen en zo de algehele gezondheid en welzijn te verbeteren. Deze magnesium van Strong & Slim bevat 3, goed opneembare, soorten magnesium. Tevens zijn extra vitamines B toegevoegd en de stoffen “Bioperine” en “Taurine”, deze zorgen voor een verbeterde opname! </p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/38350_Magnesium-Advanced-Formule-60-tabletten.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Magnesium Advanced Formule - € 18,45</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=592" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>
                              
                              <!-- Co-Enzym Q10  -->
                              <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Co-Enzym Q10  </h2>
                              <p class="pb-2">Een Q10 supplement kan verschillende voordelen hebben voor het menselijk lichaam. Co-enzym Q10 speelt een belangrijke rol bij de energieproductie in onze cellen, en het kan ons helpen om vermoeidheid te verminderen en ons energieniveau te verbeteren. Bovendien kan Q10 ook een positief effect hebben op onze hartgezondheid en het kan helpen om de bloeddruk te verlagen. Daarnaast heeft Q10 ook antioxiderende eigenschappen en kan het ons lichaam helpen beschermen tegen schade door vrije radicalen. Als je op zoek bent naar een natuurlijk supplement dat verschillende voordelen voor je gezondheid kan bieden, dan kan het Q10 supplement van Strong & Slim zeker de moeite waard zijn om te overwegen.</p>
                                    <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                          <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/34100_Co-Enzym-Q10-Ubiquinon-30-mg-60-caps.png" alt=""></div>
                                          <div class="col-span-2 font-bold">Co-Enzym Q10 Ubiquinon - € 19,95</div>
                                          <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=577" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                    </div>

                              <!-- Omega-3 -->
                                    <?php
                                    if(isset($_GET['fish']) && $_GET['fish'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Omega-3</h2>
                                          <p class="pb-2">Als je minder dan 1 x per week vette vis eet is de kans erg groot dat je onvoldoende Omega-3 vetzuren binnenkrijgt. Omega-3 vetzuren beschermen je tegen hart- en vaatziekten. Verder  verbeterd Omega-3 de verhouding tussen het goede en slechte cholesterol. Verder helpt Omega-3 bij de vetverbranding en de spieropbouw (mits je aan krachttraining doet). Strong & Slim heeft overigens ook plantaardige omega-3.</p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30500_Three-Max-Omega-3-1000-mg-100-caps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Three Max Omega 3 - € 19,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=567" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                              <!-- Vitamine D -->
                                    <?php
                                    if(isset($_GET['outside']) && $_GET['outside'] === 'Nee') {
                                    ?>
                                          <h2 class="text-green text-26 leading-26 md:text-26 md:leading-26 font-avenir-black pb-2">Vitamine D</h2>
                                          <p class="pb-2">Onze belangrijkste bron van vitamine D wordt aangemaakt onder invloed van zonlicht in de huid. In de winter is er minder zon waardoor er ook minder vitamine D wordt aangemaakt. Suppletie wordt voor deze maanden zeker aangeraden (bijna 60% van de Nederlanders heeft een vitamine D tekort). Vitamine D speelt een belangrijk rol bij de opname van calcium uit de voeding, een goede werking van spieren en het immuunsysteem en draagt het bij aan groei en behoud van stevige botten en tanden.  </p>
                                          <div class="grid grid-cols-5 pb-3 gap-1 items-center">
                                                <div class="col-span-1 max-w-[200px]"><img src="https://strongandslim.nl/wp-content/uploads/2023/03/30020_Vitashine-Vitamine-D3-25-mcg-1000-IE-90-vegacaps.png" alt=""></div>
                                                <div class="col-span-2 font-bold">Vitashine Vitamine D3 - € 14,95</div>
                                                <div class="col-span-2"><a href="<?php echo $current_url ?>&add-to-cart=565" class="hover:underline text-soft-peache">Voeg direct toe aan winkelwagen</a></div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                    <?php
                                    }
                                    ?>
                        
                        <?php
                        } else {
                        ?>
                              <h1>Geen advies beschikbaar.</h1>
                        <?php
                        }
                  ?>








                

      </div>
</main>

<?php get_footer('empty'); ?>