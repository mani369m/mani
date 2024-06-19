
<html>
<head>
<meta content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1" name=viewport>
<meta content="IE=edge" http-equiv=X-UA-Compatible>
<script>
   const api_url = "https://jiotv.data.cdn.jio.com/apis/v1.4/getMobileChannelList/get/?os=android&devicetype=phone&usertype=Jio&version=296&langId=6";
   let j = 40;
   let i = 21;
   async function view(id,target) {
const m3u8 = "play.php?id=" +target;
    window.open(m3u8, "_self");
   }
   async function getapi(url, j, i) {
    const response = await fetch(url);
    const ch_list = document.getElementById("ch_list");
    let data = await response.json();
    for (i; i < j; i++) {
     var div = document.createElement("div");
     var img = document.createElement("img");
     var img_val = "https://jiotv.catchup.cdn.jio.com/dare_images/images/" + data.result[i].logoUrl;
     img.setAttribute("src", img_val);
     div.id = data.result[i].channel_id;
     div.target = data.result[i].logoUrl.substring(0,data.result[i].logoUrl.indexOf("."));
     div.addEventListener("click", function() {
      view(this.id,this.target);
     });
     var name = document.createElement("div");
     name.className = "tvv-name";
     img.className = "loading";
     name.innerHTML = data.result[i].channel_name;
     div.className = "tvv-item";
     div.appendChild(img);
     div.appendChild(name);
     ch_list.appendChild(div);
    }
   }
   getapi(api_url, 20, 1);
   function loadMore() {
    if (i !== 1046) {
     getapi(api_url, j, i)
     if (i != 20) {
      i = j + 1;
     }
     j = j + 20;
     console.log("clicked");
    } else {
     alert("All channels listed!")
    }
   }
   function loadAll() {
    if (i !== 1046) {
     getapi(api_url, 1046, 1)
     i = 1046;
     console.log("clicked");
    } else {
     alert("All channels listed!")
    }
   }
  </script>
