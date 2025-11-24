<?php
$page_title = "Gallery || Shining Holdings ";
$page_description = "Shining Holdings is a pan‑African investment company driving long-term value creation across power, energy, real estate, technology, and healthcare.";
$page_keyword = "African investment company, Africapitalism, long-term investments, power, energy, financial services";
$page_url = "https://www.shiningholdings.com/";
header("Cache-Control: no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

foreach ($_COOKIE as $name => $value) {
    setcookie($name, "", time() - 3600, "/");
}
?> 
<?php require_once("header.php"); ?>
<?php //require_once("page_loader.php"); ?>
<?php require_once("nav-bar.php");?>
<section style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
             url('img/banner/gallery.png');"  class="hero-banner">
  <div class="container">
    <div class="row ">
      <div class="hero-content col-md-10 col-lg-8">
        <h1 class="fw-bold display-4 mb-3">
         Our Gallery
        </h1>
      </div>
    </div>
 </div>
</section>


<section class="py-5 mb-3">
    <div class="container">
     

        <div class="masonry-wrapper ">
            
            <div class="masonry-item">
                <div class="card border-0">
                    <a href="img/gallery/7.png" data-img="img/gallery/7.png" data-thumb="img/gallery/7.png" data-alt="Gallery">
                        <img src="img/gallery/7.png" class="img-fluid rounded-1" alt="gallery-image">
                        <div class="card-img-overlay d-flex justify-content-center align-items-end p-2"></div>
                    </a>
                </div>
            </div>

            <div class="masonry-item">
                <div class="card border-0">
                    <a href="img/gallery/5.png" data-img="img/gallery/5.png" data-thumb="img/gallery/5.png" data-alt="Gallery">
                        <img src="img/gallery/5.png" class="img-fluid rounded-1" alt="gallery-image">
                        <div class="card-img-overlay d-flex justify-content-center align-items-end p-2"></div>
                    </a>
                </div>
            </div>

            <div class="masonry-item">
                <div class="card border-0">
                    <a href="img/gallery/1.png" data-img="img/gallery/1.png" data-thumb="img/gallery/1.png" data-alt="Gallery">
                        <img src="img/gallery/1.png" class="img-fluid rounded-1" alt="gallery-image">
                        <div class="card-img-overlay d-flex justify-content-center align-items-end p-2"></div>
                    </a>
                </div>
            </div>

            <div class="masonry-item">
                <div class="card border-0">
                    <a href="img/gallery/2.png" data-img="img/gallery/2.png" data-thumb="img/gallery/2.png" data-alt="Gallery">
                        <img src="img/gallery/2.png" class="img-fluid rounded-1" alt="gallery-image">
                        <div class="card-img-overlay d-flex justify-content-center align-items-end p-2"></div>
                    </a>
                </div>
            </div>

            <div class="masonry-item">
                <div class="card border-0">
                    <a href="img/gallery/3.png" data-img="img/gallery/3.png" data-thumb="img/gallery/3.png" data-alt="Gallery">
                        <img src="img/gallery/3.png" class="img-fluid rounded-1" alt="gallery-image">
                        <div class="card-img-overlay d-flex justify-content-center align-items-end p-2"></div>
                    </a>
                </div>
            </div>

            <div class="masonry-item">
                <div class="card border-0">
                    <a href="img/gallery/4.png" data-img="img/gallery/4.png" data-thumb="img/gallery/4.png" data-alt="Gallery">
                        <img src="img/gallery/4.png" class="img-fluid rounded-1" alt="gallery-image">
                        <div class="card-img-overlay d-flex justify-content-center align-items-end p-2"></div>
                    </a>
                </div>
            </div>

        </div> <!-- masonry-wrapper -->

    </div> <!-- container -->
</section>
<?php require_once("call.php"); ?>

<?php require_once("footer.php"); ?>