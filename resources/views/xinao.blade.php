<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>K3Y@Woldy</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link rel="stylesheet" href="https://cdn.bootcss.com/amazeui/2.7.2/css/amazeui.min.css">

  <style>
	.word{
		color:#e74c3c;
    font-size: 32px;
	}
  .mean{
    font-size: 14px;
  }

  .ss0,.ss1,.ss2,.st0,.st1,.st2{
    font-size: 14px;
  }

  .am-panel{
    margin-bottom:10px;
  }
  .am-panel-bd{
    padding: 10px;
  }

  .back{
    float: right;
    font-size: 16px;
    font-family: microsoft yahei;
  }


  </style>
</head>
<body>

<!--在这里编写你的代码-->



<div class="am-panel am-panel-primary">
  <div class="am-panel-hd"><span class="am-icon-home back">Back</span><span class='title'>洗脑模式</span></div>
  <div class="am-panel-bd">
    <div class="word">
	  </div>
	<div class='mean'>

	</div>

  </div>
</div>
<audio  id="audio" controls="controls" style='width:100%' ><source src='https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text=b,e,l,i,e,v,e,' type="audio/mpeg"></audio>


<div class="am-panel am-panel-default sc0">
  <div class="am-panel-hd sy0"></div>
  <div class="am-panel-bd">
    <div class='ss0'>

	</div>
	<div class='st0'>

	</div>
  </div>
</div>


<div class="am-panel am-panel-default sc1">
  <div class="am-panel-hd sy1"></div>
  <div class="am-panel-bd">
    <div class='ss1'>

	</div>
	<div class='st1'>

	</div>
  </div>
</div>

<div class="am-panel am-panel-default sc2">
  <div class="am-panel-hd sy2"></div>
  <div class="am-panel-bd">
    <div class='ss2'>

	</div>
	<div class='st2'>

	</div>
  </div>
</div>

<button type="button" id='btn-pass' word='woldy'  class="am-btn am-btn-primary am-btn-block">我感觉我记住了</button>
<button type="button" onclick="next()" class="am-btn am-btn-default am-btn-block">下一词</button>
<br />

   <footer data-am-widget="footer"
          class="am-footer am-footer-default"
           data-am-footer="{  }">

    <div class="am-footer-miscs ">

        <p>CopyRight©2018  king@woldy.net</p>
    </div>
  </footer>



<script src="https://cdn.bootcss.com/jquery/1.12.2/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>


<script>

get();
var list=[];
var audio = document.getElementById('audio');
audio.onended = function() {
  //console.log(list);
  if(list.length==0){
<<<<<<< HEAD
    setTimeout('get();',500);
=======
    setTimeout('get();',3000);
>>>>>>> ed5f132a54a934f3ac5551d9a7b39872307d0c82
  }else{
    setTimeout('play(list.shift());',1000);

  }
}

$(".back").click(function(){
  window.location.href='/?name=<?php echo $name;?>';
})

$("#btn-pass").click(function(){
  $.get("/xinao/pass?level="+"<?php echo $level;?>&name="+"<?php echo $name;?>&word="+$(this).attr('word'),function(data,status){
    next();
  });
});


function next(){
    list=[];
    audio.pause();
    get();
}

function get(){

	
  $.get("/xinao/get?level="+"<?php echo $level;?>&name="+"<?php echo $name;?>",function(data,status){
    if(data.errcode==1){
      window.location.href='/?name=<?php echo $name;?>';
    }
    $('.word').html(data.word.word);
	$(".mean").css("color","white");
	$(".mean").html(data.word.mean);
    setTimeout('$(".mean").css("color","#333");',2000);
    $('#btn-pass').attr('word',data.word.word);
    	if(data.review=='true'){
    		$('.title').html("洗脑模式-"+data.title[<?php echo $level;?>]+'-'+'<?php echo $name;?>'+'-'+data.count[<?php echo $level;?>]+'/'+data.count[<?php echo $level;?>]+'-复习');
	}else{
    		$('.title').html("洗脑模式-"+data.title[<?php echo $level;?>]+'-'+'<?php echo $name;?>'+'-'+data.count[<?php echo $level;?>]+'/'+data.sum[<?php echo $level;?>]);

<<<<<<< HEAD
  //  list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.word.split('').join()+',');
  //  list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.word.split('').join()+',');
//    list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=3&text="+data.word.word);
  //  list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.mean.replace(/<[^>]+>/g,""));
    //list.push("http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.word.split('').join()+',');
    list.push("https://fanyi.sogou.com/reventondc/synthesis?speed=1&lang=en&from=translateweb&text="+data.word.word);
    list.push("https://fanyi.sogou.com/reventondc/synthesis?speed=1&lang=en&from=translateweb&text="+data.word.word);
    list.push("https://fanyi.sogou.com/reventondc/synthesis?speed=1&lang=en&from=translateweb&text="+data.word.word);
  //  list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.word.split('').join()+'"+data.word.word);
   // list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.word.split('').join()+',');
   // list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.word);
=======
	}
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word.word);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&spokenDialect=zh-CHS&text="+data.word.word.split('').join()+',');
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word.word);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&spokenDialect=zh-CHS&text="+data.word.mean.replace(/<[^>]+>/g,"").replace(/\([^\)]*\)/g,""));
    //list.push("http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.word.split('').join()+',');
    //list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word.word);
    //list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&spokenDialect=zh-CHS&text="+data.word.word.split('').join()+',');
    //list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word.word);
    //list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&spokenDialect=zh-CHS&text="+data.word.word.split('').join()+',');
    //list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word.word);
>>>>>>> ed5f132a54a934f3ac5551d9a7b39872307d0c82

    for(i=0;i<3;i++){
      if(typeof(data.word.sentences[i])!='undefined'){
          $('.ss'+i).html(data.word.sentences[i].sentence);
          $('.st'+i).html(data.word.sentences[i].translate);
          $('.sy'+i).html(data.word.sentences[i].year);

         list.push("https://fanyi.sogou.com/reventondc/synthesis?speed=1&lang=en&from=translateweb&text="+data.word.sentences[i].sentence.replace(/<[^>]+>/g,""));
          //list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=3&text="+data.word.sentences[i].translate);
          //list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=3&text="+data.word.sentences[i].sentence.replace(/<[^>]+>/g,""));

          $('.sc'+i).show();
      }else{
        $('.sc'+i).hide();
      }
    }


    //list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.word.split('').join()+',');
   // list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=3&text="+data.word.word);
   // list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.mean.replace(/<[^>]+>/g,""));
   // list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=3&text="+data.word.word);
   // list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.word.split('').join()+',');
   // list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=3&text="+data.word.word);
   // list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.word.split('').join()+',');
   // list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=3&text="+data.word.word);


	play(list.shift());

  });
}

function play(src){
  //$('audio').remove();
  //$("#audio source").attr("src",src);
  audio.src=src;
  var playPromise;
  playPromise = audio.play();
  if (playPromise) {
      playPromise.then(() => {
          setTimeout(() => {
              //console.log("done.");
          }, audio.duration * 2000); // audio.duration 为音频的时长单位为秒
      }).catch((e) => {
      });
  }
}

</script>
</body>
</html>
