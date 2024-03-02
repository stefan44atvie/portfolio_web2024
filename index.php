<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=#, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="components/css/test.css">
</head>
<body>
    <!--Main Navigation-->
<header class="mb-10">

<!-- Navbar -->
<nav id="main-navbar" class="navbar navbar-expand-md fixed-top navbar-before-scroll shadow-0">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <!-- Logo -->
        <a class="navbar-brand me-1" href="#"><img src="components/media/Logos/D&S_Logo_200x115.jpg"
                                                   height="20px" alt="Logo" loading="lazy" /></a>

        <li class="nav-item">
          <a class="nav-link text-dark" href="#myprojects">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#myoffers">My offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#myskills">My skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#aboutme">About me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#contactme">Contact</a>
        </li>
      </ul>

      <ul class="navbar-nav flex-row">
        <!-- Icons -->
        <li class="nav-item">
          <a class="nav-link pe-2" href="#!">
            <i class="fab fa-youtube"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-2" href="#!">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-2" href="#!">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link ps-2" href="#!">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
    <!-- Collapsible wrapper -->

  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<!-- Section: Split screen -->
<section class="">

  <div class="container-fluid px-0">
    <div class="row g-0">

      <!-- First column -->
      <div class=" vh-100 d-flex flex-column justify-content-center align-items-center">

        <!-- Headings -->
        <div class="h-100 d-flex justify-content-center align-items-center px-5">

          <div class="">
            <h2 class="display-4">Stefan Rüdenauer</h2>
            <h1 class="display-2 fw-bold text-uppercase">Fullstack Web Development</h1>
          </div>

        </div>

        <!-- CTA elements -->
        <div class="d-flex align-items-center w-100 justify-content-between px-5 mb-5">
          <a href="https://github.com/mdbootstrap/mdb-ui-kit" target="_blank" class="text-dark"><i class="fab fa-github fa-xl"></i></a>
          <hr class="hr d-none d-xl-flex" style="height: 2px; width: 200px;">
          <a class="btn btn-primary btn-lg btn-rounded" href="#myprojects" role="button" data-mdb-ripple-init>Check my
            projects<i class="fas fa-angle-down ms-2"></i></a>
        </div>

      </div>
      <!-- First column -->

      <!-- Second column -->
      <div class="col-lg-6 d-none d-lg-inline-block vh-100">

        <!-- Carousel wrapper -->
    
