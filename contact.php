<?php
$page_title = "Contact Us – Shining Holdings";
$page_description = "Get in touch with Shining Holdings for partnership, investor relations, or media inquiries. Let’s build Africa’s future together.";
$page_keyword = "contact Shining Holdings, investor relations, partnership, media, African investment";
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
<!-- breadcrumb content begin -->
	<section style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
             url('img/banner/contact.png');" class=" hero-banner">
  <div class="container">
    <div class="row ">
      <div class="hero-content col-md-10 col-lg-8">
        <h1 class="fw-bold display-4 mb-3">
       Contact
        </h1>
        
      </div>
    </div>
  </div>
</section>

<main>

<section style="margin-top:-10px;" class="py-5">
    <div class="container">
       
        <div class="row d-md-flex justify-content-md-center gx-lg-5">

		<div class="col-12 col-md-12 col-lg-6 pe-lg-5 d-flex align-items-center">
                <div class="w-100 ">
					<h5 style="float: left" class="main-head">get in touch</h5>
                  <br>
				  <br>
					 <ul style="font-size: 16px"  class="list-unstyled small">
          <li class="mb-2 d-flex">
            <span class="me-2 text-primary"><i class="bi bi-telephone-fill"></i></span>
            <span>+27 72 738 5452</span>
          </li>
          <li class="mb-2 d-flex">
            <span class="me-2 text-primary"><i class="bi bi-envelope-fill"></i></span>
            <span>info@shiningholdings.com</span>
          </li>
          <li class="mb-2 d-flex">
            <span class="me-2 text-primary"><i class="bi bi-geo-alt-fill"></i></span>
            <span>
             37 Bathrust Bend, Milnerton, Western Cape, 7441
            </span>
          </li>
						</ul>
					<!-- Social icons -->
        <div style="margin-bottom: 20px" class="d-flex gap-3 mt-3">
          <a href="#" class="text-secondary"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-secondary"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-secondary"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#" class="text-secondary"><i class="bi bi-linkedin"></i></a>
        
      </div>
                   
                </div>
            </div>


            <!--<div class="col-12 col-md-12 col-lg-6 d-flex align-items-center">
                <div  class="col text-md-center text-lg-start">
						<iframe class="bg-light rounded-1 gmap w-100 h-200 h-md-250 h-lg-400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10600.5248164368!2d144.95966577016594!3d-37.81707816290683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sid!4v1645280096951!5m2!1sen!2sid">
						</iframe>
				 </div>
            </div>-->

            
        </div>
    </div>
</section>




		<!-- section content begin -->
		<section class="py-5">
			<div class="container">
				<div class="row d-md-flex justify-content-md-center gx-lg-5">
					

					<div class="col-12 col-md-10 col-lg-6 pe-lg-5">
						<h4 class="text-secondary mb-0">Send a Message</h4>
						<p style="font-size: 16px" class="lead text-muted">Please fill in the form below to get in touch with us.</p>
						<form id="contact-form" class="row g-1 mt-2" novalidate>
    
							<div id="alertMessage"></div> <!-- BOOTSTRAP ALERT HERE -->

							<div class="col-md-6">
								<input class="form-control" id="name" name="name" type="text" placeholder="Full name" aria-label="Full name" required>
							</div>

							<div class="col-md-6">
								<input class="form-control" id="email" name="email" type="email" placeholder="Email address" aria-label="Email address" required>
							</div>

							<div class="col-md-6">
								<input class="form-control" id="subject" name="subject" type="text" placeholder="Subject" aria-label="Subject" required>
							</div>

							<div class="col-md-6">
								<input class="form-control" id="phone" name="phone" type="text" placeholder="Phone Number" aria-label="Phone Number" required>
							</div>

							<div class="col-12">
								<textarea class="form-control" id="message" name="message" placeholder="Message" rows="6" required></textarea>
							</div>

							<p style="font-size: 16px" class="lead text-muted">
								By clicking submit, you agree to our 
								<a style="text-decoration:none" href="terms.php">Terms</a> and <a style="text-decoration:none" href="document/Shining Holdings Data Collection Consent Clause (1).pdf">Data Collection Clause.</a>
								You may receive notification from us and can opt out at any time.
							</p>

							<div class="d-grid">
								<button style="max-width:200px" class="btn btn-primary mt-2" id="sendemail" type="submit">Submit</button>
							</div>

						</form>

						
					</div>
				
				</div>
			</div>
			<!-- success notification begin -->
			<div class="position-fixed bottom-0 end-0 p-4" style="z-index: 2">
				<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
					<div class="toast-body text-primary">
						<i class="fas fa-check-circle me-1"></i>Your message has been sent successfully. Thank you!
					</div>
				</div>
			</div>
			<!-- success notification end -->
		</section>
		<!-- section content end -->
	</main>
	<!-- footer begin -->
	 <?php require_once("call.php"); ?>
<?php require_once("footer.php"); ?>