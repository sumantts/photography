<?php 
include('common/header.php'); 
include('studio/assets/php/portfolioCtrl.php'); 

?>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="cursor-outer d-none d-md-block"></div>
      <?php include('common/nav.php'); ?>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-3">
        <div class="container-fluid px-0">
          <div class="position-absolute w-100 border-dashed-bottom opacity-25 top-5 z-index-1"></div>
          <div class="container px-md-5">
            <div class="row g-0">
              <div class="col-lg-12 pb-6 px-0 mb-lg-0">
                <div class="swiper-container swiper-theme" data-swiper='{"slidesPerView":1,"breakpoints":{"576":{"slidesPerView":1.2}},"spaceBetween":30,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"loopedSlides":3,"slideToClickedSlide":true}'>
                  <div class="swiper-wrapper">
                  
                  <?php if(sizeof($portfollios) > 0){
                    for($i = 0; $i < sizeof($portfollios); $i++){
                  ?>
                  <div class="swiper-slide">
                      <div class="row align-items-center">
                        <div class="col-xl-7">
                          <div class="position-relative">
                            <div class="position-absolute start-0 bottom-0 ms-3">
                              <h3 class="text-white"><?=$portfollios[$i]->name?></h3>
                              <!-- <p class="text-300">Shooting and Advertisement Campaign</p> -->
                            </div><img class="portfolio-img img-fluid" src="<?=$portfollios[$i]->services_photo?>" alt="" style="max-height: 350px;" />
                          </div>
                        </div>
                        <div class="col-xl-4 mt-4">
                          <p class="fs-0"><?=$portfollios[$i]->description?></p>
                        </div>
                      </div>
                    </div>
                    <?php }
                    } ?>

                  </div>
                </div>
                <div class="swiper-theme swiper-pagination d-flex mt-4"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

        </section>        
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php include('common/footer.php'); ?>

    