<!-- Section: Split screen -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
<div id="myoffers" >
    <div class="first">
    <h2 class="text-center text-primary offertitle">MY OFFERS</h2>
        <div class="container">
            <p class="offertext">
                As a committed FullStack Web Developer I will meet your ideas and needs while creating a great and responsive website for your business.
            </p>
        </div>
        <div class="container" id="offers">
            <div class="row row-cols-2 offering_box">
                <div class="col">
                    <div class="offerbox">
                        <a class="offer_title">FullStack WebDevelopment</a>
                    </div>
                    <p class="offertext">
                        The future WebSite will meet all requirements and can be displayed on all mobile devices
                    </p>
                </div>
                <div class="col">
                    <div class="offerbox">
                        <a class="offer_title">Social Media Management</a>
                    </div>
                    <p class="offertext">
                        Digitale Seele takes over playout of Texts and Media through several Social Media Platforms
                    </p>
                </div>
                <div class="col">
                    <div class="offerbox">
                        <a class="offer_title">Photographer</a>
                    </div>
                    <p class="offertext">
                        If desired, I'll take all needed pictures for your website myself with my own equipment. You can see my photographic work on this <a href="http://www.sfr-fotografie.at" rel="noopener" target="_blank"> website</a>. All photos on this website were taken by myself
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

  <!-- Section: My projects -->
  <section class="mb-10 text-center" id="myprojects">
    <h2 class="titleh2 mb-7 text-center text-primary">MY PROJECTS</h2>

    <div class="row gx-lg-5">

      <!-- First column -->
      <div class="col-lg-4 col-md-12 mb-6 mb-lg-0 ">

        <div class="card rounded-6 h-100">
          <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
               data-mdb-ripple-color="light" data-mdb-modal-init data-mdb-target="#digitaleseele">
            <img src="https://webdesign.digitaleseele.at/images/digseelescreen.png" class="w-100" />
            <a href="#digitaleseele">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Digitale Seele</h5>
            <p class="text-muted">
              <small>all new design <u>2024</u></small>
            </p>
            <p class="card-text">
            Tech-/Online-blog needed a fully modern and responsive new design 
            </p>
            <a href="#digitaleseele" class="btn btn-secondary btn-rounded" data-mdb-modal-init data-mdb-ripple-init data-toggle="modal" data-target="#digitaleseele" >Read More</a>
          </div>
        </div>

      </div>
      <!-- First column -->

      <!-- Second column -->
      <div class="col-lg-4 mb-6 mb-lg-0">

        <div class="card rounded-6 h-100">
          <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
               data-mdb-ripple-color="light" data-mdb-modal-init data-mdb-target="#project-2">
            <img src="https://webdesign.digitaleseele.at/portfolio/assets/media/portfolio/restaurant1/rest1_1.jpg" class="w-100" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Restaurant website</h5>
            <p class="text-muted">
              <small>project <u>2023</u></small>
            </p>
            <p class="card-text">
              Everybody loves eating outside. So i created a modern website for a restaurant
            </p>
            <a href="#project-2" class="btn btn-secondary btn-rounded" data-mdb-modal-init data-mdb-ripple-init>Read more</a>
          </div>
        </div>

      </div>
      <!-- Second column -->

      <!-- Third column -->
      <div class="col-lg-4 mb-6 mb-lg-0">

        <div class="card rounded-6 h-100">
          <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
               data-mdb-ripple-color="light" data-mdb-modal-init data-mdb-target="#project-3">
            <img src="https://webdesign.digitaleseele.at/portfolio/assets/media/portfolio/restaurant2/rest1_1.jpg" class="w-100" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Restaurant website</h5>
            <p class="text-muted">
              <small>project <u>2023</u></small>
            </p>
            <p class="card-text">
              Another beautiful website, but a more rustic one.
            </p>
            <a href="#project-3" class="btn btn-secondary btn-rounded" data-mdb-modal-init data-mdb-ripple-init>Read more</a>
          </div>
        </div>

      </div>
      <!-- Third column -->
    <!-- First column -->
    <div class="col-lg-4 col-md-12 mb-6 mb-lg-0 mt-4">

<div class="card rounded-6 h-100">
  <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
       data-mdb-ripple-color="light" data-mdb-modal-init data-mdb-target="#customerbackend">
    <img src="https://webdesign.digitaleseele.at/portfolio/assets/media/portfolio/alc1/a3.jpg" class="w-100" />
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title">Customer Backend</h5>
    <p class="text-muted">
      <small>project <u>2023</u></small>
    </p>
    <p class="card-text">
      Customer are able to review their bills, contracts or whatever within a modern designed backend site.
    </p>
    <a href="#customerbackend" class="btn btn-secondary btn-rounded" data-mdb-modal-init data-mdb-ripple-init>Read more</a>
  </div>
</div>

</div>
<!-- First column -->
  <!-- First column -->
  <div class="col-lg-4 col-md-12 mb-6 mb-lg-0 mt-4">

<div class="card rounded-6 h-100">
  <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
       data-mdb-ripple-color="light" data-mdb-modal-init data-mdb-target="#w4tour">
    <img src="https://webdesign.digitaleseele.at/portfolio/assets/media/portfolio/w4tour/w1.jpg" class="w-100" />
    <a href="#w4tour">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title">Members' area for association</h5>
    <p class="text-muted">
      <small>Project <u>2023/2024</u></small>
    </p>
    <p class="card-text">
      great area for registered users, specially for an austrian association.
    </p>
    <a href="#w4tour" class="btn btn-secondary btn-rounded" data-mdb-modal-init data-mdb-ripple-init>Read more</a>
  </div>
</div>

</div>
<!-- First column -->
<!-- Third column -->
<div class="col-lg-4 mb-6 mb-lg-0 mt-4 ">