<script src=https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js></script>
<style>
 .loading {margin-top: 0;font-weight: 700;vertical-align: middle;line-height: 150px;font-size: 25px;text-transform: uppercase;background: linear-gradient(to right, red 30%, rgb(10, 60, 215) 75%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;}h1 {background-color: #000;margin: 0;text-align: center;padding: 5px }a {color: #fff;text-decoration: none }tr th {font-tvv-name: bold;background-color: green;padding: 1px }* {box-sizing: border-box }@keyframes fadein {0% {opacity: 0 }66% {opacity: 0 }100% {opacity: 1 }}@-webkit-keyframes fadein {0% {opacity: 0 }66% {opacity: 0 }100% {opacity: 1 }}.tvv-item {position: relative;display: inline-block;width: 120px;height: 150px;margin: 3px;padding: 10px;border: 1px solid green z-index: 1;background: White;box-shadow: 2px 2px 5px #000;overflow: hidden;border-radius: 4px;filter: contrast(100%) }.tvv-item>* {margin: 0;padding: 0 }.tvv-item .tvv-thumb {width: 100%;bottom: 10px;top: 0px;position: absolute;right: 0;float: center;}.tvv-item .tvv-thumb img {width: 100%;pointer-events: none }.tvv-item .tvv-name {position: absolute;left: 0;bottom: 0;font-size: 12px;display: block;text-align: center;width: 100%;color: black;padding: 5px;font-weight: 800;text-overflow: ellipsis;black-space: nowrap;overflow: hidden;background: linear-gradient(135deg, green 0%, white 64%);box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5);7px 7px 20px 0px rgba(0, 0, 0, .1), 4px 4px 5px 0px rgba(0, 0, 0, .1);transition: all 0.3s ease;}.tvv-item img {width: 100%;pointer-events: none }.tvv-item:after {position: absolute;content: "";width: 100%;height: 0;top: 0;left: 0;z-index: -1;border-radius: 5px;border: 1px solid green;background-color: black;background-image: linear-gradient(135deg, green 0%, white 64%);box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5);7px 7px 20px 0px rgba(0, 0, 0, .1), 4px 4px 5px 0px rgba(0, 0, 0, .1);transition: all 0.3s ease;}.tvv-item:hover {color: #000;}.tvv-item:hover:after {top: auto;bottom: 0;height: 100%;}.tvv-item:active {top: 5px;}.tvv-name:hover {}.fin {width: 100%;margin-top: 1px;margin-bottom: 2px;float: center;height: 30px;font-size: small;background-color: rgb(40, 40, 40);color: black;border-radius: 10px;border: 3px solid greenoutline: none;text-align: center;font-family: "Poppins", sans-serif;}.fin, .dftr {width: 100%;margin-top: 1px;margin-bottom: 2px;float: center;height: 30px;font-size: small;background-color: rgb(40, 40, 40);color: black;border-radius: 10px;border: 3px solid green;outline: none;text-align: center;font-family: "Poppins", sans-serif;}.fin:hover, .dftr:hover {border: 3px solid rgb(255, 60, 140);color: white;background: black;}.tvv-item {width: calc(100%/20 - 10px) }}@media only screen and (max-width:2600px) {.tvv-item {width: calc(100%/19 - 10px) }}@media only screen and (max-width:2470px) {.tvv-item {width: calc(100%/18 - 10px) }}@media only screen and (max-width:2340px) {.tvv-item {width: calc(100%/17 - 10px) }}@media only screen and (max-width:2210px) {.tvv-item {width: calc(100%/16 - 10px) }}@media only screen and (max-width:2080px) {.tvv-item {width: calc(100%/15 - 10px) }}@media only screen and (max-width:1950px) {.tvv-item {width: calc(100%/14 - 10px) }}@media only screen and (max-width:1820px) {.tvv-item {width: calc(100%/13 - 10px) }}@media only screen and (max-width:1690px) {.tvv-item {width: calc(100%/12 - 10px) }}@media only screen and (max-width:1560px) {.tvv-item {width: calc(100%/11 - 10px) }}@media only screen and (max-width:1430px) {.tvv-item {width: calc(100%/10 - 10px) }}@media only screen and (max-width:1300px) {.tvv-item {width: calc(100%/9 - 10px) }}@media only screen and (max-width:1170px) {.tvv-item {width: calc(100%/8 - 10px) }}@media only screen and (max-width:1040px) {.tvv-item {width: calc(100%/7 - 10px) }}@media only screen and (max-width:910px) {.tvv-item {width: calc(100%/6 - 10px) }}@media only screen and (max-width:780px) {.tvv-item {width: calc(100%/5 - 10px) }}@media only screen and (max-width:650px) {.tvv-item {width: calc(100%/4 - 10px) }}@media only screen and (max-width:520px) {.tvv-item {width: calc(100%/3 - 10px) }}@media only screen and (max-width:390px) {.tvv-item {width: calc(100%/2 - 10px) }}.custom-btn {width: 130px;height: 40px;color: #fff;border-radius: 5px;padding: 10px 25px;font-family: 'Lato', sans-serif;font-weight: 500;background: transparent;cursor: pointer;transition: all 0.3s ease;position: relative;display: inline-block;box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5), 7px 7px 20px 0px rgba(0, 0, 0, .1), 4px 4px 5px 0px rgba(0, 0, 0, .1);outline: none;}.btn-11 {border: none;background: green;background: linear-gradient(0deg, black 0%, brown 100%);color: #fff;overflow: hidden;}.btn-11:hover {text-decoration: none;color: #fff;background-image: linear-gradient(135deg, green 0%, white 64%);}.btn-11:before {position: absolute;content: '';display: inline-block;top: -180px;left: 0;width: 30px;height: 100%;background-color: #fff;animation: shiny-btn1 3s ease-in-out infinite;}.btn-11:hover {opacity: .7;color: #000;}.btn-11:active {box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .3), -4px -4px 6px 0 rgba(116, 125, 136, .2), inset -4px -4px 6px 0 rgba(255, 255, 255, .2), inset 4px 4px 6px 0 rgba(0, 0, 0, .2);}@-webkit-keyframes shiny-btn1 {0% {-webkit-transform: scale(0) rotate(45deg);opacity: 0;}80% {-webkit-transform: scale(0) rotate(45deg);opacity: 0.5;}81% {-webkit-transform: scale(4) rotate(45deg);opacity: 1;}100% {-webkit-transform: scale(50) rotate(45deg);opacity: 0;}}@import url("https://fonts.googleapis.com/css?family=Roboto");@-webkit-keyframes come-in {0% {-webkit-transform: translatey(100px);transform: translatey(100px);opacity: 0;}30% {-webkit-transform: translateX(-50px) scale(0.4);transform: translateX(-50px) scale(0.4);}70% {-webkit-transform: translateX(0px) scale(1.2);transform: translateX(0px) scale(1.2);}100% {-webkit-transform: translatey(0px) scale(1);transform: translatey(0px) scale(1);opacity: 1;}}@keyframes come-in {0% {-webkit-transform: translatey(100px);transform: translatey(100px);opacity: 0;}30% {-webkit-transform: translateX(-50px) scale(0.4);transform: translateX(-50px) scale(0.4);}70% {-webkit-transform: translateX(0px) scale(1.2);transform: translateX(0px) scale(1.2);}100% {-webkit-transform: translatey(0px) scale(1);transform: translatey(0px) scale(1);opacity: 1;}}* {margin: 0;padding: 0;}html, body {background: #eaedf2;font-family: 'Roboto', sans-serif;}.stwBlurRainbow, .stwRainbow {position: fixed;width: 100%;bottom: 0;left: 0;right: 0;height: 3px;z-index: 23;background: linear-gradient(-45deg, #4086f4, #31a952, #fbbe01, #eb4132, #4086f4, #31a952, #fbbe01, #eb4132);background-size: 200%;-webkit-animation: animeBar 5s linear infinite;animation: animeBar 5s linear infinite }.stwBlurRainbow {height: 10px;z-index: 22;filter: blur(10px);opacity: .7 }@-webkit-keyframes animeBar {0% {background-position: 0 50% }50% {background-position: 100% 50% }100% {background-position: 0 50% }}@keyframes animeBar {0% {background-position: 0 50% }50% {background-position: 100% 50% }100% {background-position: 0 50% }}
</style>
</head>
<body>
<center>
<button class="btn-11 custom-btn" style="width:80%;font-weight:1000;font-size:25px;position:sticky;top:0px;z-index:3">JioTV PREMIUM</button>
<div class="no-items section" id=search_top name="Search (Top)" style=z-index:3;position:sticky;top:44px></div>
<input class=fin placeholder="Load All Channels then Search here.." style=z-index:3;position:sticky;top:44px>
<div class=main id=ch_list></div>
<div style=display:inline-block>
<button class="btn-11 custom-btn" onclick=loadAll() style=width:40vw;height:40px;font-size:10px>Load All Channels</button>
<button class="btn-11 custom-btn" onclick=loadMore() style=width:40vw;height:40px;font-size:10px>
<b>Load 20 Channels</b>
</button>
</div>
</center>
<div class=stwRainbow></div>
<div class=stwBlurRainbow></div>
<script>
   $(document).ready(function() {
    var dftr = $('select.dftr'),
     headerCount = $('#headerCount');
    headerCount.html('select a filter or use search');
    dftr.on('change', function() {
     dftr.attr('disabled', 'disabled');
     var records = $('#tvvTable').find('.tvv-item');
     records.hide();
     var critriaAttributes = [];
     dftr.each(function() {
      var $this = $(this),
       $selectedLength = $this.find(':selected').length,
       $critriaAttribute = '';
      if ($selectedLength > 0 && $this.val() != '0') {
       if ($selectedLength == 1) {
        $critriaAttribute += '[data-' + $this.data('attribute') + '*="' + $this.val() + '"]';
       } else {
        var $startDataAttribute = '[data-' + $this.data('attribute') + '*="',
         $endDataAttribute = '"]',
         $selectedValues = $this.val().toString();
        $critriaAttribute += $startDataAttribute + $selectedValues.replaceAll(',', ($endDataAttribute + ',' + $startDataAttribute)) + $endDataAttribute;
       }
       critriaAttributes.push($critriaAttribute);
      }
     });
     var $showRecords = records;
     if (critriaAttributes.length > 0) {
      $.each(critriaAttributes, function(i, filterValue) {
       $showRecords = $showRecords.filter(filterValue);
      });
     }
     $showRecords.show();
     headerCount.html($showRecords.length + ' channels filtered');
     dftr.removeAttr('disabled');
     $(".fin").val('');
    });
    $(".fin").keyup(function() {
     var filter = $(this).val(),
      count = 0;
     $('select.dftr').prop('selectedIndex', 0);
     $(".tvv-item").each(function() {
      if ($(this).text().search(new RegExp(filter, "i")) < 0) {
       $(this).fadeOut();
      } else {
       $(this).show();
       count++;
      }
     });
    });
   });
  </script>
</body>
</html>