<?php
$page_title = "Shining Holdings – Investing in Africa’s Future";
$page_description = "Shininh Holdings is a pan‑African investment company driving long-term value creation across power, energy, real estate, technology, and healthcare.";
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
<?php require_once("slider.php"); ?>
<section class="py-5 in-avo-2">  
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8">
				<h5 class="main-head"><a class="header-link" href="about.php">Learn More About Us</a></h5>
				<p style="text-align: center; font-size: 16px" class="lead text-muted">Shining Holdings is an emerging African investment firm 
					committed to building sustainable value across high-growth sectors. We partner with ambitious businesses and investors to unlock 
					opportunities that shape Africa’s future.</p>

			</div>
		</div>
    </div>
</section>

<!-- section content end -->
		<!-- section content begin -->
		<section style="margin-top:-30px;" class="in-avo-8">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 col-lg-10">
					  <h5  class="main-head">What Drives Us</h5>
						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 ">
							<div style="padding: 5px" class="col">
								<a  style="border: 1px solid #125a52; background-color: white"  class="card card-body text-center">
									<h6 style="font-weight: 200">Sustainable impact</h6>
								</a>
							</div>
							<div style="padding: 5px" class="col">
								<a style="border: 1px solid #125a52" class="card card-body text-center">
									<h6  style="font-weight: 200">Scalable innovation</h6>
								</a>
							</div>
							<div style="padding: 5px" class="col">
								<a style="border: 1px solid #125a52" class="card card-body text-center">
									<h6  style="font-weight: 200">Trusted partnerships</h6>
								</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>

 <!-- section content begin -->
		<section style="margin-top:-10px;" class="py-5 card-style-10 in-avo-2">
			<div class="container">
			  <h5 class="main-head">Our Focus Area</h5>
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2 g-lg-4">
					<div class="col">
						<div class="card card-green">
							<div class="card-body p-3">
								
								<h6 class="fw-bold mt-4">
									<a href="investments.php#power" class="link-light text-decoration-none d-flex justify-content-between align-items-center">
										Power
										<i class="fas fa-arrow-right fa-xs"></i>
									</a>
								</h6>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card card-blue">
							<div class="card-body p-3">
								
								<h6 class="fw-bold mt-4">
									<a href="investments.php#technology" class="link-light text-decoration-none d-flex justify-content-between align-items-center">
										Technology
										<i class="fas fa-arrow-right fa-xs"></i>
									</a>
								</h6>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card card-purple">
							<div class="card-body p-3">
								
								<h6 class="fw-bold mt-4">
									<a href="investments.php#energy" class="link-light text-decoration-none d-flex justify-content-between align-items-center">
										Energy
										<i class="fas fa-arrow-right fa-xs"></i>
									</a>
								</h6>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card card-navy">
							<div class="card-body p-3">
							
								<h6 class="fw-bold mt-2">
									<a href="investments.php#estate" class="link-light text-decoration-none d-flex justify-content-between align-items-center">
										Real Estate and Hospitality
										<i class="fas fa-arrow-right fa-xs"></i>
									</a>
								</h6>
							</div>
						</div>
					</div>
			</div>
		</section>

		<section style="margin-top:-50px;" class="py-5 in-avo-2">  
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8">
				<h6 class="main-head">FEATURED INVESTMENT</h6>
					<h6 style="color:#262626; margin-top: -10px" class="main-head">The PlugLuxx</h6>
				<p style="text-align: center; font-size: 16px" class="lead text-muted">Shining Holdings is proud to support The PlugLuxx, a digital-first luxury marketplace focused on high-end real estate, experiential hospitality, and mobility. Through this strategic investment, 
					we tap into Africa’s premium lifestyle economy, providing access to luxury penthouses, VIP events, supercars, and bespoke experiences. The PlugLuxx embodies our commitment to innovation, upscale real estate, and scalable digital platforms — and is a core piece of our growth story.</p>
				<center><a href="https://theplugluxx.com/" style="font-weight: 200" class="btn btn-primary rounded-pill">Learn More<i class="fas fa-arrow-right fa-sm ms-1"></i></a></center>

			</div>
		</div>
    </div>
</section>
		<!-- section content end -->                                   
