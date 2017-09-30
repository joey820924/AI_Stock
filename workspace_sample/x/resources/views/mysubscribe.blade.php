@extends('layouts.app')
@section('header')
<link rel="stylesheet" href="{{ url('css/stocks.css') }}">
@endsection
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
        <li><a href={{url('home')}}><i class="fa fa-dashboard"></i> <span>主控台</span></a></li>
        <li><a href={{url('stocks')}}> <i class="fa fa-indent" aria-hidden="true"></i> <span>股票大廳</span></a></li>
        <li><a href={{url('mystocks')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的投資組合</span></a></li>
         <li ><a href={{url('myfollows')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的關注清單</span></a></li>
         <li style="background-color: #eee"><a href={{url('mysubscribe')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的訂閱</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper" style="display:block;min-height: 800px;">

    <section class="content-header">
      <h1 style="font-family: '微軟正黑體';padding-top: 5px;">
      用戶管理 <span class="label label-info">我的訂閱清單</span>
      </h1>
    </section>




    <section class="content" style="border-top: 1px solid #fff;margin-top: 15px;background-color: #eee;min-height: 600px;">

  <div class="col-md-12">

 
      <div class="col-xs-2" style="border: 1px solid #00a65a;background-color: #fff;margin: 10px;padding:10px;padding-top: 0px;border-radius: 10px;">
    <div class="card">
      <div class="card-block">
              <h3 class="card-title text-center" style="padding-left: 0px;margin-top: 10px;">Alice</h3>
         <div class="text-center image" >
          <img style="width:80px;" src="{{url('adminlte/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
        </div>

        <hr style="margin: 15px;">
        <div class=" col-xs-6">
          <h5>總資產</h5>
          <h6>1472750</h6>
        </div>
         <div class="col-xs-6">
          <h5>淨收益</h5>
					<h6 style='color:Red'>706318</h6>

          </div>
         <hr>
        <a href="user/subscribe/2" class="col-xs-12 btn btn-success">查看近期活動</a>
      </div>
    </div>
  </div>
  



</div>


</section>


  </div>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
@endsection
@section("footer")

@endsection