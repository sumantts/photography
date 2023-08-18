<nav class="navbar navbar-light py-3 px-0 overflow-hidden">
        <div class="container px-md-5">
          <div class="row w-100 g-0 justify-content-between">
            <div class="col-8">
              <div class="d-inline-block"><a class="navbar-brand pt-0 fs-3 text-black d-flex align-items-center" href="?p=home">
                <img class="img-fluid" src="assets/img/rong_logo_icon.jpg" alt="" />
                <span class="fw-bolder ms-2">Rong</span><span class="fw-thin">Chabi</span></a></div>
            </div>
            <div class="col-4 d-lg-none text-end pe-0">
              <button class="btn p-0 shadow-none text-black fs-2 d-inline-block" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle offcanvas navigation"><span class="menu-bar"></span></button>
            </div>
            <div class="offcanvas offcanvas-end px-0" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasTitle" aria-hidden="true">
              <div class="offcanvas-header justify-content-end">
                <h5 class="visually-hidden offcanvas-title" id="navbarOffcanvasTitle">Menu</h5>
                <button class="btn p-0 shadow-none text-black fs-2 d-inline text-end" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="menu-close-bar"></span></button>
              </div>
              <div class="offcanvas-body px-0">
                <div class="d-lg-flex flex-center-start gap-3 overflow-hidden">
                  <ul class="navbar-nav ms-auto fs-4 ps-6">
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 <?php if($p == 'home'){ ?>active<?php } ?>" aria-current="page" href="?p=home">Home</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 <?php if($p == 'portfolio'){ ?>active<?php } ?>" aria-current="page" href="?p=portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 <?php if($p == 'gallery'){ ?>active<?php } ?>" aria-current="page" href="?p=gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 <?php if($p == 'authors'){ ?>active<?php } ?>" aria-current="page" href="?p=authors">Authors</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 <?php if($p == 'blog' || $p == 'read_more'){ ?>active<?php } ?>" aria-current="page" href="?p=blog">Blog</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="d-none d-lg-flex justify-content-end position-relative z-index-1">
                <div class="position-absolute absolute-centered z-index--1">
                  <h1 class="ms-2 fw-bolder text-outlined text-uppercase text-white pe-none display-1"><?=$title?></h1>
                </div>
                <!-- <div class="d-flex gap-3 align-items-start"><a class="mb-0 ms-auto text-warning fs-0 fw-bold text-uppercase" href="blog.html#contact">Contact Now</a> -->
                  <ul class="navbar-nav navbar-fotogency ms-auto text-end">
                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 <?php if($p == 'home'){ ?>active<?php } ?>" aria-current="page" href="?p=home">Home</a></li>
                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 <?php if($p == 'portfolio'){ ?>active<?php } ?>" aria-current="page" href="?p=portfolio">Portfolio</a></li>
                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 <?php if($p == 'gallery'){ ?>active<?php } ?>" aria-current="page" href="?p=gallery">Gallery</a></li>
                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 <?php if($p == 'authors'){ ?>active<?php } ?>" aria-current="page" href="?p=authors">Authors</a></li>
                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 <?php if($p == 'blog' || $p == 'read_more'){ ?>active<?php } ?>" aria-current="page" href="?p=blog">Blog</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>