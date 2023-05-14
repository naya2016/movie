<?php
/**
 * 视频解析
 * @package custom
 */

?>

<script type="text/javascript">
  eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|cy|value|cyurl|diz|cljurl|cyv|url|morancy|function|selectedIndex|src|options|player'.split('|'),0,{}))
      function morancy2() {
      var diz = document.getElementById("url").value;
      var cyurl = document.getElementById("cy");
      var cy = document.getElementById("cy").selectedIndex;
      var cyv = cyurl.options[cy].value;
      var cljurl = document.getElementById("player");
      window.open(cyv + diz,"_blank");
}</script>
<section class="post-ctx">
<div class="col-md-14 column">
        <div id="kj" >
            <iframe class="mrcy" src="https://www.mrcy0.com/usr/themes/Cuteen/load.html" style="background-color: black;" id="player" allowtransparency="true" allowfullscreen="true" frameborder="0" scrolling="no" name="player"></iframe>
        </div>
        <script type="text/javascript">
            if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
            document.getElementById("sdfdf").style.display = "block";
            }

        </script>
</div>
<div class="col-md-14 column">
    <div class="input-group" style="width: 100%;">
        <span class="input-group-addon">选择接口</span> <select class="form-control" id="cy">
            <option value="https://jx.nonitv.cn/?url=" selected>尘烟解析（默认接口）</option></select>
    </div>
    <div class="input-group" style="width: 100%;">
        <span class="input-group-addon" >播放地址</span> <input class="form-control" type="search" placeholder="请输入视频链接" id="url">
    </div>
    <div>
        <button id="bf" type="button" class="btn btn-info btn-block" onclick="morancy()">点击开始解析</button> 
        <button id="bf" type="button" class="btn btn-warning btn-block" onclick="morancy2()">点击全屏播放解析</button>
    </div>
</div>
</section>