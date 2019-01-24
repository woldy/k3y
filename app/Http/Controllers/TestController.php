<?php

namespace App\Http\Controllers;
use DB;
use Cache;
use Illuminate\Http\Request;
class TestController extends Controller
{
  function redis_write(){
    Cache::put('test','test',10);
    $res=['errcode'=>0,'errmsg'=>'ok'];
    return response()->json($res);
  }

  function redis_read(){
    $test=Cache::get('test');
    $res=['errcode'=>0,'errmsg'=>'ok'];
    return response()->json($res);
  }

  function mysql_write(){
    DB::table('word')->where('id',1)->update([
      'count'=>'19'
    ]);

    $res=['errcode'=>0,'errmsg'=>'ok'];
    return response()->json($res);
  }

  function mysql_read(){
    $word=DB::table('word')->where('id',1)->first();
    $res=['errcode'=>123,'errmsg'=>$word];
    return response()->json($res);
  }

}
