<?php
function DQHAD_add_footer()
{
    ?>
    <!-- start DQH Adblock Detected -->
    <style>#d7b2{z-index:999999; position:fixed !important;position:absolute;top:3px;top:0px;left:0px;width:100%;height:102%;background-color:#1a2534;opacity:.98;filter:alpha(opacity=90);display:block;padding:20% 0}#d7b2 *{text-align:center;margin:0 auto;display:block;filter:none;font:bold 14px Verdana,Arial,sans-serif;text-decoration:none;color:#FFFFFF}#d7b2 ~ *{display:none}</style>
    <div id="d7b2"></div>
    <script>window.document.getElementById("d7b2").parentNode.removeChild(window.document.getElementById("d7b2")),function(e,t){function n(e){e&&d7b2.nextFunction()}var d=e.document,i=["i","s","u"];n.prototype={rand:function(e){return Math.floor(Math.random()*e)},getElementBy:function(e,t){return e?d.getElementById(e):d.getElementsByTagName(t)},getStyle:function(e){var t=d.defaultView;return t&&t.getComputedStyle?t.getComputedStyle(e,null):e.currentStyle},deferExecution:function(e){setTimeout(e,250)},insert:function(e,t){var n=d.createElement("i"),i=d.body,a=i.childNodes.length,o=i.style,r=0,s=0;if("d7b2"==t){for(n.setAttribute("id",t),o.margin=o.padding=0,o.height="100%",a=this.rand(a);a>r;r++)1==i.childNodes[r].nodeType&&(s=Math.max(s,parseFloat(this.getStyle(i.childNodes[r]).zIndex)||0));s&&(n.style.zIndex=s+1),a++}n.innerHTML=e,i.insertBefore(n,i.childNodes[a-1])},displayMessage:function(e){var t=this;e="abisuq".charAt(t.rand(5)),t.insert("<"+e+'><?php echo get_option("DQHAD_message", "Phát hiện AdBlock ! Vui lòng tắt nó để được xem nội dung."); ?>'+("</"+e+">"),"d7b2"),d.addEventListener&&t.deferExecution(function(){t.getElementBy("d7b2").addEventListener("DOMNodeRemoved",function(){t.displayMessage()},!1)})},i:function(){for(var e="AdAboveGame,FooterAd,ad-220x90-1,ad-stripe,adDiv300,ad_txt,side_ad,ad,ads,adsense".split(","),t=e.length,n="",d=this,i=0,a="abisuq".charAt(d.rand(5));t>i;i++)d.getElementBy(e[i])||(n+="<"+a+' id="'+e[i]+'"></'+a+">");d.insert(n),d.deferExecution(function(){for(i=0;t>i;i++)if(null==d.getElementBy(e[i]).offsetParent||"none"==d.getStyle(d.getElementBy(e[i])).display)return d.displayMessage("#"+e[i]+"("+i+")");d.nextFunction()})},s:function(){var n,i,a,o,r={"pagead2.googlesyndic":"google_ad_client"},s=this,l=s.getElementBy(0,"script"),c=l.length-1;for(d.write=null,d.writeln=null;c>=0;--c)if(n=l[c].src.substr(7,20),r[n]!==t)return a=d.createElement("script"),a.type="text/javascript",a.src=l[c].src,i=r[n],e[i]=t,a.onload=a.onreadystatechange=function(){o=this,e[i]!==t||o.readyState&&"loaded"!==o.readyState&&"complete"!==o.readyState||(e[i]=a.onload=a.onreadystatechange=null,l[0].parentNode.removeChild(a))},l[0].parentNode.insertBefore(a,l[0]),void s.deferExecution(function(){return e[i]===t?s.displayMessage(a.src):void s.nextFunction()});s.nextFunction()},u:function(){var e,n,d="/ad_generator.,/adlink_,/adpicture2.,/ads/player-,/adx_iframe_,/banners/ad10.,/magic-ads/ad,/msgads.,/retrad.,_300_250.".split(","),a=this,o=a.getElementBy(0,"img");o[0]!==t&&o[0].src!==t&&(e=new Image,e.onload=function(){n=this,n.onload=null,n.onerror=function(){i=null,a.displayMessage(n.src)},n.src=o[0].src+"#"+d.join("")},e.src=o[0].src),a.deferExecution(function(){a.nextFunction()})},nextFunction:function(){var e=i[0];e!==t&&(i.shift(),this[e]())}},e.d7b2=d7b2=new n,d.addEventListener?e.addEventListener("load",n,!1):e.attachEvent("onload",n)}(window);</script>
    <!-- /end DQH Adblock Detected -->
    <?php
}
add_action('wp_footer', 'DQHAD_add_footer');