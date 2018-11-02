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

  <link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.min.css">

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
  </style>
</head>
<body>

<!--在这里编写你的代码-->



<div class="am-panel am-panel-default">
  <div class="am-panel-hd">洗脑模式</div>
  <div class="am-panel-bd">
    <div class="word">
	  </div>
	<div class='mean'>

	</div>

  </div>
</div>

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

<button type="button" onclick="window.location.reload()" class="am-btn am-btn-default am-btn-block">下一词</button>
<br />
<audio  id="audio" controls="controls" style='width:100%' ><source src='http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text=b,e,l,i,e,v,e,' type="audio/mpeg"></audio>

   <footer data-am-widget="footer"
          class="am-footer am-footer-default"
           data-am-footer="{  }">

    <div class="am-footer-miscs ">

        <p>CopyRight©2018  king@woldy.net</p>
    </div>
  </footer>



<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.min.js"></script>












<script>

get();
var list=[];
var audio = document.getElementById('audio');
audio.onended = function() {
  //console.log(list);
  if(list.length==0){
    get();
  }else{
    setTimeout('play(list.shift());',10);

  }
}


function get(){
  $.get("/xinao/get",function(data,status){
    $('.word').html(data.word);
    $('.mean').html(data.mean);

    for(i=0;i<3;i++){
      if(typeof(data.sentences[i])!='undefined'){
          $('.ss'+i).html(data.sentences[i].sentence);
          $('.st'+i).html(data.sentences[i].translate);
          $('.sy'+i).html(data.sentences[i].year);
          $('.sc'+i).show();
      }else{
        $('.sc'+i).hide();
      }
    }


    
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&spokenDialect=zh-CHS&text="+data.word.split('').join()+',');
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&spokenDialect=zh-CHS&text="+data.mean.replace(/<[^>]+>/g,""));
    //list.push("http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text="+data.word.split('').join()+',');
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&spokenDialect=zh-CHS&text="+data.word.split('').join()+',');
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&spokenDialect=zh-CHS&text="+data.word.split('').join()+',');
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.sentences[0].sentence.replace(/<[^>]+>/g,""));
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&spokenDialect=zh-CHS&text="+data.sentences[0].translate);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.sentences[0].sentence.replace(/<[^>]+>/g,""));
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.sentences[1].sentence.replace(/<[^>]+>/g,""));
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&spokenDialect=zh-CHS&text="+data.sentences[1].translate);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.sentences[1].sentence.replace(/<[^>]+>/g,""));
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.sentences[2].sentence.replace(/<[^>]+>/g,""));
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&spokenDialect=zh-CHS&text="+data.sentences[2].translate);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.sentences[2].sentence.replace(/<[^>]+>/g,""));
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word.split('').join()+',');
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.mean.replace(/<[^>]+>/g,""));
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word.split('').join()+',');
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word);
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word.split('').join()+',');
    list.push("https://fanyi.sogou.com/reventondc/microsoftGetSpeakFile?from=translateweb&text="+data.word);




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
          }, audio.duration * 1000); // audio.duration 为音频的时长单位为秒
      }).catch((e) => {
      });
  }
}

</script>
</body>
</html>
