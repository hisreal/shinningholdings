<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<header class="navbar navbar-expand-lg bg-white navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="img/user/shining-logo.png" alt="logo" style="max-width: 180px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
            <ul class="navbar-nav">

                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php"
                       <?php if($currentPage == 'index.php') echo 'style="color:#125a52;font-weight:700;border-bottom:3px solid #125a52;"'; ?>>
                        Home
                    </a>
                </li>

                <!-- About Us -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="about.php" data-bs-toggle="dropdown"
                       <?php if(in_array($currentPage, ['about.php','contact.php'])) echo 'style="color:#125a52;font-weight:700;border-bottom:3px solid #125a52;"'; ?>>
                        About Us
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="about.php"
                               <?php if($currentPage == 'about.php') echo 'style="color:#125a52;font-weight:700;background-color:rgba(18,90,82,0.05);"'; ?>>
                                Overview
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="contact.php"
                               <?php if($currentPage == 'contact.php') echo 'style="color:#125a52;font-weight:700;background-color:rgba(18,90,82,0.05);"'; ?>>
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Investment -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="investments.php#overview" data-bs-toggle="dropdown"
                       <?php if($currentPage == 'investments.php') echo 'style="color:#125a52;font-weight:700;border-bottom:3px solid #125a52;"'; ?>>
                        Investment
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="investments.php#overview"
                               <?php if($currentPage == 'investments.php') echo 'style="color:#125a52;font-weight:700;background-color:rgba(18,90,82,0.05);"'; ?>>
                                Overview
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="investments.php#power"
                               <?php if($currentPage == 'investments.php') echo 'style="color:#125a52;font-weight:700;background-color:rgba(18,90,82,0.05);"'; ?>>
                                Power
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="investments.php#technology"
                               <?php if($currentPage == 'investments.php') echo 'style="color:#125a52;font-weight:700;background-color:rgba(18,90,82,0.05);"'; ?>>
                                Technology
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="investments.php#energy"
                               <?php if($currentPage == 'investments.php') echo 'style="color:#125a52;font-weight:700;background-color:rgba(18,90,82,0.05);"'; ?>>
                                Energy
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="investments.php#estate"
                               <?php if($currentPage == 'investments.php') echo 'style="color:#125a52;font-weight:700;background-color:rgba(18,90,82,0.05);"'; ?>>
                                Real Estate and Hospitality
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Impact -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                       <?php if(in_array($currentPage, ['philanthropy.php','sustainability.php'])) echo 'style="color:#125a52;font-weight:700;border-bottom:3px solid #125a52;"'; ?>>
                        Impact
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="philanthropy.php"
                               <?php if($currentPage == 'philanthropy.php') echo 'style="color:#125a52;font-weight:700;background-color:rgba(18,90,82,0.05);"'; ?>>
                                Philanthropy
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="sustainability.php"
                               <?php if($currentPage == 'sustainability.php') echo 'style="color:#125a52;font-weight:700;background-color:rgba(18,90,82,0.05);"'; ?>>
                                Sustainability
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Media -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                       <?php if($currentPage == 'gallery.php') echo 'style="color:#125a52;font-weight:700;border-bottom:3px solid #125a52;"'; ?>>
                        Media
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="gallery.php"
                               <?php if($currentPage == 'gallery.php') echo 'style="color:#125a52;font-weight:700;background-color:rgba(18,90,82,0.05);"'; ?>>
                                Gallery
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Sign up -->
                <li class="nav-item">
                    <a class="nav-link" href="signup.php"
                       <?php if($currentPage == 'signup.php') echo 'style="color:#125a52;font-weight:700;border-bottom:3px solid #125a52;"'; ?>>
                        Sign up
                    </a>
                </li>

            </ul>
        </div>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
