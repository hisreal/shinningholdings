<?php
$page_title = "Philanthropy || Shining Holdings ";
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

<!-- HERO SECTION -->
<section  style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
             url('img/banner/phi.png');"  class="hero-banner">
  <div class="container">
    <div class="row">
      <div class="hero-content col-md-10 col-lg-8">
        <h1 class="fw-bold display-4 mb-3">Philanthropy</h1>
      </div>
    </div>
  </div>
</section>


<!-- SECTION 1 -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- RIGHT SIDE (Heading) -->
      <div class="col-12 col-lg-6 order-1 order-lg-2 
                  d-flex justify-content-center align-items-center
                  text-start mb-4 mb-lg-0">

        <h2 class="text-primary 
                   fs-5 fs-sm-4 fs-md-3 fs-lg-2 fade-in-bottom" 
            style="line-height: 1.3; font-weight: 200">

          We are committed to empowering 
          <span class="d-none d-lg-inline"><br></span>
          African entrepreneurs.
        </h2>
      </div>

      <!-- LEFT SIDE (Paragraphs) -->
      <div class="col-12 col-lg-6 order-2 order-lg-1 fade-in-bottom">

        <p class="text-muted justify-fix">
          Shining Holdings, through the Onyemachi Foundation, dedicates itself to empowering
           underserved communities by focusing on education, entrepreneurship, and community
            development. We see these as the pillars of sustainable prosperity. the kind that
             builds resilience, fosters innovation, and unlocks human potential.

        </p>

      

        <p class="text-muted justify-fix">
          We aim to create opportunities for young people across Africa by supporting educational programs, mentorship, and skills training. Individuals empowered today become the innovators of tomorrow.
        </p>
         <p class="text-muted justify-fix">
      In parallel, the Onyemachi Foundation will fund and nurture entrepreneurs, especially those with bold ideas for solving pressing social challenges. By offering seed funding, mentorship, and access to networks, our foundation is committed to growing enterprises that generate not only economic value but also social impact.
      </p>

       
        <p class="text-muted justify-fix">
          We are also passionate about community-driven development. Across our focus geographies — starting with South Africa and Nigeria — we will invest in projects that restore dignity, improve infrastructure, and promote well-being: clean water initiatives, health access, local enterprise, and sustainable livelihoods.
        </p>
        <p class="text-muted justify-fix">To learn more about Onyemachi Foundation, visit:</p>

        <a class="header-link" href="">
          <h5 class="main-head" style="float:left; font-size:12px;">
            www.onyemachifoundation.com
          </h5>
        </a>

      </div>

    </div>
  </div>
</section>


<!-- SECTION 2 -->
<section class="py-5" style="margin-top:-100px;">
  <div class="container">

    <div class="row justify-content-center">

      <div class="col-md-6">
        <h5 class="main-head">Our Approach</h5>

        <p class="text-muted justify-fix">
Our philanthropic strategy is aligned with Shinning Holdings’ investment philosophy — long-term, 
partnership-driven, and impact-focused. We do not simply give money; we partner with like-minded
 non-profits, development institutions, local leaders, and entrepreneurs to ensure every dollar 
 invested delivers real and measurable impact.
        </p>

        <p class="text-muted justify-fix">
We adopt a disciplined approach: rigorous grant-making, transparent monitoring and 
evaluation, and a commitment to sustainability. The Onyemachi Foundation’s work will
 be grounded in data, accountability, and a commitment to scaling success.
        </p>

      
      </div>

      <div class="col-md-6">
        <h5 class="main-head">Our core areas of philanthropic engagement include:</h5>

        <p class="text-muted justify-fix">
          <strong>1. Education & Youth:</strong> Scholarships, vocational training, mentorship, digital literacy.
        </p>

        <p class="text-muted justify-fix">
          <strong>2. Entrepreneurship:</strong> Startup grants, business training, incubation, network access.
        </p>

        <p class="text-muted justify-fix">
          <strong>3. Community Development:</strong> Health support, infrastructure, sustainable livelihoods.
        </p>

        <p class="text-muted justify-fix">To learn more about Onyemachi Foundation, visit:</p>

        <a class="header-link" href="">
          <h5 class="main-head" style="float:left; font-size:12px;">
            www.onyemachifoundation.com
          </h5>
        </a>
      </div>

    </div>

  </div>
</section>

<?php require_once("footer.php"); ?>