<div class="card rounded-6 h-100">
  <div class="mt-n3 bg-image hover-overlay mx-3 shadow-4-strong rounded-6" data-mdb-ripple-init
       data-mdb-ripple-color="light" data-mdb-modal-init data-mdb-target="#sfrfotografie">
    <img src="https://sfr-fotografie.at/components/uploads/article/article-65748e271adbb.jpeg" class="w-100" />
    <a href="#sfrfotografie">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title">SFR-Fotografie</h5>
    <p class="text-muted">
      <small>project <u>2024</u> for
        <a href="" class="text-dark">www.sfr-fotografie.at</a></small>
    </p>
    <p class="card-text">
      Tech-/Online-blog needed a fully modern and responsive new design
    </p>
    <a href="#sfrfotografie" class="btn btn-secondary btn-rounded" data-mdb-modal-init data-mdb-ripple-init>Read more</a>
  </div>
</div>

</div>
<!-- Third column -->

    </div>

  </section>
  <!-- Section: My projects -->

  <!-- Section: Projects modals -->
  <section class="">

    <!-- Modal project 1 -->
    <div class="modal fade" id="sfrfotografie" tabindex="-1" aria-labelledby="project-1Label" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="project-1Label">All new designed website</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <!-- Section: Design Block -->
            <section>

              <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                  <div class="bg-image ripple rounded-7 shadow-5-strong" data-mdb-ripple-init
                       data-mdb-ripple-color="light">
                    <img src="https://sfr-fotografie.at/components/uploads/gallery/Venedig%202023-657ae35b87287.jpg" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <div class="px-4 py-5 px-md-5 text-white text-center">
                            <h3 class="text-uppercase fw-bold mb-4">
                              www.sfr-fotografie.at
                            </h3>
                            <p class="mb-0" style="color: hsl(210, 12%, 80%)">
                              Digitale Seele developed a whole new design for the photography blog
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-7 mb-4 mb-lg-0">
                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(204, 30%, 20%)">
                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">Startpage</p>
                      <p class="text-muted mb-0">
                        A beautiful landing page with a fullscreen background picture of a beautiful part of a beach in greece.
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(204, 30%, 20%)">
                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">About me section</p>
                      <p class="text-muted mb-0">
                        located on the startpage the about me section contains a light text effect, which appears from the left to the right.
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(204, 30%, 20%)">
                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">portfolio section</p>
                      <p class="text-muted mb-0">
                            This section contains the areas in which sfr-fotografie operates                      
                        </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(204, 30%, 20%)">
                        <i class="fas fa-chart-pie fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">Blog section</p>
                      <p class="text-muted mb-0">
                        This section is all about the blog itself. Beautifully designed and full responsive for mobiles.
                      </p>
                    </div>
                  </div>
                </div>
                <a href="https://www.sfr-fotografie.at">www.sfr-fotografie.at</a>

              </div>
            </section>
            <!-- Section: Design Block -->

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                    data-mdb-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal project 2 -->
    <div class="modal fade" id="project-2" tabindex="-1" aria-labelledby="project-2Label" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="project-2Label">Modern design</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Section: Design Block -->
            <section>

              <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                  <div class="bg-image ripple rounded-7 shadow-5-strong" data-mdb-ripple-init
                       data-mdb-ripple-color="light">
                    <img src="https://webdesign.digitaleseele.at/portfolio/assets/media/portfolio/restaurant1/rest1_1.jpg" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <div class="px-4 py-5 px-md-5 text-white text-center">
                            
                          </div>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-lg-7 mb-4 mb-lg-0">
                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">mobile friendly</p>
                      <p class="text-muted mb-0">
                        this modern website is also designed for responsiveness.
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">online menu</p>
                      <p class="text-muted mb-0">
                        everybody can check the restaurant's menu online on the website.
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">powerful backend</p>
                      <p class="text-muted mb-0">
                        admin users can modify several parts of the website, even texts.
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-chart-pie fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">reservations</p>
                      <p class="text-muted mb-0">
                        guests can order table reservations online via formulas.
                      </p>
                    </div>
                  </div>
                </div>
                <a href="https://webdesign.digitaleseele.at/projects_portfolio/website1/">WebLink</a>
              </div>
            </section>
            <!-- Section: Design Block -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                    data-mdb-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal project 3 -->
    <div class="modal fade" id="project-3" tabindex="-1" aria-labelledby="project-3Label" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="project-3Label">rustic restaurant website</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Section: Design Block -->
            <section>

              <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                  <div class="bg-image ripple rounded-7 shadow-5-strong" data-mdb-ripple-init
                       data-mdb-ripple-color="light">
                    <img src="https://webdesign.digitaleseele.at/portfolio/assets/media/portfolio/restaurant2/rest1_1.jpg" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <div class="px-4 py-5 px-md-5 text-white text-center">
                            
                          </div>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-lg-7 mb-4 mb-lg-0">
                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(260, 84%, 43%)">
                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">online menu cards</p>
                      <p class="text-muted mb-0">
                        check the restaurant's menu online
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(260, 84%, 43%)">
                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">order table</p>
                      <p class="text-muted mb-0">
                        Order a table online via formulas.
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(260, 84%, 43%)">
                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">powerful backend</p>
                      <p class="text-muted mb-0">
                        admin users can modify menus and many other parts of the website
                      </p>
                    </div>
                  </div>

                <!--  <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(260, 84%, 43%)">
                        <i class="fas fa-chart-pie fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">Live analytics</p>
                      <p class="text-muted mb-0">
                        Illum doloremque ea, blanditiis sed dolor laborum praesentium maxime sint, consectetur atque
                        ipsum ab adipisci ullam aspernatur odio soluta, quisquam dolore
                      </p>
                    </div>
                  </div> -->
                </div>
                <a href="https://webdesign.digitaleseele.at/projects_portfolio/website2/index.php">WebLink</a>

              </div>
            </section>
            <!-- Section: Design Block -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                    data-mdb-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

