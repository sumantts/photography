<?php 
include('common/header.php'); 
include('studio/assets/php/categoryCtrl.php');
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
            <?php if(sizeof($categories_data) > 0){
              for($i = 0; $i < sizeof($categories_data); $i++){?>
            <div class="col-lg-4 col-md-6 d-flex">
              <div class="card border-0 mb-3"><img class="card-img-top" src="<?=$categories_data[$i]->post_image?>" alt="" />
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center"> <span class="fa-solid fa-circle-dot text-warning"></span>
                    <p class="text-300 m-0 ps-1"><?=$categories_data[$i]->created_on?></p>
                  </div>
                  <div class="bg-warning p-2 text-center opacity-50">
                    <p class="text-white mb-0"><?=$categories_data[$i]->category_name?></p>
                  </div>
                </div>
                <div class="mt-4">
                  <h5 class="mb-3"><?=$categories_data[$i]->post_title?></h5>
                  <p class="text-200 m-0 mb-3">By - <span class="text-300 fw-bold"><?=$categories_data[$i]->author_name?></span></p>
                  <p class="mb-3"><?=$categories_data[$i]->post_description?></p>
                  <button class="btn btn-link text-warning p-0" onClick="window.location.href = '?p=read_more&pi=<?=$categories_data[$i]->post_id?>'"><span class="fw-medium">Read full article</span><img class="ms-3" src="assets/img/icons/long-arrow.png" alt="" /></button>
                </div>
              </div>
            </div>
            <?php } } ?>
            <!-- <div class="col-lg-4 col-md-6 d-flex">
              <div class="card border-0 mb-3"><img class="card-img-top" src="assets/img/blogs/img2.png" alt="" />
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center"> <span class="fa-solid fa-circle-dot text-warning"></span>
                    <p class="text-300 m-0 ps-1">6min read</p>
                  </div>
                  <div class="bg-warning p-2 text-center opacity-50">
                    <p class="text-white mb-0">color and light</p>
                  </div>
                </div>
                <div class="mt-4">
                  <h5 class="mb-3">Simply dummy text of the printing and typesetting.</h5>
                  <p class="text-200 m-0 mb-3">By - <span class="text-300 fw-bold">Frederico giuspam</span></p>
                  <p class="mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                  <button class="btn btn-link text-warning p-0" onClick="window.location.href = '?p=read_more'"><span class="fw-medium">Read full article</span><img class="ms-3" src="assets/img/icons/long-arrow.png" alt="" /></button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
              <div class="card border-0 mb-3"><img class="card-img-top" src="assets/img/blogs/img3.png" alt="" />
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center"> <span class="fa-solid fa-circle-dot text-warning"></span>
                    <p class="text-300 m-0 ps-1">6min read</p>
                  </div>
                  <div class="bg-warning p-2 text-center opacity-50">
                    <p class="text-white mb-0">color and light</p>
                  </div>
                </div>
                <div class="mt-4">
                  <h5 class="mb-3">Simply dummy text of the printing and typesetting.</h5>
                  <p class="text-200 m-0 mb-3">By - <span class="text-300 fw-bold">Frederico giuspam</span></p>
                  <p class="mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                  <button class="btn btn-link text-warning p-0" onClick="window.location.href = '?p=read_more'"><span class="fw-medium">Read full article</span><img class="ms-3" src="assets/img/icons/long-arrow.png" alt="" /></button>
                </div>
              </div>
            </div> -->

          </div>
          <?php if(sizeof($categories_data) > 3){?>
          <div class="row">
            <div class="d-flex align-items-center justify-content-center mt-3">
              <button class="btn btn-link d-inline-block text-warning p-0 fs-1"><span class="fw-bold">See all</span></button>
            </div>
          </div>
            <?php } ?>
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

    