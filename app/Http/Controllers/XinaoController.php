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

     public $title;

     public $sum;

    public function __construct()
    {
        $this->title=[
          '0'=>'必知必会',
          '1'=>'应知应会',
          '2'=>'需知需会',
          '3'=>'半知半会'
        ];

        $this->sum=[
          '0'=>329,
          '1'=>651,
          '2'=>2285,
          '3'=>2981
        ];
    }
    public function index(Request $request){
      $level=$request->get('level',0);
      $name=$request->get('name','guest');
      return view('xinao',['level'=>$level,'name'=>$name]);
    }

    public function get(Request $request){
      $level=$request->get('level',0);
      $name=$request->get('name','guest');


      $review=DB::table('pass')->where('level',$level)->where('name',$name)->where('next','<',time())->get()->toArray();
      if(count($review)>0){
        $wlist=[[],[],[],[]];
        $idx=Cache::get('wlist');
        foreach ($review as $word) {
          if(isset($idx[$word['level']][$word['word']])){
            array_unshift($wlist[$word['level']],$idx[$word['level']][$word['word']]);
          }
        }
      }else{
        $wlist=Cache::get('wlist_'.$name);
        if(empty($wlist)){
          $wlist=Cache::get('wlist');
          Cache::forever('wlist_'.$name,$wlist);
        }
      }


      if(empty($wlist[$level])){
        $res=[
          'errcode'=>1,
          'name'=>$name
        ];
        return response()->json($res);
      }

      $word=$wlist[$level][array_rand($wlist[$level],1)];
      shuffle($word['sentences']);
      $word['mean']=str_replace('|',"<br />",$word['mean']);
      $word['sentences']=array_slice($word['sentences'],0,3);
      $res=[
        'errcode'=>0,
        'word'=>$word,
        'level'=>$level,
        'title'=>$this->title,
        'sum'=>$this->sum,
        'count'=>$this->count($name)
      ];
      return response()->json($res);
    }

    public function get_count(Request $request){
        $name=$request->get('name','guest');
        $count=$this->count($name);

        $wlist=Cache::get('wlist_'.$name);
        if(empty($wlist)){
          $res=[
            'errcode'=>0,
            'title'=>$this->title,
            'sum'=>$this->sum,
            'count'=>$this->sum,
          ];
        }else{
          $res=[
            'errcode'=>0,
            'title'=>$this->title,
            'sum'=>$this->sum,
            'count'=>$this->count($name)
          ];
        }
        return response()->json($res);
    }

    public function count($name){
      $wlist=Cache::get('wlist_'.$name);
      if(empty($wlist)){
        return [0,0,0,0];
      };
      for($i=0;$i<4;$i++){
        if(count($wlist[$i])==0){
          $wlist[$i]=DB::table('pass')->where('name',$name)->where('level',$i)->where('next','<',time())->get()->toArray();
        }
      }

      $count=[
        '0'=>count($wlist[0]),
        '1'=>count($wlist[1]),
        '2'=>count($wlist[2]),
        '3'=>count($wlist[3]),
      ];
      return $count;

    }

    public function pass(Request $request){
      $level=$request->get('level',0);
      $name=$request->get('name','guest');
      $word=$request->get('word','woldy');
      $curve=[
        '+5 minute',
        '+25 minute',
        '+12 hours',
        '+12 hours',
        '+1 days',
        '+2 days',
        '+3 days',
        '+8 days',
        '+10 days',
        '+15 days',
        '+20 days',
        '+30 days',
        '+60 days',
      ];


      $pass=DB::table('pass')->where('name',$name)->where('word',$word)->first();


      $wlist=Cache::get('wlist_'.$name);
      unset($wlist[$level][$word]);

      Cache::forever('wlist_'.$name,$wlist);

      if(empty($pass)){
        DB::table('pass')->insert([
          'name'=>$name,
          'word'=>$word,
          'level'=>$level,
          'step'=>0,
          'next'=>strtotime("+5 minute", time())
        ]);

      }else{
        //var_dump($pass);
        $step=$pass['step']+1;
        $ctime=strtotime($curve[$step], time());
        DB::table('pass')->where('name',$name)->where('word',$word)->update([
          'step'=>$step,
          'next'=>$ctime
        ]);
      }
           return response()->json(['errcode'=>'ok']);
     }

    //
}
