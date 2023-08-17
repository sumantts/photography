<?php 
include('common/header.php');
include('studio/assets/php/readMoreCtrl.php');
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
      <section class="py-2">
        <div class="container px-md-5">
          <div class="row g-4">

            <div class="col-lg-8 col-md-6 d-flex">
              <div class="card border-0 mb-3"><img class="card-img-top" src="<?=$post_image?>" alt="" />
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center"> <span class="fa-solid fa-circle-dot text-warning"></span>
                    <p class="text-300 m-0 ps-1"><?=$created_on?></p>
                  </div>
                  <div class="bg-warning p-2 text-center opacity-50">
                    <p class="text-white mb-0"><?=$category_name?></p>
                  </div>
                </div>
                <div class="mt-4">
                  <h5 class="mb-3"><?=$post_title?></h5>
                  <p class="text-200 m-0 mb-3">By - <span class="text-300 fw-bold"><?=$author_name?></span></p>
                  <p class="mb-3"><?=$post_description?></p>
                  
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex justify-content-center">
              <div class="card border-0 mb-3"><img class="card-img-top" src="<?=$author_photo?>" alt="" style="height: 250px;border-radius: 130px;" />
                <div class="row g-0 card-body px-0 pt-2">
                  <div class="col-12 col-xl-12 text-center text-xl-start">
                    <h4><?=$author_name?></h4>
                    <p class="text-warning mb-2 text-center"><?=$author_bio?></p>
                  <div class="col-12 col-xl-4 justify-content-center fs-2 d-flex gap-1"><a href="#!"><span class="team-social-icon fab fa-linkedin ml-3"></span></a><a href="#!"><span class="team-social-icon fab fa-facebook ml-3"></span></a><a href="#!"><span class="team-social-icon fab fa-instagram ml-3"></span></a></div>

                  </div>

                </div>
              </div>
            </div>

          </div>
          <!-- <div class="row">
            <div class="d-flex align-items-center justify-content-center mt-3">
              <button class="btn btn-link d-inline-block text-warning p-0 fs-1"><span class="fw-bold">See all</span></button>
            </div>
          </div> -->
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

    