<!-- Footer -->
<footer class="bg-white pt-5 border-top">
  <div class="container pb-4">
    <div class="row">

      <!-- Left: Logo, text, socials -->
      <div class="col-md-6 col-lg-5 mb-4">
        <div class="d-flex align-items-center mb-3">
          <!-- Logo -->
          <img src="img/user/shining-logo.png" alt="shining Holdings" class="me-3" style="height:50px;">
          <!-- Optional 15 years mark -->
          <!--<img src="img/user/shininglogo.png" alt="15 years" style="height:50px;">-->
        </div>

        <p style="font-size: 16px" class="mb-3 small text-muted">
          Shining Holdings is a leading family owned pan African investment group committed
          to improving lives and transforming Africa.
        </p>

        <!-- Social icons -->
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="icon-circle"><i class="bi bi-facebook"></i></a>
          <a href="#" class="icon-circle"><i class="bi bi-instagram"></i></a>
          <a href="#" class="icon-circle"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#" class="icon-circle"><i class="bi bi-linkedin"></i></a>
         
      </div>

      </div>

      <!-- Middle: Contact info -->
      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Contact Info</h6>
			<div style="width: 100px; height: 3px; background: #125a52; margin-top:-25px; margin-bottom: 20px;"></div>

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
          <li class="mb-2 d-flex">
            <span class="me-2 text-primary"><i class="bi bi-compass-fill"></i></span>
            <a href="#" class="text-decoration-none">View direction on map</a>
          </li>
        </ul>
      </div>

      <!-- Right: Quick links -->
    <!-- Right: Quick links -->
<div class="col-md-6 col-lg-3 mb-4">
  <h6 class="text-uppercase fw-bold mb-3">Quick Links</h6>
								<div style="width: 100px; height: 3px; background: #125a52; margin-top:-25px; margin-bottom: 20px;"></div>

  <ul style="font-size: 16px"  class="list-unstyled small">
    <li class="mb-2 d-flex align-items-center">
      <span class="me-2 text-primary">
        <i class="bi bi-chevron-right"></i>
      </span>
      <a href="about.php" class="text-decoration-none text-muted">About Us</a>
    </li>
    <li class="mb-2 d-flex align-items-center">
      <span class="me-2 text-primary">
        <i class="bi bi-chevron-right "></i>
      </span>
      <a href="investments.php#overview" class="text-decoration-none text-muted">Investments</a>
    </li>
    <li class="mb-2 d-flex align-items-center">
      <span class="me-2 text-primary">
        <i class="bi bi-chevron-right"></i>
      </span>
      <a href="philanthropy.php" class="text-decoration-none text-muted">Philanthropy</a>
    </li>
    <li class="mb-2 d-flex align-items-center">
      <span class="me-2 text-primary">
        <i class="bi bi-chevron-right"></i>
      </span>
      <a href="#" class="text-decoration-none text-muted">Media</a>
    </li>
   
    <li class="mb-2 d-flex align-items-center">
      <span class="me-2 text-primary">
        <i class="bi bi-chevron-right"></i>
      </span>
      <a href="contact.php" class="text-decoration-none text-muted">Contact</a>
    </li>
  </ul>
</div>


    </div>
  </div>

 <div class="footer-bottom bg-primary text-white py-3">
  <div class="container">
    <div class="row align-items-center">

      <!-- Left: Copyright -->
      <div style="color: white" class="col-md-4 text-center text-md-start mb-2 mb-md-0">
        ©2025 Shining Holdings
      </div>

      <!-- Right: Links -->
      <div style="color: white" class="col-md-8 text-center text-md-end">
        <a href="privacy.php" class="footer-link text-white mx-2">Privacy Policy</a>
        <a href="terms.php" class="footer-link text-white mx-2">Terms & Conditions</a>
      </div>

    </div>
  </div>
</div>
</footer>


<!-- footer end -->
<!-- to top begin -->
<div style="color:white" class="d-none d-md-block">
  <a href="#" class="to-top fas fa-arrow-up text-decoration-none text-white"></a>
</div>
<!-- to top end -->

<!-- javascript -->
<script src="js/vendors/bootstrap.bundle.min.js"></script>
<script src="js/vendors/vanilla-marquee.min.js"></script>
<script src="js/vendors/apexcharts.min.js"></script>
<script src="js/utilities.min.js"></script>
<script src="js/config-theme.js"></script>
<script src="js/vendors/countrycode.js"></script>

<script>
  // Stop template sticky menu completely
  const oldSticky = window.StickyMenu;
  window.StickyMenu = function() { return { init: function(){} }; };
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const nav = document.querySelector("header.navbar");

  window.addEventListener("scroll", function() {
    if (window.scrollY > 80) {
      nav.classList.add("sticky-nav", "active");
    } else {
      nav.classList.remove("sticky-nav", "active");
    }
  });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const currentHash = window.location.hash; 

  document.querySelectorAll(".nav-link").forEach(link => {
    if (link.getAttribute("href") === currentHash) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
});
</script>

<script>
document.getElementById("phoneCodeButton").addEventListener("click", function() {
    document.getElementById("phoneCodeMenu").style.display =
        document.getElementById("phoneCodeMenu").style.display === "block" ? "none" : "block";
});

document.querySelectorAll(".country-option").forEach(function(item) {
    item.addEventListener("click", function () {
        document.getElementById("selectedCode").textContent = this.dataset.code;
        document.getElementById("phoneCodeMenu").style.display = "none";
    });
});

// Click outside to close
document.addEventListener("click", function(e) {
    const menu = document.getElementById("phoneCodeMenu");
    const button = document.getElementById("phoneCodeButton");
    if (!button.contains(e.target) && !menu.contains(e.target)) {
        menu.style.display = "none";
    }
});
</script>

<script>
document.querySelectorAll(".masonry-wrapper a").forEach(link => {
    link.addEventListener("click", function(e) {
        e.preventDefault();

        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        const caption = document.getElementById("modalCaption");

        modal.style.display = "block";
        modalImg.src = this.getAttribute("data-img");
        caption.textContent = this.querySelector(".badge").innerText;
    });
});

// Close modal
document.querySelector(".close-modal").onclick = function() {
    document.getElementById("imageModal").style.display = "none";
};
</script>


</body>
</html>
