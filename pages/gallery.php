<?php 
include('common/header.php'); 
include('studio/assets/php/galleryCtrl.php'); 

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
      <section class="pt-3 pb-9 position-relative">
        <div class="container px-md-5">
          <div class="position-md-absolute start-0 ms-2 mt-3 mb-4">
            <ul class="nav gallery-tab d-flex gap-3" data-filter-nav="data-filter-nav">
              <?php if(sizeof($albums) > 0){?>
                <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav active" href="#!" data-filter="*">All</a></li>
                <?php for($i = 0; $i < sizeof($albums); $i++){
                  $tag_name1 = str_replace(" ", "_", $albums[$i]->tag_name);
                  ?>
                  <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".<?=$tag_name1?>"><?=$albums[$i]->tag_name?></a></li>
                <?php } ?>    
              <!-- <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".professional">Professional</a></li>
              <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".commercial">Commercial</a></li> -->
              <?php } ?>
            </ul>
          </div>
          <div class="row g-3" data-isotope='{"layoutMode":"packery"}'>
          <?php 
            if(sizeof($albums) > 0){
            for($j = 0; $j < sizeof($albums); $j++){
            $tag_name2 = str_replace(" ", "_", $albums[$j]->tag_name);
            $tag_name = $albums[$j]->tag_name;
            $photo_image = explode('|', $albums[$j]->photo_name);
            $count = sizeof($photo_image);
            foreach($photo_image as $key => $value)
            {            
            ?>
            <div class="col-lg-3 col-sm-6 col-12 <?=$tag_name2?> gallery-item isotope-item"><img class="img-fluid w-100" src="studio/assets/images/gallery/<?=$tag_name2?>/<?=$value?>" alt="" data-glightbox="title: <?=$tag_name?>; description: <?=$tag_name?>" /></div>
          <?php } } }?>
            <!-- <div class="col-lg-3 col-sm-6 col-12 shortfilms gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/1.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 shortfilms gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/2.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-6 col-12 shortfilms gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/3.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>

            <div class="col-lg-6 col-12 professional gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/4.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 professional gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/5.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 professional gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/6.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            
            <div class="col-lg-3 col-sm-6 col-12 commercial gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/7.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 commercial gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/8.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-6 col-12 commercial gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/9.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
          </div> -->
        </div>
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php include('common/footer.php'); ?>

    