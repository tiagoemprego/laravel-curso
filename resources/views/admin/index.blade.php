<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

  <title>Main page - HTML Starter Project</title>

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">

  <!-- Core stylesheets -->
  <link href="css/admin/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/admin/pixeladmin.min.css" rel="stylesheet" type="text/css">
  <link href="css/admin/widgets.min.css" rel="stylesheet" type="text/css">

  <!-- Theme -->
  <link href="css/admin/themes/clean.min.css" rel="stylesheet" type="text/css">

  <!-- Pace.js -->
  <script src="js/admin/pace/pace.min.js"></script>
</head>
<body>
  <!-- Nav -->
  <nav class="px-nav px-nav-left">
    <button type="button" class="px-nav-toggle" data-toggle="px-nav">
      <span class="px-nav-toggle-arrow"></span>
      <span class="navbar-toggle-icon"></span>
      <span class="px-nav-toggle-label font-size-11">HIDE MENU</span>
    </button>

    <ul class="px-nav-content">
      <li class="px-nav-item active">
        <a href="index.html"><i class="px-nav-icon ion-home"></i><span class="px-nav-label">Main page</span></a>
      </li>
      <li class="px-nav-item">
        <a href="second.html"><i class="px-nav-icon ion-star"></i><span class="px-nav-label">Second page</span></a>
      </li>
    </ul>
  </nav>

  <!-- Navbar -->
  <nav class="navbar px-navbar">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Your Company</a>
    </div>

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-navbar-collapse" aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

    <div class="collapse navbar-collapse" id="px-navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">Link</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">First item</a></li>
            <li><a href="#">Second item</a></li>
            <li class="divider"></li>
            <li><a href="#">Third item</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Content -->
  <div class="px-content">
    <div class="page-header">
      <h1>HTML Starter Project</h1>
    </div>

    <div>Content</div>
      <div class="row">
          <div class="col-md-6">
              <div class="table-success">
                  <div class="table-header">
                      <div class="table-caption">
                          Success Table
                      </div>
                  </div>
                  <table class="table table-bordered">
                      <thead>
                      <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                          <th>active</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td></td>
                          <td>
                              <label class="switcher switcher-blank">
                                  <input type="checkbox" checked="">
                                  <div class="switcher-indicator">
                                      <div class="switcher-yes">YES</div>
                                      <div class="switcher-no">NO</div>
                                  </div>
                              </label>
                          </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>
                              <label class="switcher switcher-blank">
                                  <input type="checkbox" checked="">
                                  <div class="switcher-indicator">
                                      <div class="switcher-yes">YES</div>
                                      <div class="switcher-no">NO</div>
                                  </div>
                              </label>
                          </td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                              <label class="switcher switcher-blank">
                                  <input type="checkbox" checked="">
                                  <div class="switcher-indicator">
                                      <div class="switcher-yes">YES</div>
                                      <div class="switcher-no">NO</div>
                                  </div>
                              </label>
                          </td>
                      </tr>
                      </tbody>
                  </table>
                  <div class="table-footer">
                      Footer
                  </div>
              </div>
          </div>
{{--          <div class="col-md-6">--}}
{{--              <div class="table-danger">--}}
{{--                  <div class="table-header">--}}
{{--                      <div class="table-caption">--}}
{{--                          Danger Table--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--                  <table class="table table-bordered">--}}
{{--                      <thead>--}}
{{--                      <tr>--}}
{{--                          <th>#</th>--}}
{{--                          <th>First Name</th>--}}
{{--                          <th>Last Name</th>--}}
{{--                          <th>Username</th>--}}
{{--                      </tr>--}}
{{--                      </thead>--}}
{{--                      <tbody>--}}
{{--                      <tr>--}}
{{--                          <td>1</td>--}}
{{--                          <td>Mark</td>--}}
{{--                          <td>Otto</td>--}}
{{--                          <td>@mdo</td>--}}
{{--                      </tr>--}}
{{--                      <tr>--}}
{{--                          <td>2</td>--}}
{{--                          <td>Jacob</td>--}}
{{--                          <td>Thornton</td>--}}
{{--                          <td>@fat</td>--}}
{{--                      </tr>--}}
{{--                      <tr>--}}
{{--                          <td>3</td>--}}
{{--                          <td>Larry</td>--}}
{{--                          <td>the Bird</td>--}}
{{--                          <td>@twitter</td>--}}
{{--                      </tr>--}}
{{--                      </tbody>--}}
{{--                  </table>--}}
{{--                  <div class="table-footer">--}}
{{--                      Footer--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--          </div>--}}
      </div>
  </div>

  <!-- Footer -->
  <footer class="px-footer px-footer-bottom">
    Copyright © 2017 Your Company. All rights reserved.
  </footer>

  <!-- ==============================================================================
  |
  |  SCRIPTS
  |
  =============================================================================== -->

  <!-- Load jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Core scripts -->
  <script src="js/admin/js/bootstrap.min.js"></script>
  <script src="js/admin/js/pixeladmin.min.js"></script>

  <!-- Your scripts -->
  <script src="js/admin/js/app.js"></script>
</body>
</html>
