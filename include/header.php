<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="front-pages" data-style="light">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <title>Hutsan Sports Trust | HAP</title>
        <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
        <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5" />
        <link rel="icon" type="image/x-icon" href="https://www.hap.in/favicon.ico" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Londrina+Shadow&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />
        <link rel="stylesheet" href="./assets/vendor/css/rtl/core.css" class="haptrust-customizer-core-css" />
        <link rel="stylesheet" href="./assets/vendor/css/rtl/theme_default.css" class="haptrust-customizer-theme-css" />
        <link rel="stylesheet" href="./assets/css/hap_demo.css" />
        <link rel="stylesheet" href="./assets/vendor/css/pages/tenni1.css" />
        <link rel="stylesheet" href="./assets/vendor/libs/nouislider/nouislider.css" />
        <link rel="stylesheet" href="./assets/vendor/libs/swiper/swiper.css" />
        <link rel="stylesheet" href="./assets/vendor/css/pages/haptrust_2.css" />
        <script src="./assets/vendor/js/helpers.js"></script>
        <script src="./assets/js/front-config.js"></script>
        <script src="./assets/vendor/js/dropdown-hover.js"></script>
        <script src="./assets/vendor/js/mega-dropdown.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const currentPage = window.location.pathname.split("/").pop();
                const logoImage = document.querySelector('.app-brand-logo-tennikoit img');
                const dropdownImage = document.querySelector('.dropdown-image');
                const dropdownLink = document.querySelector('.dropdown-menu a');
                if (currentPage === "tennikoit.php") {
                    logoImage.src = "./assets/img/logo/TENNIKOIT-LOGO.png";
                    dropdownImage.src = "./assets/img/logo/CHESS-LOGO.png";
                    dropdownLink.href = "./chess.php";
                } else if (currentPage === "chess.php") {
                    logoImage.src = "./assets/img/logo/CHESS-LOGO.png";
                    dropdownImage.src = "./assets/img/logo/TENNIKOIT-LOGO.png";
                    dropdownLink.href = "./tennikoit.php";
                }
            });
        </script>
    </head>
    <body>
        <nav class="layout-navbar shadow-none py-0">
            <div class="navbar landing-navbar px-3 px-md-8">
                <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8">
                    <a href="index.php" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="./assets/img/logo/HAP-SPORTS-TRUST-LOGO-2.png" class="default-logo" width="180px" height="60px" alt="Default Logo" />
                            <img src="./assets/img/logo/HAP-SPORTS-TRUST-LOGO 1.png" class="scroll-logo" width="180px" height="60px" alt="Scroll Logo" />
                        </span>
                    </a>
                    <div class="dropdown-container">
                        <a href="index.php" class="app-brand-link">
                            <span class="app-brand-logo-tennikoit demo">
                                <img src="./assets/img/logo/TENNIKOIT-LOGO.png" width="120px" height="90px" alt="Chess Logo" />
                            </span>
                        </a>
                        <button class="dropdown-toggle-cus" id="dropdownButton" aria-expanded="false">
                            <span class="triangle"></span>
                        </button>
                    </div>
                </div>
                <button class="navbar-toggler-main ms-auto d-none d-md-block"  id="navbarToggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class='bx bx-menu' style="font-size: 32px;"></i>
                </button>
               
                <button
                class="navbar-toggler border-0 d-sms-block d-sm-block d-md-none px-0 me-4"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="tf-icons bx bx-menu bx-lg align-middle text-heading fw-medium"></i>
            </button>
            <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                <button
                    class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="tf-icons bx bx-x bx-lg"></i>
                </button>
            </div>
                <div class="dropdown-menu" id="dropdownContent">
                    <a href="./tennikoit.php">
                    <img src="./assets/img/logo/CHESS-LOGO.png"  width="100px" height="60px"  alt="Tennikotti Logo" class="dropdown-image" />
                </a>
                </div>
                 
            </div>
            <div class="custom-dropdown-menu" id="customDropdown">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Infrastructure</a></li>
                  <li><a href="#">Training</a></li>
                  <li><a href="#">Programs</a></li>
                  <li><a href="#">Partners</a></li>
                  <li><a href="#">Hall of fame</a></li>
                  <li><a href="#">News & Media</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
        </nav>
    
            
        