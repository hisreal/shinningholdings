<?php
$page_title = "Sign Up || Shining Holdings ";
$page_description = "Shining Holdings is a pan‑African investment company driving long-term value creation across power, energy, real estate, technology, and healthcare.";
$page_keyword = "African investment company, Africapitalism, long-term investments, power, energy, financial services";
$page_url = "https://www.shiningholdings.com/";

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

                <form id="investorForm" class="border rounded bg-white fade-in-bottom" enctype="multipart/form-data">

                        <!-- 1. Full Name -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" class="form-control" name="fullname" placeholder="First & Last Name" required>
                        </div>

                        <!-- 2. Email Address -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="example@mail.com" required>
                        </div>

                        <!-- 3. Phone Number -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Phone Number</label>
                            <div class="input-group">
                                <div class="position-relative">
                                    <button type="button" class="btn btn-outline-secondary d-flex align-items-center" id="phoneFlagButton">
                                        <span id="selectedCode">+234</span>
                                    </button>
                                    <div class="phone-flag-menu" id="phoneFlagMenu"></div>
                                </div>
                                <input type="tel" class="form-control" name="phone" placeholder="810 000 0000" required>
                            </div>
                        </div>

                        <!-- 4. Country of Residence -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Country of Residence</label>
                            <input type="text" class="form-control" name="country" placeholder="Enter your country" required>
                        </div>

                        <!-- 5. Investor Type -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Investor Type</label>
                            <select class="form-select" name="investor_type" required>
                                <option value="">Select Type</option>
                                <option>Individual</option>
                                <option>Corporate</option>
                            </select>
                        </div>

                        <!-- 6. Investment Capacity -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Investment Capacity</label>
                            <select class="form-select" name="investment_capacity" required>
                                <option value="">Choose an option</option>
                                <option>Below $50,000</option>
                                <option>$50,000 – $200,000</option>
                                <option>$200,000 – $1M</option>
                                <option>Above $1M</option>
                            </select>
                        </div>

                        <!-- 7. Area of Interest -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Area of Interest</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="interest[]" value="Power" id="interestPower">
                                <label class="form-check-label" for="interestPower">Power</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="interest[]" value="Energy" id="interestEnergy">
                                <label class="form-check-label" for="interestEnergy">Energy</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="interest[]" value="Technology" id="interestTech">
                                <label class="form-check-label" for="interestTech">Technology</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="interest[]" value="Real Estate & Hospitality" id="interestRealEstate">
                                <label class="form-check-label" for="interestRealEstate">Real Estate & Hospitality</label>
                            </div>
                        </div>

                        <!-- 8. Short Message -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Short Message / Intent</label>
                            <textarea class="form-control" name="message" rows="4" placeholder="Tell us briefly why you want to invest with Shining Holdings…" required></textarea>
                        </div>

                        <!-- 9. Upload ID Document -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Upload ID Document</label>
                            <input type="file" class="form-control" name="id_document" accept=".jpg,.png,.pdf" required>
                            <div class="form-text">Passport, National ID, or Driver’s License</div>
                        </div>

                        <!-- 11. Agreements -->
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="agree_terms" required>
                                <label class="form-check-label">I agree to the Terms & Conditions</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="consent_data" required>
                                <label class="form-check-label">I consent to the use of my data for investment review</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" name="accurate_info" required>
                                <label class="form-check-label">I declare that all information provided is accurate</label>
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary">Create Investor Profile</button>
                    </form>

                    <div id="alertMessage" class="mt-3"></div>

              
			</div>
    </div>
</section>




<?php require_once("footer.php"); ?>