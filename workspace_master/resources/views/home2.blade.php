@extends('layouts.app')
<?php
set_time_limit(0);
?>
@section('content')


<?php 
ini_set('max_execution_time', 0);
?>
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
                    <strong>漲幅表現 : 10 Sep, 2017 - 18 June, 2017</strong>
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

                                    <div class="progress-group">
                    <span class="progress-text">{{$mystocks[5]->code}} {{$mystocks[5]->name}}</span>
                    <span class="progress-number"><b>100</b>/100%</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 100%;background-color: #d11d66"></div>
                    </div>
                    <div>
<?php
        if(isset($_POST['speech'])){
            $GLOBALS['speech'] = $_POST['speech'];
        }
        else{
          $GLOBALS['speech'] = "";
        }
        
        
          if(isset($_GET['allstock'])){          
            $GLOBALS['allstock'] = $allstock->point."  而近期漲幅則是".$allstock->direction."了".$allstock->rate;        
          }
          else{
            $GLOBALS['allstock'] = '';
          }
          
          if(isset($_GET['finish'])){
              $GLOBALS['finish'] = $_GET['finish'];
          }
          else{
            $GLOBALS['finish'] = '';
          }
          
        
?>
<div id = "result"></div>
<div id = "show"></div>
<div style="display:none">
  <div class="button" id = 'press' onclick="speak();">Speak</div>
</div>
    <script>
      var speech = "<?php echo $GLOBALS['speech']; ?>";
      var finish = "<?php echo $GLOBALS['finish']; ?>";
      function speak () {
        var twindex = ["上市","上櫃","電子","金融"];
        var allstock = "<?php echo $GLOBALS['allstock']; ?>";
        for(var i=0;i<twindex.length;i++){
          if(speech.indexOf(twindex[i])!=-1&&speech!=""){
            speech = "台股"+speech+"指數為";
          }
        }
        speech = speech+allstock;
        var show = document.getElementById("show");
        var msg = new SpeechSynthesisUtterance();
        msg.lang = "zh-TW"
        msg.text = speech;
        msg.volume = 60;
        
        window.speechSynthesis.speak(msg);
        function _wait() {
          if ( ! window.speechSynthesis.speaking && speech!="" && finish=="") {
            convert();
            return;
          }
          else if(! window.speechSynthesis.speaking && speech!="" && finish!=""){
            start();
            return;
          }
          window.setTimeout( _wait, 200 );
        }
        _wait();
      };
</script>
    
<script>
document.getElementById("press").click();
</script>

<!--<button onclick="convert();"><i class="fa fa-microphone"></i></button>-->
<script>

function convert(){
  var r = document.getElementById('result');
  if('webkitSpeechRecognition' in window){
					var speechRecognizer = new webkitSpeechRecognition();
					speechRecognizer.continuous = false;
					speechRecognizer.interimResults = false;
					speechRecognizer.lang = 'cmn-Hant-TW';
					speechRecognizer.start();
					
					speechRecognizer.status = true;
					show.innerHTML = "convert"
          
          setTimeout(function(){
            speechRecognizer.status=false;
            speechRecognizer.stop();
          },10000);
          speechRecognizer.onend=function(event){
              if(speechRecognizer.status===true){
                speechRecognizer.start();
                show.innerHTML = "on";
              }else{
                document.getElementById("S").click();
              }
          }
          show.innerHTML = "off";
					var finalTranscripts = '';
					speechRecognizer.onresult = function(event){
						var interimTranscripts = '';
						for(var i = event.resultIndex; i < event.results.length; i++){
							var transcript = event.results[i][0].transcript;
							transcript.replace("\n", "<br>");
							if(event.results[i].isFinal){
								finalTranscripts += transcript;
							}else{
								interimTranscripts += transcript;
							}
						}
						
						r.innerHTML = finalTranscripts + '<span style="color:#999">' + interimTranscripts + '</span>';
					  if(finalTranscripts!=""){

					    var url = "?value="+finalTranscripts;
					    document.location.href= url;
					  }
					  
					};
					speechRecognizer.onerror = function (event) {
					};
				}else{
					r.innerHTML = 'Your browser is not supported. If google chrome, please upgrade!';
				}
				
}

</script>
<div style="display:none">
  <div class="button" id = 'S' onclick="start();">Speak</div>
</div>

