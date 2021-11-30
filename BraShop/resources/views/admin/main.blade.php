<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin Manager</title>

  <!-- Bootstrap -->
  <link href="/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-wysiwyg -->
  <link href="/backend/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="/backend/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
  <!-- Switchery -->
  <link href="/backend/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
  <!-- starrr -->
  <link href="/backend/vendors/starrr/dist/starrr.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  @yield('css')
  <link href="/backend/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('admin.index')}}" class="site_title"><i class="fa fa-paw"></i> <span>Admin Manager</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="/backend/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{auth()->guard()->user()->name}}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br>

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Category <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('category.index')}}">Main</a></li>
                    <li><a href="{{route('category.create')}}">Upload</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Product <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('product.index')}}">Main</a></li>
                    <li><a href="{{route('product.create')}}">Upload</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Color <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('color.index')}}">Main</a></li>
                    <li><a href="{{route('color.create')}}">Upload</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Size <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('size.index')}}">Main</a></li>
                    <li><a href="{{route('size.create')}}">Upload</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Customers <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('customer.index')}}">Main</a></li>
                    <!-- <li><a href="">Upload</a></li> -->
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Orders <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('order.index')}}">Main</a></li>
                    <!-- <li><a href="">Upload</a></li> -->
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Emails <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('mail.index')}}">Main</a></li>
                    <!-- <li><a href="">Upload</a></li> -->
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Banner <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{route('banner.index')}}">Main</a></li>
                    <li><a href="{{route('banner.create')}}">Upload</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('admin.logout')}}">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle pb-3">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
        </div>
      </div>
      <!-- /top navigation -->

      @yield('main')

    </div>
  </div>

  <!-- jQuery -->
  <script src="/backend/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="/backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="/backend/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="/backend/vendors/nprogress/nprogress.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="/backend/vendors/iCheck/icheck.min.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="/backend/vendors/moment/min/moment.min.js"></script>
  <script src="/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap-wysiwyg -->
  <script src="/backend/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
  <script src="/backend/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
  <script src="/backend/vendors/google-code-prettify/src/prettify.js"></script>
  <!-- jQuery Tags Input -->
  <script src="/backend/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
  <!-- Switchery -->
  <script src="/backend/vendors/switchery/dist/switchery.min.js"></script>
  <!-- Select2 -->
  <script src="/backend/vendors/select2/dist/js/select2.full.min.js"></script>
  <!-- Parsley -->
  <script src="/backend/vendors/parsleyjs/dist/parsley.min.js"></script>
  <!-- Autosize -->
  <script src="/backend/vendors/autosize/dist/autosize.min.js"></script>
  <!-- jQuery autocomplete -->
  <script src="/backend/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
  <!-- starrr -->
  <script src="/backend/vendors/starrr/dist/starrr.js"></script>
  <!-- Custom Theme Scripts -->
  @yield('js')
  <script src="/backend/build/js/custom.min.js"></script>
</body>

</html>