<!-- Modal project CUSTOMER BACKEND -->
<div class="modal fade" id="customerbackend" tabindex="-1" aria-labelledby="project-2Label" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="project-2Label">Modern design</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Section: Design Block -->
            <section>

              <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                  <div class="bg-image ripple rounded-7 shadow-5-strong" data-mdb-ripple-init
                       data-mdb-ripple-color="light">
                    <img src="https://webdesign.digitaleseele.at/portfolio/assets/media/portfolio/alc1/a5.jpg" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <div class="px-4 py-5 px-md-5 text-white text-center">
                            
                          </div>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-lg-7 mb-4 mb-lg-0">
                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">mobile friendly</p>
                      <p class="text-muted mb-0">
                        this modern website is also designed for responsiveness.
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">check your bills</p>
                      <p class="text-muted mb-0">
                        registered users can check their recent bills and contracts
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">download your files</p>
                      <p class="text-muted mb-0">
                        Download your recent contracts and your bills when needed
                      </p>
                    </div>
                  </div>

                 <!-- <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-chart-pie fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">reservations</p>
                      <p class="text-muted mb-0">
                        guests can order table reservations online via formulas.
                      </p>
                    </div>
                  </div> -->
                </div>
              </div>
            </section>
            <!-- Section: Design Block -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                    data-mdb-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL CUSTOMER BACKEND ENDE -->

    <!-- Modal project members' area association -->
