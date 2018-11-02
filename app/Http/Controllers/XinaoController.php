<?php

namespace App\Http\Controllers;
use DB;
use Cache;
use Illuminate\Http\Request;
class XinaoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index(Request $request){
      $level=$request->get('level',0);

      return view('xinao',['level',$level]);
    }

    public function get(Request $request){
      $level=$request->get('level',0);
      $wlist=Cache::get('wlist');

      $word=$wlist[$level][array_rand($wlist[$level],1)];
      shuffle($word['sentences']);
      $word['mean']=str_replace('|',"<br />",$word['mean']);
      $word['sentences']=array_slice($word['sentences'],0,3);
      return response()->json($word);
    }




    //
}
