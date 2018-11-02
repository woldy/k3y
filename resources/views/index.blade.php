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
    .logo{
      text-align: center;
      font-size: 48px;
      padding: 30px 0px 0px 0px;
      color: #444;
      font-weight: 700;
    }

    .subtitle{
      text-align: center;
      font-size: 18px;
      color: #666;
      padding-bottom: 30px;
      font-weight: 700;
    }
  </style>
</head>
<body>

<!--在这里编写你的代码-->



<div class="am-panel am-panel-default">
  <div class="am-panel-hd">
    考研英语K3Y
  </div>
  <div class="am-panel-bd">


    <div class='logo'>K3Y</div>
    <div class='subtitle'>Kao Yan Ying Yu</div>
    <div class="am-input-group">
      <span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
      <input type="text"  id="name" class="am-form-field" placeholder="输入你的名字就好">
    </div>
    <br />

    <button type="button"  level="0" class="am-btn  am-btn-block level0">必知必会（0/329）</button>
    <button type="button"  level="1" class="am-btn  am-btn-block level1">应知应会（0/651）</button>
    <button type="button"  level="2" class="am-btn  am-btn-block level2">需知需会（0/2285）</button>
    <button type="button"  level="3" class="am-btn  am-btn-block level3">半知半会（0/2981）</button>


  </div>
</div>




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

$("button").click(function(){
  if($("#name").val()==''){
    alert('what\'s your name?');
  }else{
    window.location.href='/xinao?level='+$(this).attr('level')+'&name='+$("#name").val();
  }

});


$('#name').bind("input propertychange",function () {
  get();
});

function get(){
  var name=$("#name").val();
  var default_class=true;
  $.get("/xinao/count?name="+name,function(data,status){
    for(i=0;i<4;i++){
      $(".level"+i).html(data.title[i]+'('+data.count[i]+'/'+data.sum[i]+')');
      $(".level"+i).removeClass("am-btn-primary");
      if(data.count[i]>0 && default_class){
        $(".level"+i).addClass("am-btn-primary");
        default_class=false;
      }
    }
  });
}

$("#name").val(GetQueryString("name"));
get();

function GetQueryString(name)
{
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);//search,查询？后面的参数，并匹配正则
     if(r!=null)return  unescape(r[2]); return '';
}

</script>
</body>
</html>
