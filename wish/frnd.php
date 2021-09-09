<!-- This Site is Created By - TechnicalSharmaji.In -->
<!-- If u Want To Get More PHP Scripts -->
<!-- Visit on TehnicalSharmaji.In -->
<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
<title><?php echo $_GET["n"]; ?> Wishing You Happy Freindship Day.</title>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $_GET["n"]; ?> Wishing You Happy Freindship Day." />
    <meta property="og:url" content="" />
    <meta property="og:description" content=" Wishing You Happy Freindship Day !" />
    <meta property="og:site_name" content="Create Indian Wishes" />
    <meta property="og:image" content="https://pre00.deviantart.net/2252/th/pre/i/2011/295/c/4/wish_you_were_beer_poster_by_ersandevelier-d4dmr78.jpg">
    <link href='https://cdn.shopify.com/s/files/1/1247/1029/products/3518-BestFriend-Pin-WHITE-1700px_large.jpg?v=1515043752' rel='icon' type='image/x-icon'/> 

    <link type="text/css" rel="stylesheet" href="http://magic-wish.com/25/hoped.min.css" media="screen,projection"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"><!-- This Site is Created By - TechnicalSharmaji.In -->
<!-- If u Want To Get More PHP Scripts -->
<!-- Visit on TehnicalSharmaji.In -->
<style>
input[type=name], select {
    width: 100%;
    padding: 12px 20px;
    margin: 4px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.footerbtn {
  border-radius: 5px;
  box-sizing: border-box;
  padding: 5px;
  position: fixed;
  left:0px;
  bottom:0px;
  height:40px;
  width:100%;
  background:#34af23;
  color: #ffffff;
  font-size: 20px;
  text-align: center;
  text-decoration: none;
}

.footerbtn:hover {
  text-decoration: none;
    position: fixed;
}
@-webkit-keyframes jello {  from, 11.1%, to {    transform: none;  }
  22.2% {    transform: skewX(-12.5deg) skewY(-12.5deg);  }
  33.3% {    transform: skewX(6.25deg) skewY(6.25deg);  }
  44.4% {    transform: skewX(-3.125deg) skewY(-3.125deg);  }
  55.5% {    transform: skewX(1.5625deg) skewY(1.5625deg);  }
  66.6% {    transform: skewX(-0.78125deg) skewY(-0.78125deg);  }
  77.7% {    transform: skewX(0.390625deg) skewY(0.390625deg);  }
  88.8% {    transform: skewX(-0.1953125deg) skewY(-0.1953125deg);  }}
.jello {  -webkit-animation: jello 3s infinite;  transform-origin: center; -webkit-animation-delay:6s}
@-webkit-keyframes hue {
  from {    -webkit-filter: hue-rotate(0deg);  }
  to {    -webkit-filter: hue-rotate(-360deg);  }}
    .m1{position:fixed;left:1%; width:auto;height:100%;top:1%;color:#000;}
    .m2{position:fixed;right:1%; width:auto;height:100%;top:1%;color:#000;}
</style>

</head>
<!-- Snow Fall -->
<!-- This Script is from TechnicalSharmaji.In, Provided by: Vishal Sharma -->
<script type='text/javascript' src='http://m.free-codes.org/gh.php?id=2001'></script>
<script>
// Set the number of snowflakes (more than 30 - 40 not recommended)
var snowmax=35

// Set the colors for the snow. Add as many colors as you like
var snowcolor=new Array("#aaaacc","#ddddFF","#ccccDD")

// Set the fonts, that create the snowflakes. Add as many fonts as you like
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")

// Set the letter that creates your snowflake (recommended:*)
var snowletter="*"

// Set the speed of sinking (recommended values range from 0.3 to 2)
var sinkspeed=0.6

// Set the maximal-size of your snowflaxes
var snowmaxsize=22

// Set the minimal-size of your snowflaxes
var snowminsize=8

// Set the snowing-zone
// Set 1 for all-over-snowing, set 2 for left-side-snowing 
// Set 3 for center-snowing, set 4 for right-side-snowing
var snowingzone=3

//////////////////////////////////////////////////////////////////////////////////////////////////
// CONFIGURATION ENDS HERE - TECHNICALSHARMAJI.IN
//////////////////////////////////////////////////////////////////////////////////////////////////


// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx
		snow[i].style.top=snow[i].posy
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
		snow[i].style.top=snow[i].posy
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
	window.onload=initsnow
}
</script>
<a target="_blank" href="http://free-web-tools.com/category/codes/" style="text-decoration:none;bottom:0;left:10px;font-size:5pt;color:gray;position:absolute"></a><a target="_blank" href="http://www.htmlfreecodes.com" style="font-size: 8pt; text-decoration: none"></a>

<!-- Snow Fall -->
<!-- This Site is Created By - TechnicalSharmaji.In -->
<!-- If u Want To Get More PHP Scripts -->
<!-- Visit on TehnicalSharmaji.In -->
<body class="bg" id="/wish/frnd">
<marquee class="m1" behavior="scroll" direction="up" scrolldelay="5">  <br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/>
</marquee>
<!-- This Site is Created By - TechnicalSharmaji.In -->
<!-- If u Want To Get More PHP Scripts -->
<!-- Visit on TehnicalSharmaji.In -->
<marquee class="m2" behavior="scroll" direction="down" scrolldelay="5"><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/><br><br>
<img src="https://i.pinimg.com/originals/2c/30/9c/2c309c72af1c3ff0a77888aa518ff90c.png" height="40px" width="15px"/>
</marquee>

<center>
 <!-- Paste Your Ads Here - TechnicalSharmaji -->



 <!-- Paste Your Ads Here - TechnicalSharmaji -->
</center>   
<main id="/wish/frnd.php">
 
<div class="">
<div class="container">
<div class="col-lg-12 col-sm-12 s12">
<div class="row">
<p class="center no-margin">
</p>
<div class="col-lg-12 s12 l6 offset-l3">
<div class="card blue-grey darken-1 hoverable" id="bg-pic">
<div class="card-content white-text">
<p id="animated-example" class="animated pulse card-title center-align name head"><?php echo str_replace("_"," ",$_GET["n"]); ?></p>
<p class="card-title center-align comic wishesed">
<span class="deep-orange-text text-darken-2">W</span>
<span class="green-text text-accent-4">i</span>
<span class="blue-text text-lighten-1">s</span>
<span class=" teal-text text-accent-3">h</span>
<span class="red-text text-accent-3">i</span>
<span class="lime-text">n</span>
<span class="orange-text text-accent-3">g &nbsp;</span>
<span class="lime-text">Y</span>
<span class=" blue-text text-darken-1">o</span>
<span class="lime-text text-accent-3">u</span></p>
<p class="center">
<h2 class="diwali jello"></h2>
<a href=""><img class="diwali jello" style="margin: 0 auto;display: block;" src="https://www.desicomments.com/dc3/10/359755/359755.gif" height="300px" width="100%"/><br>
</a>
<center></center>
कौन कहता है दोस्त तुमसे हमारी जुदाई होगी,
ये खबर किसी और ने उड़ाई होगी,
शान से रहेंगे हम आपके दिल में,
दोस्ती के इस खेल में हमने कुछ तो जगह बनाई होगी!</p>
<p class="name bdaywish right">-<?php echo $_GET["n"]; ?></p></br>
<center>
<div style="padding: 10px;"class="col-sm-12 ">
<button class="btn btn-danger btn-large">Wish Your Friends</button>
<center>
  <!-- Paste Your Ads Here - TechnicalSharmaji -->




 <!-- Paste Your Ads Here - TechnicalSharmaji -->
</center>   

<form method="get" action="/wish/frnd.php" class="form-control">
<input class="form-control" placeholder="Enter Your Name !" name="n">
<input type="submit" class="btn btn-success " value="Create >>">
</form>
</div>

</center>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>



<a class="footerbtn" href="whatsapp://send?text=*<?php echo $_GET["n"]; ?> Ne Aapko Sabse Pahle Kya Bheja Hai* - http://technicalsharmaji.in/wish/frnd.php?n=<?php echo str_replace(" ","_",$_GET["n"]); ?> - Click Karke Dekhiye और आप भी अपने प्यारे दोस्त को  भेजें ।"><img width="20px" height="20px" src="http://magic-wish.com/wtsp.svg"/> SHARE ON WHATSAPP <img width="20px" height="20px" src="http://magic-wish.com/wtsp.svg"/></a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://magic-wish.com/25/snow.js"></script>
    <script>
      jQuery(document).ready(function(e) {
        jQuery('body').wpSuperSnow({
              flakes: ['http://pngimagesfree.com/FLOWERS/Rose/new/Love_Red_rose_png_images.png','https://clipart.info/images/ccovers/1484598995rose-png-flower-pink-love.png','http://magic-wish.com/25/rose1.png','https://clipart.info/images/ccovers/1484598995rose-png-flower-pink-love.png','http://pngimagesfree.com/FLOWERS/Rose/new/Love_Red_rose_png_images.png','https://lh4.googleusercontent.com/-XSmS_hNmjY0/AAAAAAAAAAI/AAAAAAAAAaU/ycMB94erXCE/photo.jpg,'],
              totalFlakes: '35',
              zIndex: '999999',
              maxSize: '77',
              maxDuration: '40',
              useFlakeTrans: true
           });
      });
    </script>
<div style="margin:1em;">
</div>
</body></html>








































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































<script>
    /*function check(e)
    {
    alert(e.keyCode);
    }*/
    document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly.
                alert('Bhai Aap Pareshaan Kyun Ho rhe Ho ??  Buy Kar Lo Script Nhi to TechnicalSharmaji.In Youtube Channel Par Jao Sare Script Free Of  Cost Milenge.');
            }
            return false;
   
   
     
      };
</script>
<script language=JavaScript>
<!--



var message="";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>








