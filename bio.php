<?php
$page_title = "About Me || Shining Holdings";
$page_description = "Learn about Shining Holdings’ mission, vision, and investment philosophy. A family‑owned group committed to transforming Africa through strategic long-term investments.";
$page_keyword = "Shining Holdings about, Africapitalism, Uche Onyemachi, investment philosophy, African development";
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
             url('img/banner/founder.png');" class=" hero-banner">
  <div class="container">
    <div class="row ">
      <div class="hero-content col-md-10 col-lg-8">
        <h1 class="fw-bold display-4 mb-3">
          Meet The Founder
        </h1>
        
      </div>
    </div>
  </div>
</section>
<!-- section content begin -->
		<section  class="py-5">
			<div class="container">
				<div class="row d-md-flex justify-content-md-center gx-lg-5">
					<div class="col-12 col-md-8 col-lg-6 pe-lg-8">
						<p style="text-align: center; font-size: 16px" class="lead text-muted">
						<img src="img/user/thirdquotes.png" style="width: 100%; padding: 20px" alt="Uche the founder">

                            Uche Godswill Onyemachi is a dynamic Nigerian entrepreneur and investor
                             with a diverse business portfolio spanning fashion, cryptocurrency, transportation, and energy.</p>
                        <p style="text-align: center; font-size: 16px" class="lead text-muted"> He learned fashion and design in Nigeria, where he laid the foundation for his entrepreneurial
                            journey.
                            In 2017-2018, Uche ventured into fashion design, establishing himself
                                as a creative talent. He entered the cryptocurrency space in 2018,
                                 becoming an active investor and advocate for blockchain technology.</>
						<!--<img src="img/user/uchefour.JPG" style="width: 100%; padding: 20px" alt="Handsome Founder " >-->

	<p style="text-align: center; font-size: 16px" class="lead text-muted">His entrepreneurial journey in transportation began in Nigeria in 2020, starting with a fleet
 of a few buses. Driven by his vision and determination, Uche upgraded his transportation business
  to a luxury level, culminating in the launch of Plugluxx in South Africa in 2025 — a 
  state-of-the-art luxury bus service designed to redefine travel experiences.</p>

	<p style="text-align: center; font-size: 16px" class="lead text-muted">Uche is committed to achieving his goals and continuously expanding his ventures. Despite his young age, his strategic investments and relentless pursuit of
         success position him as a rising leader across multiple industries and continents.</p>
<div class="container text-center">
    <div class="d-flex justify-content-center gap-1">
        <a style="font-size: 14px; font-weight:200; background: #125a52; color: white"" href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal">The Founder's Letter</a>
        <a style="font-size: 14px; font-weight:200; background: #262626; color: white" href="gallery.php" class="btn btn-secondary">Founder's Gallery</a>
    </div>
</div>


<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      
      <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-0">
        <img src="img/user/letter.png" class="img-fluid w-100" alt="Large Preview">
      </div>
      
    </div>
  </div>
</div>


					</div>
				
				</div>
			</div>
		</section>
<?php require_once("footer.php"); ?>