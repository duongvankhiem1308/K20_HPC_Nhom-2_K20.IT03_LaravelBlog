
<!DOCTYPE html>

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
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">UI elements /</span> Pagination and breadcrumbs
              </h4>

              <div class="card mb-4">
                <h5 class="card-header">Pagination</h5>
                <!-- Basic Pagination -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <small class="text-light fw-semibold">Basic</small>
                      <div class="demo-inline-spacing">
                        <!-- Basic Pagination -->
                        <nav aria-label="Page navigation">
                          <ul class="pagination">
                            <li class="page-item first">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-left"></i
                              ></a>
                            </li>
                            <li class="page-item prev">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevron-left"></i
                              ></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">5</a>
                            </li>
                            <li class="page-item next">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevron-right"></i
                              ></a>
                            </li>
                            <li class="page-item last">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-right"></i
                              ></a>
                            </li>
                          </ul>
                        </nav>
                        <!--/ Basic Pagination -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Pagination Sizes -->
              <div class="card mb-4">
                <h5 class="card-header">Sizes & Alignments</h5>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <small class="text-light fw-semibold">Sizes</small>
                      <div class="demo-inline-spacing">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-sm">
                            <li class="page-item prev">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-left"></i
                              ></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">5</a>
                            </li>
                            <li class="page-item next">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-right"></i
                              ></a>
                            </li>
                          </ul>
                        </nav>
                        <nav aria-label="Page navigation">
                          <ul class="pagination">
                            <li class="page-item prev">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-left"></i
                              ></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">5</a>
                            </li>
                            <li class="page-item next">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-right"></i
                              ></a>
                            </li>
                          </ul>
                        </nav>
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg">
                            <li class="page-item prev">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-left"></i
                              ></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">5</a>
                            </li>
                            <li class="page-item next">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-right"></i
                              ></a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <small class="text-light fw-semibold">Alignments</small>
                      <div class="demo-inline-spacing">
                        <nav aria-label="Page navigation">
                          <ul class="pagination">
                            <li class="page-item prev">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-left"></i
                              ></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">5</a>
                            </li>
                            <li class="page-item next">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-right"></i
                              ></a>
                            </li>
                          </ul>
                        </nav>
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center">
                            <li class="page-item prev">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-left"></i
                              ></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">5</a>
                            </li>
                            <li class="page-item next">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-right"></i
                              ></a>
                            </li>
                          </ul>
                        </nav>
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-end">
                            <li class="page-item prev">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-left"></i
                              ></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">5</a>
                            </li>
                            <li class="page-item next">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon bx bx-chevrons-right"></i
                              ></a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Pagination Sizes -->

              <!-- Breadcrumb -->
              <div class="card">
                <h5 class="card-header">Breadcrumbs</h5>
                <div class="card-body">
                  <!-- Basic Breadcrumb -->
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Home</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Library</a>
                      </li>
                      <li class="breadcrumb-item active">Data</li>
                    </ol>
                  </nav>
                  <!-- Basic Breadcrumb -->
                  <!-- Custom style1 Breadcrumb -->
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Home</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Library</a>
                      </li>
                      <li class="breadcrumb-item active">Data</li>
                    </ol>
                  </nav>
                  <!--/ Custom style1 Breadcrumb -->
                  <!-- Custom style2 Breadcrumb -->
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Home</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Library</a>
                      </li>
                      <li class="breadcrumb-item active">Data</li>
                    </ol>
                  </nav>
                  <!--/ Custom style2 Breadcrumb -->
                </div>
              </div>
              <!--/ Breadcrumb -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.footer')
  </body>
</html>
