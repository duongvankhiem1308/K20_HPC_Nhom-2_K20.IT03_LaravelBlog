
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
  @include('admin.head')
  </head>

  <body>
   <!-- Layout wrapper -->
   <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            @include('admin.sidebar')
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            @include('admin.nav')
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Carousel</h4>

              <div class="row">
                <!-- Bootstrap carousel -->
                <div class="col-md">
                  <h5 class="my-4">Bootstrap carousel</h5>

                  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/img/elements/13.jpg" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>First slide</h3>
                          <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/elements/2.jpg" alt="Second slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Second slide</h3>
                          <p>In numquam omittam sea.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/elements/18.jpg" alt="Third slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Third slide</h3>
                          <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
                </div>
                <!-- Bootstrap crossfade carousel -->
                <div class="col-md">
                  <h5 class="my-4">Bootstrap crossfade carousel (dark)</h5>

                  <div
                    id="carouselExample-cf"
                    class="carousel carousel-dark slide carousel-fade"
                    data-bs-ride="carousel"
                  >
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/img/elements/18.jpg" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>First slide</h3>
                          <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/elements/13.jpg" alt="Second slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Second slide</h3>
                          <p>In numquam omittam sea.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/elements/2.jpg" alt="Third slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Third slide</h3>
                          <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.footer')
  </body>
</html>
