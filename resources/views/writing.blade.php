<!doctype html>
<html class="no-js">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
      .mean{
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
        <div class="am-panel am-panel-primary">
          <div class="am-panel-hd"><span class="am-icon-home back">Back</span><span class='title'>Writing</span></div>
          <div class="am-panel-bd">
            <div class="word">
        	  </div>
        	<div class='text'>
        
        	</div>
          </div>
        </div>
        <audio  id="audio" controls="controls" style='width:100%' ><source src='https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=5&text=' type="audio/mpeg"></audio>
        <button type="button" onclick="last()" class="am-btn am-btn-default am-btn-block">上一个</button>
        <button type="button"   onclick="next()"   class="am-btn am-btn-primary am-btn-block">下一个</button>
        
        
<ul data-am-widget="pagination" class="am-pagination am-pagination-default">
    <li class="" t=0><a href="javascript:get(0)">1</a></li>
    <li class="" t=1><a href="javascript:get(1)">2</a></li>
    <li class="" t=2><a href="javascript:get(2)">3</a></li>
    <li class="" t=3><a href="javascript:get(3)">4</a></li>
    <li class="" t=4><a href="javascript:get(4)">5</a></li>
    <li class="" t=5><a href="javascript:get(5)">6</a></li>
    <li class="" t=6><a href="javascript:get(6)">7</a></li>
    <li class="" t=7><a href="javascript:get(7)">8</a></li>
    <li class="" t=8><a href="javascript:get(8)">9</a></li>
    <li class="" t=9><a href="javascript:get(9)">10</a></li>
    <li class="" t=10><a href="javascript:get(10)">11</a></li>
    <li class="" t=11><a href="javascript:get(11)">A</a></li>
    <li class="" t=12><a href="javascript:get(12)">B</a></li>
</ul>  
        
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
        
        var title=new Array();
        var text=new Array();
        
        title[0]="1.Recommendation Letter";
        title[1]="2.Application Letter";
        title[2]="3.Resignation Letter";
        title[3]="4.Complaint Letter";
        title[4]="5.Request letter";
        title[5]="6.Thanks Letter";
        title[6]="7.Suggestion Letter";
        title[7]="8.Inquiry Letter";
        title[8]="9.Congratulatory Letter";
        title[9]="10.Apology Letter";
        title[10]="11.Invitation Letter";
        title[11]="Template A";
        title[12]="Template B";

        text[0]="Dear___,<br>\
    I am writing this letter in purpose of making a recommendation to you. It is really my honor if you think this recommendation useful and instructive.<br>\
    ...<br>\
    I will be very glad if you can share some feelings with me. If you would like to discuss more about it, please contact me without hesitation. I am looking forward to your reply.<br>\
Yours sincerely.";
        text[1]="Dear___,<br>\
    I am writing this letter in purpose of making an application. I think it would be a great honor for me if you can grant this opportunity for me.<br>\
    ...<br>\
    I hope my request did not cause you too much trouble. I will be really appreciated if you can give me this chance. Thank you for your attention and consideration. I am looking forward to your reply with great pleasure.<br>\
Yours sincerely.";
        text[2]="Dear Manager,<br>\
    I am writing this letter in purpose of resigning from my present position.<br>\
    Hereby, I would like to express my sincere gratitude and thanks for all the help and support that I have received from you. I felt very lucky to gain rich professional experience from working with our talented team members. However, in order to fully develop my potential, I will accept the offer from another company. But I will always cherish the wonderful time spent with all of you.<br>\
    I will appreciate if you can approve my resignation. I feel honored if you can provide me a reference letter. I am looking forward to your earlier reply.<br>\
Yours sincerely.<br>\
";
        text[3]="Dear___,<br>\
    I am writing this letter in purpose of making a complaint to you. I feel bad to trouble you but I am afraid I have no choice this time.<br>\
    As a renowned business, your company enjoy a good business reputation on the market. I have been your regular customer for almost 6 years. However, I was very disappointed and had to make a complaint.<br>\
    I hope you can look into this mater carefully and take steps to prevent it from happening again. [ I will really appreciate if you can change it or refund it for me (about product) / I will really appreciate if your company can make formal apology to me (about service)]. I am look forward to your replay and thank you for your consideration.<br>\
Yours sincerely.";
        text[4]="Dear___,<br>\
    I am writing this letter in purpose of inquiring if it is possible for you to help me about (Something). I will really appreciate if you can spare some time and help me.<br>\
    ...<br>\
    I hope this request won't cause you too much trouble. Thank you for attention and consideration. I am waiting for your reply with heartfelt appreciation.<br>\
Yours sincerely.";
        text[5]="Dear___,<br>\
    I am writing this letter in purpose of expressing my heartfelt gratitude to you. It is really kind of you to help me.<br>\
    ...<br>\
    Words are beyond me to express my thanks to you. In order to extend my gratitude, I would like to invite you to have a dinner this Sunday. Please let me know your convenient time. I am looking forward to your reply.<br>\
Yours sincerely,";
        text[6]="Dear___,<br>\
    I am writing this letter in purpose of providing some conduction suggestions. In my option, it is beneficial for you to take following action.<br>\
    First of all, it will be good for you to (do Something A). Furthermore, you had better (do Something B). Most important of all, if you can (do Something C), I am sure you can benefit from it.<br>\
    I hope you will find these proposals useful, and I would be ready to discuss this matter with you to further details. I am looking forward to your reply.<br>\
Yours sincerely,";
        text[7]="Dear___,<br>\
    I am writing his letter in purpose of inquiring about some detailed information. If you can spare some time and help me with this, I will be really honored.<br>\
    First of all, please tell me (Something A). Furthermore, I would like to know (Something B). Most important of all, would you please introduce (Something C)?<br>\
    I appreciate if you can provide me some relevant information. I hope this would not trouble you too much. Thank you for your time and kindness. I am looking forward to your reply.<br>\
Yours sincerely,";
        text[8]="Dear___,<br>\
    I am writing this letter in purpose of expressing my congratulations to you. You may not imagine how excited I was when I got the news. I am just as proud as you are sending my hearty congratulation.<br>\
    ...<br>\
    I am glad that I can share this joyful moment with you. Please accept my warmest congratulations. I wish you a great success and fulfillment in the year ahead.<br>\
Yours sincerely,";
        text[9]="Dear___,<br>\
    I am writing this letter in purpose of expressing my sincere apology to you. I felt terribly sorry. But I hope you can forgive me if you know the reason.<br>\
    ...<br>\
    Once again, I am very sorry for any inconvenience caused. I will appreciate if you can accept my apologies and understand my situation. (In order to compensate for my mistake, I hope you can meet me recently to allow me have the opportunity to say sorry in person. I am looking forward to your earlier reply.)<br>\
Yours sincerely,";
        text[10]="Dear All,<br>\
    I am writing this letter to invite you to take part in (our activity). I think it would be a great honor for me if you could participate.<br>\
    ...<br>\
    I hope this invitation is of interest. Please accept my invitation and let me know at your convenience. I am looking forward to your coming with great pleasure.<br>\
Yours sincerely,";
        text[11]="<b>Dynamic Chart.</b><br>\
    The given graph clearly illustrates great changes from the year A to the year B.According to the data revealed by this graph, the number of X experienced a steady downturn. (the number of Y remained almost the same).<br>\
<b>Static Diagrams.</b><br>\
    As clearly revealed in this chart, different people make different choice in (This matter). <br>\
According to the given statistics, the percentage of A accounts for n% of the total amount, taking up the largest share. B, C and the rest represent x%, y%, and z% respectively.<br>\
<b>Second paragraph.</b><br>\
    * The fundamental factors that contribute to the about mentioned tendency may be summarized as follows.<br>\
    * Several primary factors could contribute to this phenomenon.<br>\
    * At least three fundamental factors could be identified to contribute to this phenomenon.<br>\
    * There are, from my perspective, plenty of shaping factors, among which, the following ones, are particularly worth mentioning.<br>\
　　* From my perspective, a couple of factors can contribute to this significant trend.<br>\
<br>\
　　From my perspective, a couple of factors can contribute to this phenomenon. To begin with, it is apparent that the prosperity of our nation and the improvement of living condition result in the popularity of this trend. What's more, there is no denying that government implemented proper relevant policies recently, which play a significant role in driving this tendency. Last but not least, it can be said without any exaggeration that the turning attitude of people, in combination with better education, promotes more people to make these choices.<br>\
Third paragraph.<br>\
　　Based on what has been discussed above, we can safely come to a conclusion that this trend will continue in the following years. It is worth noting that it surely can be inevitably widespread with better governmental policies.";
//         text[12]="<b>Dynamic Chart.</b><br>\
// 　　It goes without saying that the chart records (Some Phenomenon), which successfully arouses our curiosity. As is clearly reflected by the chart, (Something A) witnessed great changes from (Time1) to (Time2). Especially, (Something B) has experienced the most dramatic change, jumping from (Number X) to (Number Y) during this time. Obviously, the inclinations, clearly reflected by the chart, should be given more consideration.<br>\
// <b>Static Diagrams.</b><br>\
// 　　There is no denying that the chart records ___, which successfully arouses our curiosity. As is clearly reflected by the chart, __ show totally different inclination towards the problem of ___. Especially, ___ shows the most obvious inclination that ___. Obviously, the inclinations, clearly reflected by the chart, should be given more consideration.<br>\
// <b>Second paragraph</b><br>\
// 　　Theoretically, the trend that ___ brings us many influences, but for my part, the following two are of utmost importance. On the top of list is that ___. In addition, there is the other point that no one can ignore. It is universally admitted that ___.<br>\
// <b>Third paragraph.</b><br>\
// 　　Taking into account what has been discussed above, we may safely come to the conclusion that the current situation will continue in the forthcoming years. So it is advisable to maximize its positive effects and minimize the negative ones.";  
        
        text[12]="Ignored";

        var i=0;
        var list=[];
        
        
        function next(){
            i=++i % 13;
            get(i);
        }
        
        function last(){
            i=i==0?12:--i
            get(i);
        }    
        
        
       var audio = document.getElementById("audio"); 
          audio.loop = false;
          audio.addEventListener('ended', function () {  
              next();
        }, false);
        
        function fmt(txt,hightlight){
          var s=txt.replace("\r","<br>").replace("\n","<br>");

          var s=txt.replace(/  /g,"&nbsp;&nbsp;&nbsp;&nbsp;");
          //var s=txt.replace("Yours sincerely.","<br>Yours sincerely.");
          
          console.log(s);
          return s;
        }
        
        function get(i){
            audio.pause();
            $("li").removeClass('am-active');
            $("[t="+i+"]").addClass('am-active');
            $(".text").html('<b>'+title[i]+'</b><br>'+fmt(text[i]));
            play("https://fanyi.sogou.com/reventondc/synthesis?speed=1&lang=en&from=translateweb&text="+text[i].replace(/<[^>]+>/g,"").replace(/_/g,'').replace(/\*/g,''));
            //list.push("https://tts.baidu.com/text2audio?lan=en&ie=UTF-8&spd=3&text="+data.word.sentences[i].sentence.replace(/<[^>]+>/g,""));
        }
        
        function play(src){
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
        get(0);
        </script>
    </body>
</html>
    
