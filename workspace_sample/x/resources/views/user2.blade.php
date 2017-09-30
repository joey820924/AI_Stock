
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="JfT9fgRSRQTXZZKgiLKuJuw3ENosehUeYWu5q2iZ">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="http://localhost/x/x/public/css/app.css" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

                <script src="http://localhost/x/x/public/css/bootstrap-tour.min.cs"></script>
      
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/x/x/public/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/x/x/public/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/x/x/public/adminlte/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="adminlte/plugins/datatables/dataTables.bootstrap.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">










  <style type="text/css">

  body{
    font-family: '微軟正黑體'!important;
  }


                input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
    border:2px solid #03b1ce ;}
    .tital{ font-size:16px; font-weight:500;}
     .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}    


  </style>





</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #fff">
            <div class="col-xs-12">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="http://localhost/x/x/public" style="padding:0px; ">
                        <img src="http://localhost/x/x/public/logo.png" style="height:50px;margin:0px;">
                    </a>
                </div>


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        
                            <li><a href="http://localhost/x/x/public/lobby">股票大廳</a></li>
                            <li><a href="http://localhost/x/x/public/analytics">股票分析</a></li>

                            
                        
                    </ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    jason <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="http://localhost/x/x/public/logout"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="http://localhost/x/x/public/logout" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" value="JfT9fgRSRQTXZZKgiLKuJuw3ENosehUeYWu5q2iZ">
                                        </form>
                                    </li>
                                </ul>
                            </li>
                                            </ul>
                </div>

            </div>
        </nav>

        <div class="wrapper">


  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://localhost/x/x/public/adminlte/dist/img/user1-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>jason</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!--
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      -!>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <hr style="    margin-top: 6px; margin-bottom: 6px;">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="background-color: #f9f9f9;color:#888"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;網站導航</li>
        <hr style="    margin-top: 6px; margin-bottom: 6px;">
        <li><a href={{url('home')}}><i class="fa fa-dashboard"></i> <span>主控台</span></a></li>
        <li><a href={{url('stocks')}}> <i class="fa fa-indent" aria-hidden="true"></i> <span>股票大廳</span></a></li>
        <li><a href={{url('mystocks')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的投資組合</span></a></li>
         <li ><a href={{url('myfollows')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的關注清單</span></a></li>
         <li style="background-color: #eee"><a href={{url('mysubscribe')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的訂閱</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="text-left image col-xs-1" >
          <img style="width:80px;" src="{{url('adminlte/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
        </div>
      <h1 class="col-xs-11 text-left" style="font-family: '微軟正黑體';padding-top: 25px;">
        Alice的投資紀錄
      </h1>
    </section>

    <div style="clear: both;border-color: #fff;height:10px;border-bottom: 1px solid #fff"></div>





      <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-university" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">投資組合淨值</span>
              <span class="info-box-number">1472750</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">可用餘額</span>
              <span class="info-box-number">613210</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-trophy" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">投資獲利率</span>
              <span class="info-box-number">117.63%</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">訂閱Alice的用戶</span>
              <span class="info-box-number">4000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Alice的投資組合報告</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-center">
                    <strong>漲幅表現 : 08 June, 2016 - 18 June, 2014</strong>
                  </p>

                            <div class="box box-info">
            <div class="box-body chart-responsive">
              <div class="chart" id="line-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-red"><i class="fa fa-caret-up"></i> 4.5%</span>
                    <h5 class="description-header">$1472750</h5>
                    <span class="description-text">總資產</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-red"><i class="fa fa-caret-up"></i> 3.24%</span>
                    <h5 class="description-header">$766432</h5>
                    <span class="description-text">投入成本</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-red"><i class="fa fa-caret-up"></i> 4.5%</span>
                    <h5 class="description-header">+$706318</h5>
                    <span class="description-text">淨收益</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                  <span class="description-percentage text-red"><i class="fa fa-caret-up"></i></span>
                    <h5 class="description-header">+15.84%</h5>
                    <span class="description-text">預計漲幅</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

            <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Alice的交易紀錄</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Item</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR0001</a></td>
                    <td>系通</td>
                    <td><span class="label label-success">Buy</span></td>

                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR0005</a></td>
                    <td>精確</td>
                    <td><span class="label label-success">Buy</span></td>

                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR0007</a></td>
                    <td>尼克森</td>
                    <td><span class="label label-success">Buy</span></td>

                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR0009</a></td>
                    <td>志嘉</td>
                    <td><span class="label label-danger">Sell</span></td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR0042</a></td>
                    <td>京晨科</td>
                    <td><span class="label label-success">Buy</span></td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">新增交易</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">查看全部交易</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">

          <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">近期購買</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="http://localhost/x/x/public/adminlte/dist/img/stock.png" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title" style="font-size: 17px;">5348 系通
                      <span class="label label-warning pull-right">$4.69 / 2017-06-18</span></a>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="http://localhost/x/x/public/adminlte/dist/img/stock.png" alt="Product Image">
                  </div>
                  <div class="product-info">

                    <a href="javascript:void(0)" class="product-title" style="font-size: 17px;">3162 精確
                      <span class="label label-warning pull-right">$10.35 / 2017-06-17</span></a>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="http://localhost/x/x/public/adminlte/dist/img/stock.png" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title" style="font-size: 17px;">4530 尼克森
                      <span class="label label-warning pull-right">$55.7 / 2017-06-17</span></a>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="http://localhost/x/x/public/adminlte/dist/img/stock.png" alt="Product Image">
                  </div>
                  <div class="product-info">
                     <a href="javascript:void(0)" class="product-title" style="font-size: 17px;">6419 京晨科
                      <span class="label label-warning pull-right">$18.55 / 2017-06-16</span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">查看所有投資組合</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <!-- Scripts -->




<script src="http://localhost/x/x/public/adminlte/plugins/jQuery/jquery-3.1.1.min.js"></script>
    <script src="http://localhost/x/x/public/adminlte/js/app.js"></script>



<!-- FastClick -->
<script src="http://localhost/x/x/public/adminlte/plugins/fastclick/fastclick.js"  ></script>
<!-- AdminLTE App -->
<script src="http://localhost/x/x/public/adminlte/dist/js/adminlte.js" ></script>
<!-- Sparkline -->
<script src="http://localhost/x/x/public/adminlte/plugins/sparkline/jquery.sparkline.min.js" ></script>
<!-- jvectormap -->
<script src="http://localhost/x/x/public/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"  ></script>
<script src="http://localhost/x/x/public/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" ></script>
<!-- SlimScroll 1.3.0 -->
<script src="http://localhost/x/x/public/adminlte/plugins/slimScroll/jquery.slimscroll.min.js" ></script>
<!-- ChartJS 1.0.1 -->
<script src="http://localhost/x/x/public/adminlte/plugins/chartjs/Chart.min.js" ></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/x/x/public/adminlte/dist/js/pages/dashboard2.js" src=""></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/x/x/public/adminlte/dist/js/demo.js" ></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>


<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script src="http://localhost/x/x/public/adminlte/plugins/chartjs/Chart.min.js"></script>
<script src="http://localhost/x/x/public/adminlte/dist/js/demo.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://localhost/x/x/public/js/bootstrap-tour.min.js"></script>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://localhost/x/x/public/adminlte/plugins/morris/morris.min.js"></script>
  <script type="text/javascript">

   $(function () {
    "use strict";

    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
    { period: '2016-06-08', park1: 921525 },
    { period: '2016-06-09', park1: 921588  },
    { period: '2016-06-10', park1: 971525  },
    { period: '2016-06-11', park1: 990525 },
    { period: '2016-06-12', park1: 991525 },
    { period: '2016-06-13', park1: 999755  },
    { period: '2016-06-14', park1: 1127559 },
    { period: '2016-06-15', park1: 1367559 },
    { period: '2016-06-16', park1: 1411400 },
    { period: '2016-06-17', park1: 1427429  },
    { period: '2016-06-18', park1: 1472750  }
  ],
  lineColors: ['#819C79', '#fc8710', '#FF6541', '#A4ADD3', '#766B56'],
  xkey: 'period',
  ykeys: ['park1'],
  labels: ['PARK 1'],
  xLabels: 'day',
  xLabelAngle: 45,
  xLabelFormat: function (d) {
    var weekdays = new Array(7);
    weekdays[0] = "SUN";
    weekdays[1] = "MON";
    weekdays[2] = "TUE";
    weekdays[3] = "WED";
    weekdays[4] = "THU";
    weekdays[5] = "FRI";
    weekdays[6] = "SAT";

    return weekdays[d.getDay()] + '-' + 
           ("0" + (d.getMonth() + 1)).slice(-2) + '-' + 
           ("0" + (d.getDate())).slice(-2);
  },
  resize: true
      
    });
  
  });



  </script>





</div>
    </div>









</body>
</html>