<script>
      function sleep(delay) {
        var start = new Date().getTime();
        while (new Date().getTime() < start + delay);
      }

      function start(){
          var show = document.getElementById("show");
          show.innerHTML = "start";
          var recognition = new webkitSpeechRecognition();
          recognition.coninuous = true;
          recognition.interimResults = true;
          recognition.lang = "cmn-Hant-TW";
          recognition.status = true;
      
      
          recognition.onend=function(){
	              if(recognition.status===true){
		                if(finalResult.match("安安")!=null){
		 	                  var speech = "聽到了";
        	              var msg = new SpeechSynthesisUtterance();
        	              msg.lang = "zh-TW"
        	              msg.text = speech;
        	              msg.volume = 60;
        	              window.speechSynthesis.speak(msg);
        	              sleep(1000);
			                  convert();
		                }else{
		                    finalResult = '';
		                    recognition.start();
		                }
		          
                }else{
                  recognition.start();
                }
            }

            var finalResult = '';
            recognition.onresult = function(event){
	          var interimResults = '';
	          for (var i = event.resultIndex;i<event.results.length;i++){
		        var transcript = event.results[i][0].transcript;
		            transcript.replace("\n","<br>");
		            if(event.results[i].isFinal){
			              finalResult += transcript;
		            }else{
			              interimResults += transcript;
		            }
	          }

            }


              recognition.start();
            
      }

  
</script>
<script >

var speechjudge = "<?php echo $GLOBALS['speech']  ?>";
if(speechjudge==""){
  document.getElementById("S").click();
}
  

</script>

<?php

chdir('/home/ubuntu/workspace/');
require_once ('vendor/autoload.php');
use ApiAi\Client;

if(isset($_GET['value'])){
  try {
    $client = new Client('b7b343928ad14b38b4cd75bfec713cd6');
    $query = $client->get('query', [
        'query'     => $_GET['value'],
        'sessionId' => time()
    ]);

    $response = json_decode((string) $query->getBody(), true);
} catch (\Exception $error) {
    echo $error->getMessage();
}
}
?>