<div class="modal fade" id="w4tour" tabindex="-1" aria-labelledby="project-2Label" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="project-2Label">Modern design</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Section: Design Block -->
            <section>

              <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                  <div class="bg-image ripple rounded-7 shadow-5-strong" data-mdb-ripple-init
                       data-mdb-ripple-color="light">
                    <img src="https://webdesign.digitaleseele.at/portfolio/assets/media/portfolio/alc1/a5.jpg" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <div class="px-4 py-5 px-md-5 text-white text-center">
                            
                          </div>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-lg-7 mb-4 mb-lg-0">
                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">mobile friendly</p>
                      <p class="text-muted mb-0">
                        this modern website is also designed for responsiveness.
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">check your team members</p>
                      <p class="text-muted mb-0">
                        As a registered member you can review all your team member's data, as name, function, and many more.
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">downloads</p>
                      <p class="text-muted mb-0">
                        you're searching your association's official documents? Get them in the Downloads-section
                      </p>
                    </div>
                  </div>

                 <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-chart-pie fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">Picture gallery</p>
                      <p class="text-muted mb-0">
                        upload your latest pictures of association's events.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Section: Design Block -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                    data-mdb-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL w4tour ENDE -->

   <!-- Modal digitale seele -->
   <div class="modal fade" id="digitaleseele" tabindex="-1" aria-labelledby="project-2Label" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="project-2Label">Modern recent design</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Section: Design Block -->
            <section>

              <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                  <div class="bg-image ripple rounded-7 shadow-5-strong" data-mdb-ripple-init
                       data-mdb-ripple-color="light">
                    <img src="https://webdesign.digitaleseele.at/images/digseelescreen.png" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <div class="px-4 py-5 px-md-5 text-white text-center">
                          </div>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-7 mb-4 mb-lg-0">
                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">mobile friendly</p>
                      <p class="text-muted mb-0">
                        modern and responsive web design.
                      </p>
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">read all about products or services</p>
                    <!--  <p class="text-muted mb-0">
                        As a registered member you can review all your team member's data, as name, function, and many more.
                      </p> -->
                    </div>
                  </div>

                  <div class="d-flex align-items-start mb-5">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">powerful backend</p>
                      <p class="text-muted mb-0">
                        write your blog articles, upload pictures within a great and powerful backend
                      </p>
                    </div>
                  </div>

                 <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                      <div class="p-3 rounded-4 shadow-2-strong" style="background-color: hsl(0, 63%, 44%)">
                        <i class="fas fa-chart-pie fa-lg text-white fa-fw"></i>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-4">
                      <p class="fw-bold mb-1">Picture gallery</p>
                      <p class="text-muted mb-0">
                        check pictures in different galleries within several articles.
                      </p>
                    </div>
                  </div>
                </div>
                <a href="https://www.digitaleseele.at">www.digitaleseele.at</a>

              </div>
            </section>
            <!-- Section: Design Block -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                    data-mdb-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL digitaleseele ENDE -->





  </section>
  <!-- Section: Projects modals -->

    <div class="" id="myskills">
    <div class="first container">
    <h2 class="titleh2 mb-7 text-center text-primary">MY SKILLS</h2>

       <!-- <p class="website_text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis necessitatibus nulla incidunt animi corrupti, exercitationem beatae perferendis consequatur sapiente modi omnis iusto aliquam in hic molestiae maiores dolorum quo tempore? 
       </p> -->
       <div class="row justify-content-start">
        <div class="col-sm-4 col-md-3">
            <div class="card mb-4 skilltitle">
                <div class="card-body">
                    <h2 class="mb-4"><img src="components/media/skills/logo-2582748_1280_html.png" width="50" alt="no picture"></h2>
                    <h6 class="card-title">HTML</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card mb-4 skilltitle">
                <div class="card-body">
                    <h2 class="mb-4"><img src="components/media/skills/css.png" width="50" alt="no picture"></h2>
                    <h6 class="card-title">CSS</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card mb-4 skilltitle">
                <div class="card-body">
                    <h2 class="mb-4">
                      <img src="components/media/skills/mysql.svg" alt="no picture" width="50"/>
                    </h2>
                    <h6 class="card-title">MySQL</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card mb-4 skilltitle">
                <div class="card-body">
                    <h2 class="mb-4"><img src="components/media/skills/icons8-php-50.png" alt="no picture" width="50" /></h2>
                    <h6 class="card-title">PHP</h6>
                  </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card mb-4 skilltitle">
                <div class="card-body">
                    <h2 class="mb-4"><img src="components/media/skills/icons8-javascript-50.png" alt="no picture" width="50"></h2>
                    <h6 class="card-title">JavaScript</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card mb-4 skilltitle">
                <div class="card-body">
                    <h2 class="mb-4"><img src="components/media/skills/icons8-typescript-50.png" alt="no picture" width="50"></h2>
                    <h6 class="card-title">TypeScript</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card mb-4 skilltitle">
                <div class="card-body">
                    <h2 class="mb-4"><img src="components/media/skills/icons8-angularjs-48.png" alt="no picture" width="50"></h2>
                    <h6 class="card-title">Angular</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card mb-4 skilltitle">
                <div class="card-body">
                    <h2 class="mb-4"><img src="components/media/skills/icons8-api-30.png" alt="no picture" width="50"></h2>
                    <h6 class="card-title">API</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card mb-4 skilltitle">
                <div class="card-body">
                    <h2 class="mb-4 justify-content-center"><img src="components/media/skills/icons8-symfony-48.png" alt="no picture" width="50"></h2>
                    <h6 class="card-title">Symfony</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-3">
            <div class="card mb-4 skilltitle">
                <div class="card-body">
                    <h2 class="mb-4"><img src="components/media/skills/icons8-bootstrap-48.png" alt="no picture" width="50"></h2>
                    <h6 class="card-title">Bootstrap</h6>
                </div>
            </div>
        </div>
        

    </div> 
    </div> 
    </div>
  <!-- Section: About me -->
  <section class="mb-10" id="aboutme">

    <div class="container">

      <div class="row gx-0 align-items-center">
            
        <!-- First column -->
        <div class="col-lg-6 mb-5 mb-lg-0">

          <div style="background: hsla(0, 0%, 100%, 0.2);
                      backdrop-filter: blur(10px);
                      z-index: 1;" class="card rounded-7 me-lg-n5">
            <div class="card-body p-lg-5 shadow-5">
              <h2 class="fw-bold">
                <span class="text-primary">Stefan Rüdenauer</span>
              </h2>
              <!-- <p class="fw-bold"><em>“Design is intelligence made visible.”</em></p> -->

              <p class="text-muted mb-4">
                Since I've been a teenager I've always been interested in computer and technology. So I decided after breaking up a university study after 3 years to start an education in Industrial engineering and information technology at the TGM in Vienna. 2023 I decided to go a step further and graduated as FullStack Web Developer at <a href="https://codefactory.wien">CodeFactory</a>. <!-- For more information about me, please download my current CV<a href="uploads/CV_Ruedenauer.pdf" download>here</a>! -->
              </p>
              <p class="text-muted mb-4" id="contactme">
                If you're interested in developing a project together with me, contact me via <span class = "mailtext">webdesign (at) digitaleseele (dot) at</span>.
              </p>
            </div>
          </div>
        </div>
        <!-- First column -->


        <!-- Second column -->
        <div class="col-lg-6 mb-5 mb-lg-0">

          <div class="bg-image hover-overlay rounded-7 shadow-4 rotate-lg">
            <img src="https://webdesign.digitaleseele.at/images/stefan.jpg" class="w-100" alt="" />
            <div class="mask" style="background: linear-gradient(
                                     45deg,
                                     hsla(169, 84.5%, 52%, 0.3),
                                     hsla(263, 87.7%, 44.7%, 0.3) 100%
                                     )">
            </div>
          </div>

        </div>
        <!-- Second column -->

      </div>

    </div>

  </section>
  <!-- Section:CONTACT -->
  <!-- #contactme<section class="mb-10" id="contactme">

