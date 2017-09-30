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
         <li style="background-color: #eee"><a href={{url('myfollows')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的關注清單</span></a></li>
         <li><a href={{url('mysubscribe')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的訂閱</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper" style="display:block;min-height: 800px;">

    <section class="content-header">
      <h1 style="font-family: '微軟正黑體';padding-top: 5px;">
      股票管理 <span class="label label-info">我的關注清單</span>
      </h1>
    </section>




    <section class="content" style="border-top: 1px solid #fff;margin-top: 15px;background-color: #eee;min-height: 600px;">

  <div class="col-md-12">

  @foreach ($mystocks as $stock ) 
      <div class="col-xs-2" style="border: 1px solid #00a65a;background-color: #fff;margin: 10px;padding:10px;padding-top: 0px;border-radius: 10px;">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title" style="padding-left: 5px;">{{$stock->code}}/{{$stock->name}}</h3>
        <hr style="margin: 15px;">
        <div class=" col-xs-6">
          <h5>即時股價</h5>
          <h3>{{$stock->price}}</h3>
        </div>
         <div class="col-xs-6">
          <h5>近期漲幅</h5>
          <?php if ( mb_substr_count($stock->updown, "▽") ) {
                  # code...
                  echo "<h3 style='color:green'>".$stock->updown."</h3>";
                  }
                  else{
                  echo "<h3 style='color:Red'>".$stock->updown."</h3>";
                  }
          ?>
          </div>
         <hr>
        <a href="stock/detail/{{$stock->id}}" class="col-xs-12 btn btn-primary">查看詳細資訊</a>
      </div>
    </div>
  </div>
  
  @endforeach


</div>


</section>


  </div>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
</div>
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
      
      $url = "http://chatbot-joey820924.c9users.io/myfollows?allstock=".$response['result']['parameters']['allstock'];
      $GLOBALS['url'] = $url;
  }
  else if(isset($response['result']['parameters']['Finish'])){
      $url = "http://chatbot-joey820924.c9users.io/myfollows?finish=leave";
      $GLOBALS['url'] = $url;
  }
  else if(isset($response)){
        $url = "http://chatbot-joey820924.c9users.io/myfollows";
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
@endsection
@section("footer")

@endsection