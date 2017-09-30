@extends('layouts.app')

@section('content')
<div class="wrapper">


  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('adminlte/dist/img/user1-128x128.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</p>
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
        <li style="background-color: #eee"><a href={{url('home')}}><i class="fa fa-dashboard"></i> <span>主控台</span></a></li>
        <li><a href={{url('stocks')}}> <i class="fa fa-indent" aria-hidden="true"></i> <span>股票大廳</span></a></li>
        <li><a href={{url('mystocks')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的投資組合</span></a></li>
         <li ><a href={{url('myfollows')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的關注清單</span></a></li>
         <li><a href={{url('mysubscribe')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的訂閱</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-university" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">投資組合淨值</span>
              <span class="info-box-number">{{$invest}}</span>
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
              <span class="info-box-number">{{$user->balance}}</span>
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
              <span class="info-box-number">{{$winRate}}%</span>
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
              <span class="info-box-text">訂閱您的用戶</span>
              <span class="info-box-number">0</span>
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
              <h3 class="box-title">投資組合報告</h3>

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
                <div class="col-md-8">
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
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>目標管理</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">{{$mystocks[0]->code}} {{$mystocks[0]->name}}</span>
                    <span class="progress-number"><b>95</b>/120%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 75%;background-color: ##d4434a"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">{{$mystocks[1]->code}} {{$mystocks[1]->name}}</span>
                    <span class="progress-number"><b>102</b>/130%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 80%;background-color: #239cef"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">{{$mystocks[2]->code}} {{$mystocks[2]->name}}</span>
                    <span class="progress-number"><b>91</b>/110%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 70%;background-color: #4c5468"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">{{$mystocks[3]->code}} {{$mystocks[3]->name}}</span>
                    <span class="progress-number"><b>105</b>/120%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 82%;background-color: #91c696"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-down"></i> {{ round(100-(($invest+$user->balance)/5000),2) }}%</span>
                    <h5 class="description-header">${{$invest+$user->balance}}</h5>
                    <span class="description-text">總資產</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">${{500000-$user->balance}}</h5>
                    <span class="description-text">投入成本</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-down"></i> {{ round( (1-($nw/500000))*100  ,2) }}%</span>
                    <h5 class="description-header">-${{500000-$nw}}</h5>
                    <span class="description-text">淨收益</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                  <span class="description-percentage text-red"><i class="fa fa-caret-up"></i></span>
                    <h5 class="description-header">+7.6%</h5>
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
              <h3 class="box-title">交易紀錄</h3>

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
                    <td>{{$mystocks[0]->name}}</td>
                    <td><span class="label label-success">Buy</span></td>

                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR0005</a></td>
                    <td>{{$mystocks[1]->name}}</td>
                    <td><span class="label label-success">Buy</span></td>

                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR0007</a></td>
                    <td>{{$mystocks[4]->name}}</td>
                    <td><span class="label label-success">Buy</span></td>

                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR0009</a></td>
                    <td>{{$mystocks[4]->name}}</td>
                    <td><span class="label label-danger">Sell</span></td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR0042</a></td>
                    <td>{{$mystocks[2]->name}}</td>
                    <td><span class="label label-success">Buy</span></td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR0048</a></td>
                    <td>{{$mystocks[3]->name}}</td>
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
              <h3 class="box-title">我的投資組合</h3>

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
                    <img src="{{url('adminlte/dist/img/stock.png')}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title" style="font-size: 17px;">{{$mystocks[0]->code}} {{$mystocks[0]->name}}
                      <span class="label label-warning pull-right">${{$mystocks[0]->price}}</span></a>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{url('adminlte/dist/img/stock.png')}}" alt="Product Image">
                  </div>
                  <div class="product-info">

                    <a href="javascript:void(0)" class="product-title" style="font-size: 17px;">{{$mystocks[1]->code}} {{$mystocks[1]->name}}
                      <span class="label label-warning pull-right">${{$mystocks[1]->price}}</span></a>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{url('adminlte/dist/img/stock.png')}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title" style="font-size: 17px;">{{$mystocks[2]->code}} {{$mystocks[2]->name}}
                      <span class="label label-warning pull-right">${{$mystocks[2]->price}}</span></a>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{url('adminlte/dist/img/stock.png')}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                     <a href="javascript:void(0)" class="product-title" style="font-size: 17px;">{{$mystocks[3]->code}} {{$mystocks[3]->name}}
                      <span class="label label-warning pull-right">${{$mystocks[3]->price}}</span></a>
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


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

<script src="adminlte/plugins/jQuery/jquery-3.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="adminlte/plugins/morris/morris.min.js"></script>
  <script type="text/javascript">

   $(function () {
    "use strict";

    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
    { period: '2016-06-08', park1: 30000 },
    { period: '2016-06-09', park1: 75000  },
    { period: '2016-06-10', park1: 67000  },
    { period: '2016-06-11', park1: 125000 },
    { period: '2016-06-12', park1: 170000 },
    { period: '2016-06-13', park1: 175600  },
    { period: '2016-06-14', park1: 188000 },
    { period: '2016-06-15', park1: 180000 },
    { period: '2016-06-16', park1: 174500 },
    { period: '2016-06-17', park1: 169000  },
    { period: '2016-06-18', park1: 162750  }
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
@endsection
