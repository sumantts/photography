<?php 
include('common/header.php'); 
include('studio/assets/php/authorsCtrl.php');
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
          <div class="row justify-content-center">
            <div class="col-10">
              <div class="row justify-content-center">
                <?php
                  if(sizeof($authors) > 0){
                    for($i = 0; $i < sizeof($authors); $i++){
                ?>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                  <div class="card border-0 mb-3"><img class="card-img-top" src="<?=$authors[$i]->author_photo?>" alt="" />
                    <div class="row g-0 card-body px-0 pt-2">
                      <div class="col-12 col-xl-8 text-center text-xl-start">
                        <h4><?=$authors[$i]->author_name?></h4>
                        <p class="text-warning mb-2"><?=$authors[$i]->author_bio?></p>
                      </div>
                      <div class="col-12 col-xl-4 justify-content-center fs-2 d-flex gap-1">
                        <?php if($authors[$i]->linkedin_link != ''){?>
                        <a href="<?=$authors[$i]->linkedin_link?>" target="_blank"><span class="team-social-icon fab fa-linkedin ml-3"></span></a>
                        <?php } ?>
                        <?php if($authors[$i]->facebook_link != ''){?>
                        <a href="<?=$authors[$i]->facebook_link?>" target="_blank"><span class="team-social-icon fab fa-facebook ml-3"></span></a>
                        <?php } ?>
                        <?php if($authors[$i]->instagram_link != ''){?>
                        <a href="<?=$authors[$i]->instagram_link?>" target="_blank"><span class="team-social-icon fab fa-instagram ml-3"></span></a>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } } ?>

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

    