<?php

namespace App\Http\Controllers;
use DB;
use Cache;
use Illuminate\Http\Request;
class WritingController extends Controller
{
  function index(){
      $text='';
      return view('writing',['text'=>$text]);
  }
 

}
