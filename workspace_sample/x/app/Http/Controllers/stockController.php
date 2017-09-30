<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\ystock;
use App\userstock;
use App\userfollow;
use Auth;

class stockController extends Controller
{
    //
	    public function index(Request $request)
    {
        $stocks = ystock::orderby("id")->get();

        $fiterMessage = "";

        if( $request["gt"] !="" ){

            $gt =   $request["gt"];
            $fiterMessage.="股票大於".$request["gt"] ;

           
        }

        if( $request["lt"] !="" ){

            $lt = $request["lt"]; 
            $fiterMessage.=",股票小於".$request["lt"] ;

        }

        if( $request["sindex"] !="" ){

            $sindex = $request["sindex"]; 
            $fiterMessage.=",參考指標".$request["sindex"];

        }

        if( $request["igt"] !="" ){

            $igt = $request["igt"]; 

            $fiterMessage.=",指標大於".$request["igt"]."%";


             $stocks =  ystock::where("price",">",$gt)->where("price","<",$lt)->where($sindex,">",$igt)->get(); 


        }


        if($fiterMessage==""){
            $fiterMessage="所有股票";
        }
        
         



        return view('stocks',compact("stocks","fiterMessage"));
    }



    public function dashboard()
    {

        $uid = Auth::user()->id;

        $user = Auth::user();


        $mystocks = array();
        $invest = 0;
        $userstocks = userstock::where("userid","=",$uid)->get();
        foreach ($userstocks as $userstock ) {
            # code...
            $sid = $userstock->stockid;
            $stock = ystock::where("id","=",$sid)->first();
            array_push($mystocks, $stock);
            $invest+= ($stock->price*1000);




        }



        $winRate = round($invest/(500000-$user->balance)*100,2);
        $nw = $invest+$user->balance;


        if(Count($mystocks)>5){
             return view('home2',compact("mystocks","invest","user","winRate","nw"));
        }
        else{
            return view('home',compact("mystocks","invest","user","winRate","nw"));
        }



       
    }



     public function ddp()
    {
        $stocks = ystock::orderby("id")->get();
        foreach ($stocks as $stock) {
        	# code...
        	if(ystock::where("code","=",$stock->code)->count()>1)
        	{

        		$thestock = ystock::where("code","=",$stock->code)->orderby("id","desc")->first();
        		$theid = $thestock->id;
        		$dstock = ystock::find($theid);
						$dstock->delete();

        	}


        }
    }

    public function buy($id)
    {
        $stock = ystock::where("id","=",$id)->first();
        $user = Auth::user();
        $uid = Auth::user()->id;
        $price = $stock->price;
        $balance = $user->balance;


        $message = "股票".$stock->name."購買成功";


        if($balance > 1000*$price){
            echo "stockid".$stock->id."<br>";
            echo "uid".$uid."<br>";


            $user->balance = $user->balance - (1000*$price);
            $user->save();

            $userstock = new userstock();
            $userstock->userid = $uid;
            $userstock->stockid = $stock->id;
            $userstock->code = $stock->code;
            $userstock->sname = $stock->name;
            $userstock->uname = Auth::user()->name;
            $userstock->save();
        }
        else{


            echo "餘額不足";
            $message = "股票購買失敗，餘額不足";

        }

        return Redirect::back()->withErrors([$message]);

    }



    public function mystocks()
    {
        $uid = Auth::user()->id;
        $user = Auth::user();
        $mystocks = array();
        $invest = 0;
        $userstocks = userstock::where("userid","=",$uid)->get();
        foreach ($userstocks as $userstock ) {
            # code...
            $sid = $userstock->stockid;
            $stock = ystock::where("id","=",$sid)->first();
            if($stock->name=="黑松")
            {

            }
            else{
                array_push($mystocks, $stock);
                
            }

            $invest+= ($stock->price*1000);





        }

        $winRate = round($invest/(500000-$user->balance)*100,2);
        $nw = $invest+$user->balance;




        return view('mystock',compact("mystocks","invest","user","winRate","nw"));

    }



    public function trim(){

        $stocks = ystock::orderby("id")->get();
        foreach ($stocks as $stock ) {
            # code...
            $stock->updown = strip_tags($stock->updown);
            $stock->updown = trim($stock->updown);
            $stock->save();
        }




    }


    public function myfollows()
    {
        $uid = Auth::user()->id;
        $user = Auth::user();
        $mystocks = array();
        $invest = 0;
        $userstocks = userfollow::where("userid","=",$uid)->get();
        foreach ($userstocks as $userstock ) {
            # code...
            $sid = $userstock->stockid;
            $stock = ystock::where("id","=",$sid)->first();
            if($stock->name=="黑松")
            {

            }
            else{
                array_push($mystocks, $stock);
                
            }

            $invest+= ($stock->price*1000);

        }

        $winRate = round($invest/(500000-$user->balance)*100,2);
        $nw = $invest+$user->balance;




        return view('myfollow',compact("mystocks","invest","user","winRate","nw"));

    }


    public function mysubscribe()
    {

        return view('mysubscribe');

    }



    public function user2()
    {

        return view('user2');

    }




        public function follow($id)
    {
        $stock = ystock::where("id","=",$id)->first();
        $user = Auth::user();
        $uid = Auth::user()->id;


        $message = "股票".$stock->name."關注成功";




            $userfollow = new userfollow();
            $userfollow->userid = $uid;
            $userfollow->stockid = $stock->id;
            $userfollow->code = $stock->code;
            $userfollow->sname = $stock->name;
            $userfollow->uname = Auth::user()->name;
            $userfollow->save();
       

        return Redirect::back()->withErrors([ $message]);

    }




    public function stock_detail($id)
    {
        $stock = ystock::where("id","=",$id)->first();


        return view('stock_detail',compact("stock"));
    }






}
