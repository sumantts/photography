<?php include('common/header.php'); ?>


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
              <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav active" href="#!" data-filter="*">All</a></li>
              <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".shortfilms">Short films</a></li>
              <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".professional">Professional</a></li>
              <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".commercial">Commercial</a></li>
            </ul>
          </div>
          <div class="row g-3" data-isotope='{"layoutMode":"packery"}'>
            <div class="col-lg-3 col-sm-6 col-12 shortfilms gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/1.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 shortfilms gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/2.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-6 col-12 shortfilms gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/3.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>

            <div class="col-lg-6 col-12 professional gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/4.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 professional gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/5.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 professional gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/6.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            
            <div class="col-lg-3 col-sm-6 col-12 commercial gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/7.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 commercial gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/8.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-6 col-12 commercial gallery-item isotope-item"><img class="img-fluid w-100" src="assets/img/gallery/9.png" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
          </div>
        </div>
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php include('common/footer.php'); ?>

    