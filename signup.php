<?php
$page_title = "Sign Up || Shining Holdings ";
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
             url('img/banner/city-view.jpg');" class=" hero-banner">
  <div class="container">
    <div class="row ">
      <div class="hero-content col-md-10 col-lg-8">
        <h1 class="fw-bold display-4 mb-3">
         Investor Registration

        </h1>
        
      </div>
    </div>
  </div>
</section>




<section id="overview" class="py-5 in-avo-2 ">  
    <div class="container">
        <div  class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                	<!--<h5 class="main-head"><a class="header-link" href="about.php">Learn More About Us</a></h5>-->
				<p style="text-align: left; font-size: 16px" class="lead text-muted fade-in-bottom"><span style="color: #125a52; font-weight: bold">Welcome to shining Holdings Investor Portal</span><br>
Join a growing network of partners investing in Africa’s future.
Please complete the form below to create your investor profile and access exclusive opportunities.
</p>

                <form class="border rounded bg-white fade-in-bottom">

                <!-- 1. Full Name -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Full Name</label>
                    <input type="text" class="form-control" placeholder="First & Last Name" required>
                </div>

                <!-- 2. Email Address -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Email Address</label>
                    <input type="email" class="form-control" placeholder="example@mail.com" required>
                </div>
                 <div class="mb-3">
                <label class="form-label fw-semibold">Phone Number</label>

                <div class="input-group">
                  
                  <!-- Button -->
                  <div class="position-relative">
                    <button
                      type="button"
                      class="btn btn-outline-secondary d-flex align-items-center"
                      id="phoneFlagButton">
                      <span id="selectedCode">+234</span>
                    </button>

                    <!-- AUTO GENERATED MENU -->
                    <div class="phone-flag-menu" id="phoneFlagMenu"></div>
                  </div>

                  <!-- phone input -->
                  <input type="tel" class="form-control" placeholder="810 000 0000" required>

                </div>
              </div>



                       

                <!-- 4. Country of Residence -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Country of Residence</label>
                    <input type="text" class="form-control" placeholder="Enter your country" required>
                </div>

                <!-- 5. Investor Type -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Investor Type</label>
                    <select class="form-select" required>
                    <option value="">Select Type</option>
                    <option>Individual</option>
                    <option>Corporate</option>
                    </select>
                </div>

                <!-- 6. Investment Capacity -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Investment Capacity</label>
                    <select class="form-select" required>
                    <option value="">Choose an option</option>
                    <option>Below $50,000</option>
                    <option>$50,000 – $200,000</option>
                    <option>$200,000 – $1M</option>
                    <option>Above $1M</option>
                    </select>
                </div>

               <!-- 7. Area of Interest (Checkboxes) -->
<div class="mb-3">
  <label class="form-label fw-semibold">Area of Interest</label>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="interestPower" name="interest[]" value="Power">
    <label class="form-check-label" for="interestPower">Power</label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="interestEnergy" name="interest[]" value="Energy">
    <label class="form-check-label" for="interestEnergy">Energy</label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="interestTech" name="interest[]" value="Technology">
    <label class="form-check-label" for="interestTech">Technology</label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="interestRealEstate" name="interest[]" value="Real Estate & Hospitality">
    <label class="form-check-label" for="interestRealEstate">Real Estate & Hospitality</label>
  </div>
</div>


                <!-- 8. Short Message -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Short Message / Intent</label>
                    <textarea class="form-control" rows="4" placeholder="Tell us briefly why you want to invest with shining Holdings…" required></textarea>
                </div>

                <!-- 9. Upload ID Document -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Upload ID Document</label>
                    <input type="file" class="form-control" accept=".jpg,.png,.pdf" required>
                    <div class="form-text">Passport, National ID, or Driver’s License</div>
                </div>

                <!-- 10. Password + Confirm -->
             <!--  <div class="row">
                    <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Create Password</label>
                    <input type="password" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Confirm Password</label>
                    <input type="password" class="form-control" required>
                    </div>
                </div>-->

                <!-- 11. Agreements -->
                <div class="mb-3">
                    <div class="form-check ">
                    <input class="form-check-input" type="checkbox" required>
                    <label class="form-check-label">I agree to the Terms & Conditions</label>
                    </div>

                    <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" required>
                    <label class="form-check-label">I consent to the use of my data for investment review</label>
                    </div>

                    <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" required>
                    <label class="form-check-label">I declare that all information provided is accurate</label>
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-primary">
                    Create Investor Profile
                </button>

                </form>
                
              
			</div>
    </div>
</section>




<?php require_once("footer.php"); ?>