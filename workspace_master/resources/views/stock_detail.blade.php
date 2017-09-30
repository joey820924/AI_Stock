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
<?php
$oriURL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$FindKey='value';
if(strpos($oriURL,$FindKey)==True){
  $position = strpos($oriURL,$FindKey);
  $GLOBALS['URL'] = substr_replace($oriURL,'',$position);
}
else{
	$GLOBALS['URL'] = $oriURL;
}

?>
<?php
        if(isset($_POST['speech'])){
            $GLOBALS['speech'] = $_POST['speech'];
        }
        else{
          $GLOBALS['speech'] = "";
        }
        
        
          if(isset($_GET['allstock'])){          
            $GLOBALS['allstock'] = "是".$allstock->point."  而近期漲幅則是".$allstock->direction."了".$allstock->rate;
            $GLOBALS['allstockname'] = $allstock->name;
          }
          else{
            $GLOBALS['allstock'] = '';
            $GLOBALS['allstockname'] = '';
          }
          
          if(isset($_GET['Index'])){
            $GLOBALS['Index'] = $_GET['Index'];
          }
          else{
            $GLOBALS['Index'] = "";
          }
        
?>
<div id = "result"></div>
<div id = "show"></div>
<div style="display:none">
  <div class="button" id = 'press' onclick="speak();">Speak</div>
</div>
    <script>
      var speech = "<?php echo $GLOBALS['speech']; ?>";
      function speak () {
        var stockname = "<?php echo (string)$stock->name ?>";
        var index = "<?php echo $GLOBALS['Index']; ?>";
        var allstock = "<?php echo $GLOBALS['allstock']; ?>";
        var allstockname = "<?php echo $GLOBALS['allstockname']  ?>";
        var indexArray = { "code":"股票代號","gm": "營業毛利率", "pp": "營業利益率", "pm":"稅前淨利率","roa":"資產報酬率","roe":"股東權益報酬率","price":"股價","capital":"市值","gm":"毛利率","industry":"產業別","cash_div":"現金股利"};
        if(index==""){
          speech = allstockname+allstock;
        }
        else if(index=='normal'){
            speech = "";
        }else if(index=="bad"){
          speech="<?php echo $GLOBALS['speech']; ?>";
        }
        else{
            var indexname = indexArray[index];
            var speech = stockname+"的"+indexname+"是"+"<?php echo (string)$stock->$GLOBALS['Index']; ?>";
        }
        
        
        
        
        var show = document.getElementById("show");
        var msg = new SpeechSynthesisUtterance();
        msg.lang = "zh-TW"
        msg.text = speech;
        msg.volume = 60;
        
        window.speechSynthesis.speak(msg);
        
        function _wait() {
          
          if ( ! window.speechSynthesis.speaking && speech!="") {
            convert();
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
					show.innerHTML = "convert";
          
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
					     var url = "<?php echo 'http://chatbot-joey820924.c9users.io/stock/detailcode/'.(string)$stock->code;?>";
					     url = url+"?value="+finalTranscripts;
					    
					    document.location.href = url;
					    
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
      
      $url = "?allstock=".$response['result']['parameters']['allstock'];
      $GLOBALS['url'] = $url;
  }
  else if(isset($response)){
        $url = "http://chatbot-joey820924.c9users.io/stock/detailcode/".$stock->code."?Index=bad";
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