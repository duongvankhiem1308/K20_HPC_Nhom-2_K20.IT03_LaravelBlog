
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
                <span class="text-muted fw-light">UI elements /</span> Tooltips & popovers
              </h4>

              <!-- Tooltips -->
              <div class="card mb-4">
                <h5 class="card-header">Tooltips</h5>
                <div class="card-body">
                  <div class="text-light small fw-semibold">Directions</div>
                  <div class="row demo-vertical-spacing">
                    <div class="col">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="tooltip"
                        data-bs-offset="0,4"
                        data-bs-placement="right"
                        data-bs-html="true"
                        title="<i class='bx bx-trending-up bx-xs' ></i> <span>Tooltip on right</span>"
                      >
                        Right
                      </button>
                    </div>
                    <div class="col">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="tooltip"
                        data-bs-offset="0,4"
                        data-bs-placement="top"
                        data-bs-html="true"
                        title="<i class='bx bx-bell bx-xs' ></i> <span>Tooltip on top</span>"
                      >
                        Top
                      </button>
                    </div>
                    <div class="col">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="tooltip"
                        data-bs-offset="0,4"
                        data-bs-placement="bottom"
                        data-bs-html="true"
                        title="<i class='bx bx-heart bx-xs' ></i> <span>Tooltip on bottom</span>"
                      >
                        Bottom
                      </button>
                    </div>
                    <div class="col">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="tooltip"
                        data-bs-offset="0,4"
                        data-bs-placement="left"
                        data-bs-html="true"
                        title="<i class='bx bx-dollar bx-xs' ></i> <span>Tooltip on left</span>"
                      >
                        Left
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Tooltips -->

              <!-- Popovers -->
              <div class="card">
                <h5 class="card-header">Popovers</h5>
                <div class="card-body">
                  <div class="text-light small fw-semibold">Directions</div>
                  <div class="row demo-vertical-spacing">
                    <div class="col">
                      <button
                        type="button"
                        class="btn btn-primary text-nowrap"
                        data-bs-toggle="popover"
                        data-bs-offset="0,14"
                        data-bs-placement="right"
                        data-bs-html="true"
                        data-bs-content="<p>This is a very beautiful popover, show some love.</p> <div class='d-flex justify-content-between'><button type='button' class='btn btn-sm btn-outline-secondary'>Skip</button><button type='button' class='btn btn-sm btn-primary'>Read More</button></div>"
                        title="Popover Title"
                      >
                        Popover on right
                      </button>
                    </div>
                    <div class="col">
                      <button
                        type="button"
                        class="btn btn-primary text-nowrap"
                        data-bs-toggle="popover"
                        data-bs-offset="0,14"
                        data-bs-placement="top"
                        data-bs-html="true"
                        data-bs-content="<p>This is a very beautiful popover, show some love.</p> <div class='d-flex justify-content-between'><button type='button' class='btn btn-sm btn-outline-secondary'>Skip</button><button type='button' class='btn btn-sm btn-primary'>Read More</button></div>"
                        title="Popover Title"
                      >
                        Popover on top
                      </button>
                    </div>
                    <div class="col">
                      <button
                        type="button"
                        class="btn btn-primary text-nowrap"
                        data-bs-toggle="popover"
                        data-bs-offset="0,14"
                        data-bs-placement="bottom"
                        data-bs-html="true"
                        data-bs-content="<p>This is a very beautiful popover, show some love.</p> <div class='d-flex justify-content-between'><button type='button' class='btn btn-sm btn-outline-secondary'>Skip</button><button type='button' class='btn btn-sm btn-primary'>Read More</button></div>"
                        title="Popover Title"
                      >
                        Popover on bottom
                      </button>
                    </div>
                    <div class="col">
                      <button
                        type="button"
                        class="btn btn-primary text-nowrap"
                        data-bs-toggle="popover"
                        data-bs-offset="0,14"
                        data-bs-placement="left"
                        data-bs-html="true"
                        data-bs-content="<p>This is a very beautiful popover, show some love.</p> <div class='d-flex justify-content-between'><button type='button' class='btn btn-sm btn-outline-secondary'>Skip</button><button type='button' class='btn btn-sm btn-primary'>Read More</button></div>"
                        title="Popover Title"
                      >
                        Popover on left
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Popovers -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.footer')
  </body>
</html>
