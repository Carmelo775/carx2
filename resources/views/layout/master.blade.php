<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>- Panel Adminitrador</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ url('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/zabuto_calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/js/gritter/css/jquery.gritter.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/lineicons/style.css') }}">    
    
    <!-- Custom styles for this template -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style-responsive.css') }}" rel="stylesheet">

    <script src="{{ url('assets/js/chart-master/Chart.js') }}"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Ocultar barra"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><b>Nombre Empresa</b></a>
            <!--logo end-->
           
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="{{url('/logout')}}">Cerrar Sesión</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="#" class="img-circle" width="100" height="80"></a></p>
                  <h5 class="centered">#</h5>
                    
                  <li class="mt">
                      <a class="active" href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>Panel Principal</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Productos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/products/create')}}">Crear Productos</a></li>
                          <li><a  href="{{url('/products')}}">Lista de productos</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cubes"></i>
                          <span>Puntos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('points/create')}}">Agregar Puntos</a></li>
                          <li><a  href="{{url('/points')}}">Listar Puntos</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="{{url('ventas')}}" >
                          <i class="fa fa-envelope-o"></i>
                          <span>Ventas</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <section id="main-content">
        
          @yield('mt')
      </section>

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ url('assets/js/jquery.js') }}"></script>
    <script src="{{ url('assets/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ url('assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ url('assets/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/jquery.sparkline.js') }}"></script>


    <!--common script for all pages-->
    <script src="{{ url('assets/js/common-scripts.js') }}"></script>
    
    <script type="text/javascript" src="{{ url('assets/js/gritter/js/jquery.gritter.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/gritter-conf.js') }}"></script>

    <!--script for this page-->
    <script src="{{ url('assets/js/sparkline-chart.js') }}"></script>    
  <script src="{{ url('assets/js/zabuto_calendar.js') }}"></script>  
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
