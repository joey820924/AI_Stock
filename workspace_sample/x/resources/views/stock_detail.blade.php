@extends('layouts.app')

@section('content')


<div class = "wrapper">


    <!-- Left side column. contains the logo and sidebar -->
    <aside class = "main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class = "sidebar">
    <!-- Sidebar user panel -->
    <div class = "user-panel">
    <div class = "pull-left image">
    <img src = "{{url('adminlte/dist/img/user1-128x128.jpg')}}"
class = "img-circle"
alt = "User Image">
    </div> <div class = "pull-left info"> <p> 
        
            {{
                isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email
            }}
        
     </p> <a href = "#"> <i class = "fa fa-circle text-success"> </i> Online </a> </div> </div>
    <!-- search form -->
    <!--
    <form action = "#"
method = "get"
class = "sidebar-form">
    <div class = "input-group">
    <input type = "text"
name = "q"
class = "form-control"
placeholder = "Search...">
    <span class = "input-group-btn">
    <button type = "submit"
name = "search"
id = "search-btn"
class = "btn btn-flat">
    <i class = "fa fa-search"> </i> </button> </span> </div> </form> - !>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <hr style = "    margin-top: 6px; margin-bottom: 6px;">
     <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="background-color: #f9f9f9;color:#888"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;網站導航</li>
        <hr style="    margin-top: 6px; margin-bottom: 6px;">
        <li><a href={{url('home')}}><i class="fa fa-dashboard"></i> <span>主控台</span></a></li>
        <li style="background-color: #eee"><a href={{url('stocks')}}> <i class="fa fa-indent" aria-hidden="true"></i> <span>股票大廳</span></a></li>
        <li><a href={{url('mystocks')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的投資組合</span></a></li>
         <li><a href={{url('myfollows')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的關注清單</span></a></li>
         <li><a href={{url('mysubscribe')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的訂閱</span></a></li>


    <!--
    <li class = "treeview">
    <a href = "#">
    <i class = "fa fa-files-o"> </i> <span> Layout Options </span> <span class = "pull-right-container">
    <span class = "label label-primary pull-right"> 4 </span> </span> </a> <ul class = "treeview-menu"> <li> <a href = "pages/layout/top-nav.html"> <i class = "fa fa-circle-o"> </i> Top Navigation</a> </li> <li> <a href = "pages/layout / boxed.html "> <i class = "
fa fa - circle - o "> </i> Boxed</a> </li> <li> <a href = "
pages / layout / fixed.html "> <i class = "
fa fa - circle - o "> </i> Fixed</a> </li> <li> <a href = "
pages / layout / collapsed - sidebar.html "> <i class = "
fa fa - circle - o "> </i> Collapsed Sidebar</a> </li> </ul> </li> <li> <a href = "pages/widgets.html">
    <i class = "fa fa-th"> </i> <span>Widgets</span>
    <span class = "pull-right-container">
    <small class = "label pull-right bg-green"> new </small> </span> </a> </li> <li class = "treeview">
    <a href = "#">
    <i class = "fa fa-pie-chart"> </i> <span> Charts </span> <span class = "pull-right-container">
    <i class = "fa fa-angle-left pull-right"> </i> </span> </a> <ul class = "treeview-menu"> <li> <a href = "pages/charts/chartjs.html"> <i class = "fa fa-circle-o"> </i> ChartJS</a> </li> <li> <a href = "pages/charts / morris.html "> <i class = "
fa fa - circle - o "> </i> Morris</a> </li> <li> <a href = "
pages / charts / flot.html "> <i class = "
fa fa - circle - o "> </i> Flot</a> </li> <li> <a href = "
pages / charts / inline.html "> <i class = "
fa fa - circle - o "> </i> Inline charts</a> </li> </ul> </li> <li class = "
treeview "> <a href = "#">
    <i class = "fa fa-laptop"> </i> <span> UI Elements </span> <span class = "pull-right-container">
    <i class = "fa fa-angle-left pull-right"> </i> </span> </a> <ul class = "treeview-menu"> <li> <a href = "pages/UI/general.html"> <i class = "fa fa-circle-o"> </i> General</a> </li> <li> <a href = "pages/UI / icons.html "> <i class = "
fa fa - circle - o "> </i> Icons</a> </li> <li> <a href = "
pages / UI / buttons.html "> <i class = "
fa fa - circle - o "> </i> Buttons</a> </li> <li> <a href = "
pages / UI / sliders.html "> <i class = "
fa fa - circle - o "> </i> Sliders</a> </li> <li> <a href = "
pages / UI / timeline.html "> <i class = "
fa fa - circle - o "> </i> Timeline</a> </li> <li> <a href = "
pages / UI / modals.html "> <i class = "
fa fa - circle - o "> </i> Modals</a> </li> </ul> </li> <li class = "
treeview "> <a href = "#">
    <i class = "fa fa-edit"> </i> <span>Forms</span>
    <span class = "pull-right-container">
    <i class = "fa fa-angle-left pull-right"> </i> </span> </a> <ul class = "treeview-menu"> <li> <a href = "pages/forms/general.html"> <i class = "fa fa-circle-o"> </i> General Elements</a> </li> <li> <a href = "pages/forms / advanced.html "> <i class = "
fa fa - circle - o "> </i> Advanced Elements</a> </li> <li> <a href = "
pages / forms / editors.html "> <i class = "
fa fa - circle - o "> </i> Editors</a> </li> </ul> </li> <li class = "
treeview "> <a href = "#">
    <i class = "fa fa-table"> </i> <span>Tables</span>
    <span class = "pull-right-container">
    <i class = "fa fa-angle-left pull-right"> </i> </span> </a> <ul class = "treeview-menu"> <li> <a href = "pages/tables/simple.html"> <i class = "fa fa-circle-o"> </i> Simple tables</a> </li> <li> <a href = "pages/tables / data.html "> <i class = "
fa fa - circle - o "> </i> Data tables</a> </li> </ul> </li> <li> <a href = "pages/calendar.html">
    <i class = "fa fa-calendar"> </i> <span>Calendar</span>
    <span class = "pull-right-container">
    <small class = "label pull-right bg-red"> 3 </small> <small class = "label pull-right bg-blue"> 17 </small> </span> </a> </li> <li> <a href = "pages/mailbox/mailbox.html">
    <i class = "fa fa-envelope"> </i> <span>Mailbox</span>
    <span class = "pull-right-container">
    <small class = "label pull-right bg-yellow"> 12 </small> <small class = "label pull-right bg-green"> 16 </small> <small class = "label pull-right bg-red"> 5 </small> </span> </a> </li> <li class = "treeview">
    <a href = "#">
    <i class = "fa fa-folder"> </i> <span>Examples</span>
    <span class = "pull-right-container">
    <i class = "fa fa-angle-left pull-right"> </i> </span> </a> <ul class = "treeview-menu"> <li> <a href = "pages/examples/invoice.html"> <i class = "fa fa-circle-o"> </i> Invoice</a> </li> <li> <a href = "pages/examples / profile.html "> <i class = "
fa fa - circle - o "> </i> Profile</a> </li> <li> <a href = "
pages / examples / login.html "> <i class = "
fa fa - circle - o "> </i> Login</a> </li> <li> <a href = "
pages / examples / register.html "> <i class = "
fa fa - circle - o "> </i> Register</a> </li> <li> <a href = "
pages / examples / lockscreen.html "> <i class = "
fa fa - circle - o "> </i> Lockscreen</a> </li> <li> <a href = "
pages / examples / 404. html "> <i class = "
fa fa - circle - o "> </i> 404 Error</a> </li> <li> <a href = "
pages / examples / 500. html "> <i class = "
fa fa - circle - o "> </i> 500 Error</a> </li> <li> <a href = "
pages / examples / blank.html "> <i class = "
fa fa - circle - o "> </i> Blank Page</a> </li> <li> <a href = "
pages / examples / pace.html "> <i class = "
fa fa - circle - o "> </i> Pace Page</a> </li> </ul> </li> <li class = "
treeview "> <a href = "#">
    <i class = "fa fa-share"> </i> <span>Multilevel</span>
    <span class = "pull-right-container">
    <i class = "fa fa-angle-left pull-right"> </i> </span> </a> <ul class = "treeview-menu"> <li> <a href = "#"> <i class = "fa fa-circle-o"> </i> Level One</a> </li> <li class = "treeview"> <a href = "#"> <i class = "fa fa-circle-o"> </i> Level One <span class = "pull-right-container"> <i class = "fa fa-angle-left pull-right"> </i> </span> </a> <ul class = "treeview-menu"> <li> <a href = "#"> <i class = "fa fa-circle-o"> </i> Level Two</a> </li> <li class = "treeview"> <a href = "#"> <i class = "fa fa-circle-o"> </i> Level Two <span class = "pull-right-container"> <i class = "fa fa-angle-left pull-right"> </i> </span> </a> <ul class = "treeview-menu"> <li> <a href = "#"> <i class = "fa fa-circle-o"> </i> Level Three</a> </li> <li> <a href = "#"> <i class = "fa fa-circle-o"> </i> Level Three </a> </li> </ul> </li> </ul> </li> <li> <a href = "#"> <i class = "fa fa-circle-o"> </i> Level One</a> </li> </ul> </li> <li> <a href = "documentation/index.html "> <i class = "
fa fa - book "> </i> <span>Documentation</span> </a></li> <li class = "header"> LABELS </li> <li> <a href = "#"> <i class = "fa fa-circle-o text-red"> </i> <span> Important </span> </a> </li> <li> <a href = "#"> <i class = "fa fa-circle-o text-yellow"> </i> <span>Warning</span> </a></li>
    <li> <a href = "#"> <i class = "fa fa-circle-o text-aqua"> </i> <span>Information</span> </a></li>
    -->
    </ul> </section>
    <!-- /.sidebar -->
    </aside>



<div class = "content-wrapper">

                <div class="col-md-12 text-right" style="margin-bottom: 20px;">

                      <a type="button" class="btn btn-lg btn-danger">立即購買</a>
                      <a type="button" class="btn btn-lg btn-warning">加入關注</a>

                  </div>

    <div class = "col-md-12">







    <div class = "col-md-5 ">

    <div class = "panel panel-default">
    <div class = "panel-heading" style="background-color: #66c6d0"> <h4 style="color:#fff"> {{$stock->code}} {{$stock->name}} 詳細資訊 </h4></div>
    <div class = "panel-body">

    <div class = "box box-info">

    <div class = "box-body">
    <div class = "col-sm-6">
    <div align = "center"> <img alt = "User Pic"
src = "{{url('adminlte/dist/img/stock.png')}}"
id = "profile-image1"
class = "img-circle img-responsive">

    <!--Upload Image Js And Css-->




</div>

<br>

    <!-- /input-group -->
    </div> 
    <div class = "col-sm-3"> <h4 style = "color:#00b1b1;"> {{$stock->name}} </h4></span>
       <span> <p> {{$stock->code}}  </p></span>
    </div> 

    <div class = "col-sm-3"> <h2 class="text-center" style = "color:#00b1b1;"> ${{$stock->price}} </h2>
    <span class="text-center"> <p> {{$stock->updown}}  </p></span>
    </div> 




    <div class = "clearfix"> </div>



     <hr style = "margin:5px 0 5px 0;">


    <div class = "col-sm-6 col-xs-6 tital "> 產業 : </div><div class="col-sm-6 col-xs-6 ">{{$stock->industry}} </div>
    <div class = "clearfix"> </div> <div class = "bot-border"> </div>

    <div class = "col-sm-6 col-xs-6 tital "> 資本 : </div><div class="col-sm-6"> {{$stock->capital}}</div>
    <div class = "clearfix"> </div> <div class = "bot-border"> </div>

    <div class = "col-sm-6 col-xs-6 tital "> 現金股利 : </div><div class="col-sm-6"> {{$stock->cash_div}}</div>
    <div class = "clearfix"> </div> <div class = "bot-border"> </div>

    <div class = "col-sm-6 col-xs-6 tital "> 毛利率 : </div><div class="col-sm-6">{{$stock->gm}}%</div>

    <div class = "clearfix"> </div> <div class = "bot-border"> </div>

    <div class = "col-sm-6 col-xs-6 tital "> 利益率 : </div><div class="col-sm-6">{{$stock->pp}}%</div>

    <div class = "clearfix"> </div> <div class = "bot-border"> </div>

    <div class = "col-sm-6 col-xs-6 tital "> 淨利率: </div><div class="col-sm-6">{{$stock->pm}}%</div>

    <div class = "clearfix"> </div> <div class = "bot-border"> </div>

    <div class = "col-sm-6 col-xs-6 tital "> 資產報酬率 : </div><div class="col-sm-6">{{$stock->roa}}%</div>

    <div class = "clearfix"> </div> <div class = "bot-border"> </div>

    <div class = "col-sm-6 col-xs-6 tital "> 股東權益報酬率 : </div><div class="col-sm-6">{{$stock->roe}}%</div>


    <!-- /.box-body -->
    </div>





    <!-- /.box -->

</div>




</div>  </div> </div>   

    <div class="col-md-7">

              <div class="col-md-12">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">股票走勢</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">漲幅表現</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>




    </div>


</div> </div>

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
    <div class = "control-sidebar-bg"> </div>




</div>




@endsection




@section("footer")


<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */


    //-------------
    //- LINE CHART -
    //--------------

    var areaChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "Electronics",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "Digital Goods",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    };






        var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas);
    var lineChartOptions = areaChartOptions;
    lineChartOptions.datasetFill = false;
    lineChart.Line(areaChartData, lineChartOptions);

    

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[1].fillColor = "#00a65a";
    barChartData.datasets[1].strokeColor = "#00a65a";
    barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
  });
</script>



@endsection