{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ADMIN {{Auth::user()->nama}}</h1>

</body>
</html>
 --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIRMUN ADMIN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('Assets') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('Assets') }}/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('Assets') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('Assets') }}/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('Assets') }}/images/logoo.png" />
  </head>
  <body>




    <div class="container-scroller">
      {{-- <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
          <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand brand-logo" href="/role/admin"><img src="{{ asset('Assets') }}/images/SIMUNIR.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('Assets') }}/images/logo-mini.svg" alt="logo"/></a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-sort-variant"></span>
            </button>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            {{-- search bar --}}
          {{-- <ul class="navbar-nav mr-lg-4 w-100">
            <li class="nav-item nav-search d-none d-lg-block w-100">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                    <i class="mdi mdi-magnify"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul> --}}
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown me-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-message-text mx-0"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                      <img src="{{ asset('Assets') }}/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">David Grey
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                      <img src="{{ asset('Assets') }}/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">Tim Cook
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                      <img src="{{ asset('Assets') }}/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal"> Johnson
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown me-4">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell mx-0"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <img src="{{ asset('Assets') }}/images/faces/face5.jpg" alt="profile"/>
                <a class="nav-profile-name">{{ Auth::User()->nama }}</a>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="/profile">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                      <i class="mdi mdi-logout text-primary">  {{ __('Logout') }}</i>

                    </x-dropdown-link>
                </form>


              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/admin">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Form elements</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Charts</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/icons/mdi.html">
                <i class="mdi mdi-emoticon menu-icon"></i>
                <span class="menu-title">Icons</span>
              </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="/userData"> Master </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Bendahara </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Sekertaris </a></li>

                </ul>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="documentation/documentation.html">
                  <i class="mdi mdi-calendar-text menu-icon"></i>
                  <span class="menu-title">Jadwal Kegiatan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="documentation/documentation.html">
                  <i class="mdi mdi-human-male-female menu-icon"></i>
                  <span class="menu-title">Data Karyawan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="documentation/documentation.html">
                  <i class="mdi mdi-cash menu-icon"></i>
                  <span class="menu-title">Laporan Keuangan</span>
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="documentation/documentation.html">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Documentation</span>
              </a>
            </li>

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            @yield('profile')
          <div class="content-wrapper">
              <div class="row">
                @yield('table')
                {{-- <div class="col-md-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Data Uaser</p>
                      <div class="table-responsive">

                      </div>
                    </div>
                  </div>
                </div> --}}
              </div>



            {{-- <div class="row">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Recent Purchases</p>
                    <div class="table-responsive">
                      <table id="recent-purchases-listing" class="table">
                        <thead>
                          <tr>
                              <th>Name</th>
                              <th>Status report</th>
                              <th>Office</th>
                              <th>Price</th>
                              <th>Date</th>
                              <th>Gross amount</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td>Jeremy Ortega</td>
                              <td>Levelled up</td>
                              <td>Catalinaborough</td>
                              <td>$790</td>
                              <td>06 Jan 2018</td>
                              <td>$2274253</td>
                          </tr>
                          <tr>
                              <td>Alvin Fisher</td>
                              <td>Ui design completed</td>
                              <td>East Mayra</td>
                              <td>$23230</td>
                              <td>18 Jul 2018</td>
                              <td>$83127</td>
                          </tr>
                          <tr>
                              <td>Emily Cunningham</td>
                              <td>support</td>
                              <td>Makennaton</td>
                              <td>$939</td>
                              <td>16 Jul 2018</td>
                              <td>$29177</td>
                          </tr>
                          <tr>
                              <td>Minnie Farmer</td>
                              <td>support</td>
                              <td>Agustinaborough</td>
                              <td>$30</td>
                              <td>30 Apr 2018</td>
                              <td>$44617</td>
                          </tr>
                          <tr>
                              <td>Betty Hunt</td>
                              <td>Ui design not completed</td>
                              <td>Lake Sandrafort</td>
                              <td>$571</td>
                              <td>25 Jun 2018</td>
                              <td>$78952</td>
                          </tr>
                          <tr>
                              <td>Myrtie Lambert</td>
                              <td>Ui design completed</td>
                              <td>Cassinbury</td>
                              <td>$36</td>
                              <td>05 Nov 2018</td>
                              <td>$36422</td>
                          </tr>
                          <tr>
                              <td>Jacob Kennedy</td>
                              <td>New project</td>
                              <td>Cletaborough</td>
                              <td>$314</td>
                              <td>12 Jul 2018</td>
                              <td>$34167</td>
                          </tr>
                          <tr>
                              <td>Ernest Wade</td>
                              <td>Levelled up</td>
                              <td>West Fidelmouth</td>
                              <td>$484</td>
                              <td>08 Sep 2018</td>
                              <td>$50862</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://sentramediadevelopment.tech/" target="_blank">sentramediadevelopment.tech </a>2021</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://sentramediadevelopment.tech" target="_blank"> Galih's  </a> templates</span>
          </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('Assets') }}/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('Assets') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('Assets') }}/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ asset('Assets') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('Assets') }}/js/off-canvas.js"></script>
    <script src="{{ asset('Assets') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('Assets') }}/js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('Assets') }}/js/dashboard.js"></script>
    <script src="{{ asset('Assets') }}/js/data-table.js"></script>
    <script src="{{ asset('Assets') }}/js/jquery.dataTables.js"></script>
    <script src="{{ asset('Assets') }}/js/dataTables.bootstrap4.js"></script>
    <!-- End custom js for this page-->

    <script src="{{ asset('Assets') }}js/jquery.cookie.js" type="text/javascript"></script>
  </body>

  </html>