<?php require_once("counterr.php"); ?>
	<!-- section content begin -->
		<!--<section style="margin-top:-90px;" class="py-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 col-lg-9">
						<div class="row row-cols-1 row-cols-lg-2 align-items-center gy-3">
							<div class="col text-md-center text-lg-start">
								<div class="row align-items-start gx-0 mb-2 mb-md-4">
									<div class="col-12 col-md-12 text-md-end border-bottom border-primary">
										<img src="img/user/left-image.png" style="width: 100%; height: auto" alt="Girl in a jacket">
									</div>
								</div>
							</div>

							<div style="text-align:center" class="col text-md-center text-lg-start">
									
								<center><h6>"Every team needs a leader and a vision —but everyone must have a voice."</h6></center>

								<center><h6><span class="text-highlight">Uche Godswill Onyemachi.</span></h6></center>
								<center><a href="about.php" class="btn btn-primary rounded-pill mt-2">Meet The Founder<i class="fas fa-arrow-right fa-sm ms-1"></i></a></center>
							</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>-->
<section style="margin-top:-100px;" class="py-5">
    <div class="container">
<div class="row d-flex justify-content-center align-items-center">

            <div class="col-md-6">
                <img src="img/user/f1.png" style="width: 100%; height: auto; padding: 10px;" alt="Left image">
            </div>

            <div class="col-md-6">

								<center><a style="font-weight: 200" href="bio.php" class="btn btn-primary rounded-pill mt-2">Meet The Founder<i class="fas fa-arrow-right fa-sm ms-1"></i></a></center>
               <!-- <img src="img/user/right.jpg" style="width: 100%; height: auto;" alt="Right image">-->
            </div>

        </div>
    </div>
</section>

<section style="margin-top:-60px;" class="py-5">
<div class="container">
	<div class="row justify-content-center ">
		
					<div class="col-md-8">
						
						<div class=" card-body text-center">
							<h5 class="main-head">WHY INVEST WITH US</h5>
							<div class="row ">

								<div style="padding: 5px" class="col-md-6">
									<a  style="border: 1px solid #125a52; background-color: white"  class="card card-body text-center">
										<p>Strong presence in South Africa & Nigeria</p>
									</a>
								</div>

								<div style="padding: 5px" class="col-md-6">
								<a  style="border: 1px solid #125a52; background-color: white"  class="card card-body text-center">
									<p>Clear growth strategy across Africa</p>
								</a>
								</div>
							<div style="padding: 5px" class="col-md-6">
								<a  style="border: 1px solid #125a52; background-color: white"  class="card card-body text-center">
									<p>Disciplined, impact-focused investment approach</p>
								</a>
								</div>
							
							<div style="padding: 5px" class="col-md-6">		
								<a  style="border: 1px solid #125a52; background-color: white"  class="card card-body text-center">
									<p>Transparent governance and reporting</p>
								</a>
								</div>
							</div>
						</div>
					</div>


					<div  class="col-md-4 py-5 justify-content-start">
<div style="background:#125a52; margin: 5px; padding: 20px">
      <h3 style="font-size: 14px; color: white;" class="mb-4" class="mb-3">Sign Up For Email Updates</h3>

      <p style="font-size: 14px; color: white;" class="mb-4" style="max-width: 420px;">
        Stay in touch to get exclusive news and insights from across our investment portfolio.
      </p>

      <form id="subscribeForm">
        <div class="mb-3">
          <input type="text" name="firstname" id="firstname" class="form-control border-1" placeholder="Full Name">
        </div>

        <div class="mb-3">
          <input type="email" style="background: white" name="email" id="email"  class="form-control border-1" placeholder="Your Email">
        </div>

        <p style="font-size: 14px; color: white;" class="mb-4" class="small" style="max-width: 430px;">
          By clicking Subscribe, I agree that Shining Holdings may use my contact details to send me communications and I consent to the Terms as provided in the Privacy Policy and Data Collection Clause.
        </p>
			<div id="subscribeAlert" class="mt-3"></div>
        <button type="submit" class="btn btn-light text-uppercase" style="letter-spacing:2px; font-size:12px;">
          Subscribe
        </button>
      </form>

    </div>
</div>

				</div>
			</div>
		</section>

<?php require_once("call.php"); ?>
<?php require_once("footer.php"); ?>