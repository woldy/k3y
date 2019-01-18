<?php

namespace App\Console;
use Illuminate\Console\Command;
use Cache;
use DB;
use  App\Engine\Engine;

class Test extends Command
{
    protected $signature = 'test';
    protected $description = 'test';


    public function __construct(){
        parent::__construct();
    }

    public function handle(){
      //$this->trans_sentence();
      $this->build_cache();
    }


    public function build_cache(){
      		$sentences=DB::table('sentence')->get()->toArray();
          $words=DB::table('word')->get()->toArray();
          $wlist=[];
          foreach ($words as $word) {
            $word['sentences']=[];
            foreach($sentences as $sentence){
              if(strpos($sentence['sentence'],' '.$word['word'].' ')>0){
                $sentence['sentence']=str_ireplace(' '.$word['word'].' ',' <a style="color:#e74c3c;font-weight:700">'.$word['word'].'</a> ',$sentence['sentence']);
                $word['sentences'][]=$sentence;
              }
            }

            $wlist[$word['level']][$word['word']]=$word;
          }

          Cache::forever('wlist',$wlist);
          var_dump($wlist);

    }

	public function trans_sentence(){
		$sentences=DB::table('sentence')->where('translate','=','0')->get();

		foreach($sentences as $sentence){

			$s=[
				'translate'=>$this->fanyi($sentence['sentence']),
			];

			DB::table('sentence')->where('id',$sentence['id'])->update($s);
			echo '.';
		}
	}

	public function trans_word(){
		$words=DB::table('word')->where('mean','=','0')->get();
		foreach($words as $word){
			$t=json_decode(file_get_contents('http://fy.iciba.com/ajax.php?a=fy&w='.$word->word),true);

			if(!isset($t['content']['word_mean']) && isset($t['content']['out']) ){
				$t['content']['word_mean']=[$t['content']['out']];
				$t['content']['ph_tts_mp3']='';
			}

			if(!isset($t['content']['word_mean']) || !isset($t['content']['ph_tts_mp3']) ){
				var_dump($t);
				continue;
			}
			$w=[
				'mean'=>implode(' | ',$t['content']['word_mean']),
				'mp3'=>$t['content']['ph_tts_mp3']
			];

			DB::table('word')->where('word',$word->word)->update($w);
			echo '.';
		}
	}


	public function fanyi($w){

		$url="http://api.fanyi.baidu.com/api/trans/vip/translate";
		$q=urlencode($w);
		$from="en";
		$to="zh";
		$appid="20181101000228860";
		$salt= rand(10000,99999);
		$mishi="d9XFIhSR9illLbfbNoet";
		$sign= md5($appid.$w.$salt.$mishi);

		$url="http://api.fanyi.baidu.com/api/trans/vip/translate?q=".$q."&from=".$from."&to=".$to."&appid=".$appid."&salt=".$salt."&sign=".$sign;
		$result= json_decode(file_get_contents($url),true);


		return $result['trans_result'][0]['dst'];

	}
}