<div class="container">
<h2 class="titleh2 mb-7 text-center text-primary">CONTACT</h2>

  <div class="row gx-0 align-items-center">
        
    <!-- First column -->
    <!-- <div class="col-lg-6 mb-5 mb-lg-0">

      <div style="background: hsla(0, 0%, 100%, 0.2);
                  backdrop-filter: blur(10px);
                  z-index: 1;" class="card rounded-7 me-lg-n5 cardcontact">
        <div class="card-body p-lg-5 shadow-5">
          <p class="text-muted mb-4">
          If you're interested in developing a project together with me, contact me via webdesign (at) digitaleseele.at. !
          </p>
        </div>
      </div>
    </div> -->
    <!-- First column -->


    <!-- Second column -->
    <!-- <div class="col-lg-6 mb-5 mb-lg-0">

      <div class="bg-image hover-overlay rounded-7 shadow-4 rotate-lg">
        <img src="https://webdesign.digitaleseele.at/images/stefan.jpg" class="w-100" alt="" />
        <div class="mask" style="background: linear-gradient(
                                 45deg,
                                 hsla(169, 84.5%, 52%, 0.3),
                                 hsla(263, 87.7%, 44.7%, 0.3) 100%
                                 )">
        </div>
      </div>

    </div> -->
    <!-- Second column -->

  </div>

</div>

</section> -->
</div>
</main>
<!--Main layout-->

<!--Footer-->

<div class="form-outline" data-mdb-input-init>
  <input type="text" id="typeText" class="form-control" />
  <label class="form-label" for="typeText">Text input</label>
</div>
<footer>

</footer>
<!--Footer-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="components/scripts/nav.js"></script>

</body>
</html>