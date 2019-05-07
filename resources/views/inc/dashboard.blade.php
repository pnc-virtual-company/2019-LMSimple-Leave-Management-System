<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Leave Management System
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/profile.css')}}">
  <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('css/material-dashboard.css')}}" rel="stylesheet"/>
</head>

<body>
  <div class="wrapper"> 
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
        <img src="{{asset('images/logo.png')}}" style="width: 300px">
        </a>
      </div>
      <div class="sidebar-wrapper" id="myDiv">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link bg-primary" href="{{route('home.create')}}">
              <i class="material-icons text-white">dashboard</i>
              <p>Dashboard</p>
            </a>

          </li>
          <li class="nav-item dropdown " id="li">

                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p>HR</p>
                </a> 
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="{{route('manager.index')}}">List Employees</a>
                  <a class="dropdown-item" href="{{route('department.index')}}">Department</a>
                  <a class="dropdown-item" href="{{route('position.index')}}">Position</a>
                  <a class="dropdown-item" href="{{route('leave_type.index')}}">Leave type</a>
                  <a class="dropdown-item" href="{{url('personal')}}">Personal Information</a>
                </div>
          </li>

          <li class="nav-item dropdown ">
                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">people</i>
                  <p class="">Employees Profile</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">       
                <a class="dropdown-item" href="{{url('personal')}}">Personal Information</a>
                <a class="dropdown-item" href="{{route('profile.index')}}">Profile picture</a>

                  
                </div>
          </li> 
          <li class="nav-item dropdown ">
                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">content_paste</i>
                  <p class="">Requests</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                   
                  <a class="dropdown-item" href="{{route('leave_request.index')}}">Leave request</a>
                </div>

          </li>
          <li class="nav-item ">
          <a class="nav-link " href="{{url('calendar')}}">
              <i class="material-icons">date_range</i>
              <p >Calendar</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
              <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
            </li>
              <li class="nav-item dropdown"> 
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="{{route('profile.index')}}">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
    
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/position.js')}}"></script> 
      <script src="{{asset('js/bootstrap-material-design.min.js')}}"></script>
      <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
      <script src="{{asset('js/moment.min.js')}}"></script>
      <script src="{{asset('js/sweetalert2.js')}}"></script>
      <script src="{{asset('js/jquery.validate.min.js')}}"></script>
      <script src="{{asset('js/jquery.bootstrap-wizard.js')}}"></script>
      <script src="{{asset('js/bootstrap-selectpicker.js')}}"></script>
      <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
      <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('js/bootstrap-tagsinput.js')}}"></script>
      <script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>
      <script src="{{asset('js/fullcalendar.min.js')}}"></script>
      <script src="{{asset('js/jquery-jvectormap.js')}}"></script>
      <script src="{{asset('js/nouislider.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
      <script src="{{asset('/js/arrive.min.js')}}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <script src="{{asset('js/material-dashboard.js?v=2.1.1')}}" type="text/javascript"></script>
      <script>
        $(document).ready(function() {
          $().ready(function() {
            $sidebar = $('.sidebar');
    
            $sidebar_img_container = $sidebar.find('.sidebar-background');
    
            $full_page = $('.full-page');
    
            $sidebar_responsive = $('body > .navbar-collapse');
    
            window_width = $(window).width();
    
            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
    
            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
              if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                $('.fixed-plugin .dropdown').addClass('open');
              }
    
            }
    
            $('.fixed-plugin a').click(function(event) {
              // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
              if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                  event.stopPropagation();
                } else if (window.event) {
                  window.event.cancelBubble = true;
                }
              }
            });
    
            $('.fixed-plugin .active-color span').click(function() {
              $full_page_background = $('.full-page-background');
    
              $(this).siblings().removeClass('active');
              $(this).addClass('active');
    
              var new_color = $(this).data('color');
    
              if ($sidebar.length != 0) {
                $sidebar.attr('data-color', new_color);
              }
    
              if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
              }
    
              if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data-color', new_color);
              }
            });
    
            $('.fixed-plugin .background-color .badge').click(function() {
              $(this).siblings().removeClass('active');
              $(this).addClass('active');
    
              var new_color = $(this).data('background-color');
    
              if ($sidebar.length != 0) {
                $sidebar.attr('data-background-color', new_color);
              }
            });
    
            $('.fixed-plugin .img-holder').click(function() {
              $full_page_background = $('.full-page-background');
    
              $(this).parent('li').siblings().removeClass('active');
              $(this).parent('li').addClass('active');
    
    
              var new_image = $(this).find("img").attr('src');
    
              if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                $sidebar_img_container.fadeOut('fast', function() {
                  $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                  $sidebar_img_container.fadeIn('fast');
                });
              }
    
              if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
                $full_page_background.fadeOut('fast', function() {
                  $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                  $full_page_background.fadeIn('fast');
                });
              }
    
              if ($('.switch-sidebar-image input:checked').length == 0) {
                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              }
    
              if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
              }
            });
    
            $('.switch-sidebar-image input').change(function() {
              $full_page_background = $('.full-page-background');
    
              $input = $(this);
    
              if ($input.is(':checked')) {
                if ($sidebar_img_container.length != 0) {
                  $sidebar_img_container.fadeIn('fast');
                  $sidebar.attr('data-image', '#');
                }
    
                if ($full_page_background.length != 0) {
                  $full_page_background.fadeIn('fast');
                  $full_page.attr('data-image', '#');
                }
    
                background_image = true;
              } else {
                if ($sidebar_img_container.length != 0) {
                  $sidebar.removeAttr('data-image');
                  $sidebar_img_container.fadeOut('fast');
                }
    
                if ($full_page_background.length != 0) {
                  $full_page.removeAttr('data-image', '#');
                  $full_page_background.fadeOut('fast');
                }
    
                background_image = false;
              }
            });
    
            $('.switch-sidebar-mini input').change(function() {
              $body = $('body');
    
              $input = $(this);
    
              if (md.misc.sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                md.misc.sidebar_mini_active = false;
    
                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
    
              } else {
    
                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
    
                setTimeout(function() {
                  $('body').addClass('sidebar-mini');
    
                  md.misc.sidebar_mini_active = true;
                }, 300);
              }
    
              // we simulate the window Resize so the charts will get updated in realtime.
              var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
              }, 180);
    
              // we stop the simulation of Window Resize after the animations are completed
              setTimeout(function() {
                clearInterval(simulateWindowResize);
              }, 1000);
    
            });
          });
        });
      </script>
      <script>
        $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          md.initDashboardPageCharts();
    
        });
        
    });
    // Add active class to the current button (highlight it)
  
}
</scr
      </script>
</body>

</html>
