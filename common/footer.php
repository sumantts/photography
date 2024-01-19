<footer class="bg-footer-black" id="footer">
      <div class="container py-7 px-md-5">
        <div class="row g-0">
          <div class="col-md-6 mb-5 mb-md-0">
            <div class="mb-4 d-inline-block"><a class="navbar-brand pt-0 fs-3 text-white d-flex align-items-center" href="index.html">
              <!-- <img class="img-fluid" src="assets/img/icons/dark-logo-icon.png" alt="" width="25" height="25" /> -->
              <span class="fw-bolder ms-2">Rong</span><span class="fw-thin">Chabi</span></a></div>
            <div class="col-12 col-md-10 text-300 mb-3"><i class="fas fa-map-marker-alt"></i><a class="nav-link text-300 d-inline" href="https://goo.gl/maps/VuuVSM7XAeUe3CYn8" target="_blank">Uma Niketan, 35/3/2 Baksara Road, <br>Baksara, Howrah-711110</a></div>
            <div class="col-12 col-md-10 text-300 mb-3"><i class="fas fa-phone"></i><a class="nav-link text-300 d-inline" href="tel:+919674335554">+91 96743 35554</a></div>
            <div class="col-12 col-md-10 text-300 mb-3"><i class="fas fa-envelope"></i><a class="nav-link text-300 d-inline" href="mailto:scrinfo@rongchabi.co.in">info@rongchabi.co.in</a></div>
          </div>
          <div class="col-md-6">
            <h5 class="text-white mb-2">SUBSCRIBE TO OUR NEWSLETTER</h5>
            <form>
              <div class="form-floating mb-5 position-relative text-200">
                <input class="form-control form-fotogency-header-control text-200" id="email" type="email" placeholder="name@example.com" required="required" />
                <label class="text-300 mb-1" for="email">Email</label>
                <div class="position-absolute end-0 top-0">
                  <button class="btn shadow-none px-0" type="submit"><img class="ms-3" src="assets/img/icons/long-arrow.png" alt="" /></button>
                </div>
              </div>
            </form>
            <div class="d-flex gap-2 flex-wrap justify-content-between align-items-center">
              <a class="social-icons" href="<?=$socials["facebook"]?>" target="_blank">Facebook</a>
              <a class="social-icons" href="<?=$socials["flickr"]?>" target="_blank">Flickr</a>
              <a class="social-icons" href="<?=$socials["twitter"]?>" target="_blank">Twitter</a>
              <a class="social-icons" href="<?=$socials["instagram"]?>" target="_blank">Instagram</a>
              <a class="social-icons" href="<?=$socials["youtube"]?>" target="_blank">Youtube</a>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-black py-0">

      <div class="container px-md-5">
        <div class="row g-0 justify-content-md-between justify-content-evenly py-4">
          <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
            <p class="fs--1 my-2 fw-light text-100">All rights Reserved &copy;<?=date('Y')?></p>
          </div>
          <div class="col-12 col-sm-8 col-md-6">
            <p class="fs--1 fw-light my-2 text-center text-md-end text-100"> Made with&nbsp;
              <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
              </svg>&nbsp;by&nbsp;<a class="fw-bold text-warning" href="javascript: void(0)" >Suman</a>
            </p>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    
    <script src="vendors/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="vendors/isotope-layout/isotope.pkgd.min.js"> </script>
    <script src="vendors/isotope-packery/packery-mode.pkgd.min.js"> </script>
    <script src="vendors/glightbox/glightbox.min.js"></script>
    
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <script>
		document.addEventListener('contextmenu', event => event.preventDefault());		
	</script>
	<script>
		// disable right click
		document.addEventListener('contextmenu', event => event.preventDefault());
	
		document.onkeydown = function (e) {
	
			// disable F12 key
			if(e.keyCode == 123) {
				return false;
			}
	
			// disable I key
			if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
				return false;
			}
	
			// disable J key
			if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
				return false;
			}
	
			// disable S key
			if(e.ctrlKey && e.keyCode == 83) {
				return false;
			}
	
			// disable U key
			if(e.ctrlKey && e.keyCode == 85) {
				return false;
			}
	
			// disable Print Screen key
			if(e.keyCode == 44) {
				alert('print')
				return false;
			}
		}
	
	</script>

	<!-- <script language="javascript">
		var noPrint=true;
		var noCopy=true;
		var noScreenshot=true;
		var autoBlur=true;
	</script>
	
	<script type="text/javascript" src="https://pdfanticopy.com/noprint.js"></script> -->

  </body>

</html>