<?php
$GLOBALS['url'] = '';
  if(isset($response['result']['parameters']['stockname'])){
        $url='http://chatbot-joey820924.c9users.io/stock/detailcode/'.$response['result']['parameters']['stockname']."?Index=".$response['result']['parameters']['Index'];
        $GLOBALS['url'] = $url;

        }
  else if(isset($response['result']['parameters']['judge'])){
    $index = is_array($response['result']['parameters']['Index'])?$response['result']['parameters']['Index'][0]:$response['result']['parameters']['Index'];
    if(isset($response['result']['parameters']['Index1'])){
      $index1 = is_array($response['result']['parameters']['Index1'])?$response['result']['parameters']['Index1'][0]:$response['result']['parameters']['Index1'];
    }
    else{
      $index1 = NULL;
    }
    $name = [];
    $judge = $response['result']['parameters']['judge'];
    $judge1 = isset($response['result']['parameters']['judge1'])?$response['result']['parameters']['judge1']:NULL;
    $judge2 = isset($response['result']['parameters']['judge2'])?$response['result']['parameters']['judge2']:NULL;
    $judge3 = isset($response['result']['parameters']['judge3'])?$response['result']['parameters']['judge3']:NULL;
    
    $statement = "";
    
    
    
    if(empty($index1)){
      #單一判斷
        if($index=="price"){
          #股價判斷
          $judge = $judge=="大於"?"pl":"pt";
          if(false==empty($judge1)){
            $judge1 = $judge1=="大於"?"pl":"pt";
            $statement = $judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1'];
          }
          else{
            $statement = $judge."=".$response['result']['parameters']['number'];
          }
        }else{
          #指標判斷
          $judge = $judge=="大於"?"igt":"ilt";
          if(false==empty($judge1)){
            $judge1 = $judge1=="大於"?"igt":"ilt";
            $statement = "sindex=".$index."&".$judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1'];
          }else{
            $statement = "sindex=".$index."&".$judge."=".$response['result']['parameters']['number'];
          }
        }
    }
    
    
    else{
      #多重判斷
     if(false == empty($judge3)){
      #total 4
      if($index=="price"){
        $judge = $judge=="大於"?"pl":"pt";
        $judge1 = $judge1=="大於"?"pl":"pt";
        $judge2 = $judge2=="大於"?"igt":"ilt";
        $judge3 = $judge3=="大於"?"igt":"ilt";
        $statement = $judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1']."&sindex=".$index1."&".$judge2."=".$response['result']['parameters']['number2']."&".$judge3."=".$response['result']['parameters']['number3'];
        
      }
      else{
        $judge = $judge=="大於"?"igt":"ilt";
        $judge1 = $judge1=="大於"?"igt":"ilt";
        $judge2 = $judge2=="大於"?"pl":"pt";
        $judge3 = $judge3=="大於"?"pl":"pt";
        $statement = "sindex=".$index."&".$judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1']."&".$judge2."=".$response['result']['parameters']['number2']."&".$judge3."=".$response['result']['parameters']['number3'];
      }
    }
    else if(false == empty($judge2)){
      #total 3
      $str = $response['result']['resolvedQuery'];
      $index_position = strpos($str,$index);
      $index1_position = strpos($str,$index1);
      $judge_position = strpos($str,$judge);
      $judge1_position = strpos($str,$judge1,$judge_position+2);
      $judge2_position = strpos($str,$judge2,$judge1_position+2);
      if($judge1_position>$index1_position){
        #前1後2
        if($index=="price"){
          $judge = $judge=="大於"?"pl":"pt";
          $judge1 = $judge1=="大於"?"igt":"ilt";
          $judge2 = $judge2=="大於"?"igt":"ilt";
          $statement = $judge."=".$response['result']['parameters']['number']."&sindex=".$index1."&".$judge1."=".$response['result']['parameters']['number1']."&".$judge2."=".$response['result']['parameters']['number2'];
        }else{
          $judge = $judge=="大於"?"igt":"ilt";
          $judge1 = $judge1=="大於"?"pl":"pt";
          $judge2 = $judge2=="大於"?"pl":"pt";
          $statement = "sindex=".$index."&".$judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1']."&".$judge2."=".$response['result']['parameters']['number2'];
      }
      }
      else if($judge1_position<$index_position){
        #前2後1
        if($index=="price"){
          $judge = $judge=="大於"?"pl":"pt";
          $judge1 = $judge1=="大於"?"pl":"pt";
          $judge2 = $judge2=="大於"?"igt":"ilt";
          $statement = $judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1']."&sindex=".$index1."&".$judge2."=".$response['result']['parameters']['number2'];
        }else{
          $judge = $judge=="大於"?"igt":"ilt";
          $judge1 = $judge1=="大於"?"igt":"ilt";
          $judge2 = $judge2=="大於"?"pl":"pt";
          $statement = "sindex=".$index."&".$judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1']."&".$judge2."=".$response['result']['parameters']['number2'];
        }
        
      }
      else if($judge2_position<$index1_position and $judge_position>$index_position){
        #比距離
        if($judge2_position-$judge1_position>$judge1_position-$judge_position){
          #前2後1
          if($index=="price"){
          $judge = $judge=="大於"?"pl":"pt";
          $judge1 = $judge1=="大於"?"pl":"pt";
          $judge2 = $judge2=="大於"?"igt":"ilt";
          $statement = $judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1']."&sindex=".$index1."&".$judge2."=".$response['result']['parameters']['number2'];
        }else{
          $judge = $judge=="大於"?"igt":"ilt";
          $judge1 = $judge1=="大於"?"igt":"ilt";
          $judge2 = $judge2=="大於"?"pl":"pt";
          $statement = "sindex=".$index."&".$judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1']."&".$judge2."=".$response['result']['parameters']['number2'];
        }
        }
        else{
          #前1後2
          if($index=="price"){
          $judge = $judge=="大於"?"pl":"pt";
          $judge1 = $judge1=="大於"?"igt":"ilt";
          $judge2 = $judge2=="大於"?"igt":"ilt";
          $statement = $judge."=".$response['result']['parameters']['number']."&sindex=".$index1."&".$judge1."=".$response['result']['parameters']['number1']."&".$judge2."=".$response['result']['parameters']['number2'];
        }else{
          $judge = $judge=="大於"?"igt":"ilt";
          $judge1 = $judge1=="大於"?"pl":"pt";
          $judge2 = $judge2=="大於"?"pl":"pt";
          $statement = "sindex=".$index."&".$judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1']."&".$judge2."=".$response['result']['parameters']['number2'];
        }
        }
      }
      else if($judge2_position<$index1_position){
        #前1後2
        if($index=="price"){
          $judge = $judge=="大於"?"pl":"pt";
          $judge1 = $judge1=="大於"?"igt":"ilt";
          $judge2 = $judge2=="大於"?"igt":"ilt";
          $statement = $judge."=".$response['result']['parameters']['number']."&sindex=".$index1."&".$judge1."=".$response['result']['parameters']['number1']."&".$judge2."=".$response['result']['parameters']['number2'];
        }else{
          $judge = $judge=="大於"?"igt":"ilt";
          $judge1 = $judge1=="大於"?"pl":"pt";
          $judge2 = $judge2=="大於"?"pl":"pt";
          $statement = "sindex=".$index."&".$judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1']."&".$judge2."=".$response['result']['parameters']['number2'];
        }
      }
      else{
        #前2後1
        if($index=="price"){
          $judge = $judge=="大於"?"pl":"pt";
          $judge1 = $judge1=="大於"?"pl":"pt";
          $judge2 = $judge2=="大於"?"igt":"ilt";
          $statement = $judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1']."&sindex=".$index1."&".$judge2."=".$response['result']['parameters']['number2'];
        }else{
          $judge = $judge=="大於"?"igt":"ilt";
          $judge1 = $judge1=="大於"?"igt":"ilt";
          $judge2 = $judge2=="大於"?"pl":"pt";
          $statement = "sindex=".$index."&".$judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1']."&".$judge2."=".$response['result']['parameters']['number2'];
        }
      }
    }
    else if(false == empty($judge1)){
      #total 2
      if($judge==$judge1){
        if($index=="price"){
          $judge = $judge=="大於"?"pl":"pt";
          $judge1 = $judge=="大於"?"igt":"ilt";
          $statement = $judge."=".$response['result']['parameters']['number']."&sindex=".$index1."&".$judge1."=".$response['result']['parameters']['number1'];
        }
        else{
          $judge = $judge=="大於"?"igt":"ilt";
          $judge1 = $judge=="大於"?"pl":"pt";
          $statement = "&sindex=".$index."&".$judge."=".$response['result']['parameters']['number'].$judge1."=".$response['result']['parameters']['number1'];
        }
      }else{
        if($index=="price"){
          $judge = $judge=="大於"?"pl":"pt";
          $judge1 = $judge=="大於"?"pl":"pt";
          $statement = $judge."=".$response['result']['parameters']['number']."&".$judge1."=".$response['result']['parameters']['number1'];
        }else{
          $judge = $judge=="大於"?"igt":"ilt";
          $judge1 = $judge=="大於"?"igt":"ilt";
          $statement = "&sindex=".$index."&".$judge."=".$response['result']['parameters']['number'].$judge1."=".$response['result']['parameters']['number1'];
        }
      }
    }
    else if(false == empty($judge)){
      #total 1
      if($index=="price"){
        $judge = $judge=="大於"?"pl":"pt";
        $statement = $judge."=".$response['result']['parameters']['number'];
      }
      else{
        $statement = "sindex=".$index."&".$judge."=".$response['result']['parameters']['number'];
      }
    }
    }
    $url='http://chatbot-joey820924.c9users.io/stocks?'.$statement;
    $GLOBALS['url'] = $url;
  }
  else if(isset($response['result']['parameters']['Jump'])){
      $url = "http://chatbot-joey820924.c9users.io/";
      $jump = ["訂閱"=>"mysubscribe","首頁"=>"home","股票大廳"=>"stocks","投資組合"=>"mystocks","關注清單"=>"myfollows"];
      $url = $url.$jump[$response['result']['parameters']['Jump']];
      $GLOBALS['url'] = $url;
  }
  else if(isset($response['result']['parameters']['allstock'])){
      
      $url = "http://chatbot-joey820924.c9users.io/home?allstock=".$response['result']['parameters']['allstock'];
      $GLOBALS['url'] = $url;
  }
  else if(isset($response['result']['parameters']['Finish'])){
      $url = "http://chatbot-joey820924.c9users.io/home?finish=leave";
      $GLOBALS['url'] = $url;
  }
  else if(isset($response)){
        $url = "http://chatbot-joey820924.c9users.io/home";
        $GLOBALS['url'] = $url;
        }
?>
<?php
  if(isset($response['result']['fulfillment']['speech'])){
    $speech = $response['result']['fulfillment']['speech'];
  }else{
    $speech = '';
  }
?>
<form name = 'sendForm' action='<?php echo $GLOBALS['url'] ?>' method='POST'>
<input type='hidden' name='speech' value='<?php echo $speech ?>'>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
<script type="text/javascript"> 

var sjudge = "<?php echo $speech ?>";
if(sjudge!=""){
  sendForm.submit();
}
</script> 





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
                    <h5 class="description-header">+8.1%</h5>
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
                                    <tr>
                    <td><a href="pages/examples/invoice.html">OR0072</a></td>
                    <td>{{$mystocks[5]->name}}</td>
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
                                <li class="item">
                  <div class="product-img">
                    <img src="{{url('adminlte/dist/img/stock.png')}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                     <a href="javascript:void(0)" class="product-title" style="font-size: 17px;">{{$mystocks[5]->code}} {{$mystocks[5]->name}}
                      <span class="label label-warning pull-right">${{$mystocks[5]->price}}</span></a>
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
    { period: '2016-06-18', park1: 226350  }
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
