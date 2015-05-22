<?php
function mobile_post() {
$bwcat=@defence_sql_injection(@$_GET['url']);
$resultsliders = @mysql_query("SELECT * FROM frndzk_post WHERE id='$bwcat' ORDER by id desc");
if ( @mysql_num_rows($resultsliders) > 0 ) {
while($generalslis = @mysql_fetch_array($resultsliders)) {
return @$generalslis['post'];
}
}
else { return '404 - not found'; }
}
function get_image_bdwave_mobile($ii) {
$url=$ii;
$i=0;

$doc = new DOMDocument();
@$doc->loadHTML($url);

$tags = $doc->getElementsByTagName('img');
foreach ($tags as $tag) {
       $arr['$i']=$tag->getAttribute('src');
	   $i=$i+1;
}
$i=0;
if ( $arr['$i'] != "" ) {
return $arr['$i'];
}
else {
return home_url().'/xenon-addons/xenon-mobile-theme-pack/images/a.png';
}
}
register_xenon_menu('mobile-theme-menu');
function xmtpcf2341() { if (is_home() || is_page() || is_post() || is_category() || is_signup() || is_tags() || is_404() || is_search() || is_author()) {
$mobile_browser = '0';

if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|ipad)/i',
    strtolower($_SERVER['HTTP_USER_AGENT']))){
    $mobile_browser++;
    }

if((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml')>0) or 
    ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))){
    $mobile_browser++;
    }
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda','xda-');

if(in_array($mobile_ua,$mobile_agents)){
    $mobile_browser++;
    }
if (strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini')>0) {
    $mobile_browser++;
    }
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows')>0) {
    $mobile_browser=0;
    }
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows phone')>0) {
    $mobile_browser++;
    }
@session_start();
if(isset($_GET['dir']) && $_GET['dir']=='dv') {
ob_start();
$_SESSION['desktop']="dv";
header("Location: ".home_url()."");
ob_flush();
}
elseif(isset($_GET['dir']) && $_GET['dir']=='mb') {
ob_start();
@session_destroy();
header("Location: ".home_url()."");
ob_flush();
}
if(isset($_SESSION['desktop'])) {

}
else {
if($mobile_browser>0){










echo'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>';
if (is_home()) { echo xenon_title().' | '.xenon_tagline(); }
elseif (isset($_GET['dir']) && $_GET['dir']=='mobilepost' && isset($_GET['url'])) { echo mobile_post(); }
elseif (is_home_navi()) { echo'next page'; }
elseif(is_page()) { echo page_title(); }
elseif(is_post()) { echo post_title(); }
elseif(is_category()) { echo category_title(); }
elseif(is_tags()) { echo xenon_tag_title(); }
elseif(is_search()) { echo xenon_search_title(); }
elseif(is_author()) { echo author_title(); }
elseif(is_404()) { echo'Not Found - 404'; }
elseif(is_signup()) { echo 'Signup'; }
else { echo'404 not found'; }
echo'</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<meta http-equiv="keywords" content="free mobile website templates, free mobile website template, free iphone template, free android template, free high end touch mobile templates" />
<meta http-equiv="description" content="Get free mobile templates for Iphone , Android and High end touch mobile devices" />
<link href="'.home_url().'/xenon-addons/xenon-mobile-theme-pack/css/style.css"rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="'.home_url().'/xenon-addons/xenon-mobile-theme-pack/css/icomoon.css" type="text/css" media="all">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="'.home_url().'/xenon-addons/xenon-mobile-theme-pack/css/jquery.mCustomScrollbar.css" type="text/css" media="all">
    <link rel="stylesheet" href="'.home_url().'/xenon-addons/xenon-mobile-theme-pack/css/orange.css" type="text/css" media="screen">
<!-- jQuery library (served from Google) -->


';
xenon_header();

echo'
<!-- bxSlider Javascript file -->
<script src="'.home_url().'/xenon-addons/xenon-mobile-theme-pack/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="'.home_url().'/xenon-addons/xenon-mobile-theme-pack/jquery.bxslider.css" rel="stylesheet" />

</head>
<body>





<header class="css3aw-theme-dark">

		<div id="css3aw-main-menu-wrapper">
			<div id="css3aw-menu-trigger-icon">
				Menu
			</div>
			
			<div id="css3aw-main-menu-container">
				<ul id="css3aw-menu">
					
					<li>
                <a href="'.home_url().'"><span aria-hidden="true" class="icon-star"></span>প্রথম পাতা</a>
            </li>';
            show_xenon_menu('mobile-theme-menu',
array('before_menu' => '',
'after_menu' => '',
'before_link' => '<li>',
'after_link' => '</li>',
'current_anchor_class' => '',
'a_span' => '<span aria-hidden="true" class="icon-star"></span>'
));

echo'

				</ul>
			</div>
<div id="css3aw-social-menu-wrapper">
<a href="'.home_url().'/dv" title="desktop view" style="color:white; font-size:12px;">DESKTOP VIEW</a>
		</div>
		</div>
		
		

		
		

	</header>


<div style="clear:both;"></div>



<div class="logo"><h1><a href="'.home_url().'"><img src="'.home_url().'/xenon-addons/xenon-mobile-theme-pack/images/logo.png" alt="logo" /></a></h1>
<p>আজ <script type="text/javascript" src="http://bangladate.appspot.com/index3.php"></script></p>
</div>';	            
        

  echo"
<br><br>";
$resultsliders = @mysql_query("SELECT * FROM frndzk_post WHERE tags LIKE'%headline%' ORDER by id desc LIMIT 0,3");
if ( @mysql_num_rows($resultsliders) > 0 ) {
echo'<div style="position:relative;
width:100%;]
text-align:center:"><div style="margin:0 auto; position:relative; display:block; width:300px;">';

if (@$_GET['dir']!='mobilepost') {
echo'<ul class="bxslider">';
while($generalslis = @mysql_fetch_array($resultsliders)) {
echo'
  <li><a href="'.@home_url().'/mobilepost/'.@$generalslis['id'].'"><img src="'.get_image_bdwave_mobile($generalslis['postcontent']).'" title="'.@$generalslis['post'].'"/></a></li>
';
}
echo'
</ul>';
echo"<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
  
		captions: true,

		// AUTO
		auto: true,
		pause: 4000,
		autoStart: true,
		autoDirection: 'next',
		autoHover: false,
		autoDelay: 0,
		// CONTROLS
		controls: true,
		nextText: 'Next',
		prevText: 'Prev',
		nextSelector: null,
		prevSelector: null,
		autoControls: false,
		startText: 'Start',
		stopText: 'Stop',
		autoControlsCombine: false,
		autoControlsSelector: null,
		
		// PAGER
		pager: false,
		pagerType: 'full',
		pagerShortSeparator: ' / ',
		pagerSelector: null,
		buildPager: null,
		pagerCustom: null,
  });
  
});
</script>";
}




echo'</div></div><div style="clear:both;"></div>';
}
echo'';
if(is_home()) {
echo'<h2 class="head">সর্বশেষ সংবাদ</h2>';
}
else if(is_category()) {
echo'<h2 class="head">'.category_title().'</h2>';
}
else if (isset($_GET['dir']) && $_GET['dir']=='mobilepost' && isset($_GET['url'])) {
echo'<h2 class="head">বিস্তারিত সংবাদ</h2>';
}
else if (isset($_GET['dir']) && $_GET['dir']=='next' && isset($_GET['url']) && $_GET['url']>0) {
echo'<h2 class="head">আরও সর্বশেষ সংবাদ</h2>';
}
echo'<div class="content">
<p>';
if(is_home()) {
$bdwmi=0;
$resultsliders = @mysql_query("SELECT * FROM frndzk_post WHERE tags LIKE'%headline%' ORDER by id desc LIMIT 0,15");
if ( @mysql_num_rows($resultsliders) > 0 ) {
while($generalslis = @mysql_fetch_array($resultsliders)) {
if($bdwmi<15) {
echo'<div style="position:relative;
width:100%;]
text-align:center:"><div style="margin:0 auto; position:relative; display:block; width:300px; border-width:1px; border-bottom:solid black;"><div style="border-width:5px; border-style:double; border-color:black; float:left; height:70px; width:70px;"><img height="70px" width="70px" src="'.get_image_bdwave_mobile($generalslis['postcontent']).'"/></div>';
}
echo'<div style="float:left; margin:0 15px; width:150px; position:relative; "><b><a style="text-decoration:none; color:black;" href="'.@home_url().'/mobilepost/'.@$generalslis['id'].'">'.@$generalslis['post'].'</a></b></div>';
echo'<div style="clear:both;"></div>&nbsp;</div></div><div style="clear:both;"></div><br>';
$bdwmi++;
}
}
if (isset($_GET['dir']) && $_GET['dir']=='next' && isset($_GET['url']) && $_GET['url']>0) { } else { echo'<br><a href="'.@home_url().'/next/1">আরও জানতে ক্লিক করুন</a><br>'; }
}
else if(is_category()) {
$p=$_GET['p'];
$f=$p*15;
$s=$f-15;

$bdwmi=0;
$bwcat=@$_GET['url'];
$resultsliders = @mysql_query("SELECT * FROM frndzk_post WHERE category='$bwcat' ORDER by id desc LIMIT $f,15");
if ( @mysql_num_rows($resultsliders) > 0 ) {
while($generalslis = @mysql_fetch_array($resultsliders)) {
if($bdwmi<15) {
echo'<div style="position:relative;
width:100%;]
text-align:center:"><div style="margin:0 auto; position:relative; display:block; width:300px; border-width:1px; border-bottom:solid black;"><div style="border-width:5px; border-style:double; border-color:black; float:left; height:70px; width:70px;"><img height="70px" width="70px" src="'.get_image_bdwave_mobile($generalslis['postcontent']).'"/></div>';
}
echo'<div style="float:left; margin:0 15px; width:150px; position:relative; "><b><a style="text-decoration:none; color:black;" href="'.@home_url().'/mobilepost/'.@$generalslis['id'].'">'.@$generalslis['post'].'</a></b></div>';
echo'<div style="clear:both;"></div>&nbsp;</div></div><div style="clear:both;"></div><br>';
$bdwmi++;
}
}

if (isset($_GET['p']) && $_GET['p']==1) { echo'<br><a href="'.@home_url().'/'.xenon_link_category().$bwcat.'">Prev</a> &nbsp;&nbsp;&nbsp; <a href="'.@home_url().'/'.xenon_link_category().$bwcat.xenon_page_navi().($p+1).'">Next</a><br>'; }
else if (isset($_GET['p']) && $_GET['p']>1) { echo'<br><a href="'.@home_url().'/'.xenon_link_category().$bwcat.xenon_page_navi().($p-1).'">Prev</a> &nbsp;&nbsp;&nbsp; <a href="'.@home_url().'/'.xenon_link_category().$bwcat.xenon_page_navi().($p+1).'">Next</a><br>'; }
else {
echo'<br><a href="'.@home_url().'/'.xenon_link_category().$bwcat.xenon_page_navi().'1">Next</a><br>';
}

}
else if (isset($_GET['dir']) && $_GET['dir']=='mobilepost' && isset($_GET['url'])) {
$bdwmi=0;
$bwcat=@defence_sql_injection(@$_GET['url']);
$resultsliders = @mysql_query("SELECT * FROM frndzk_post WHERE id='$bwcat' ORDER by id desc");
if ( @mysql_num_rows($resultsliders) > 0 ) {
while($generalslis = @mysql_fetch_array($resultsliders)) {
echo'<div style="float:left;"><b>'.@$generalslis['post'].'</b></div><div style="clear:both;"></div><br>';
echo'<div style="">বিস্তারিত : <stront>'.@$generalslis['postcontent'].'</strong></div><br>';
echo'<br><br><br>';
$bdwmi++;
}
}
}
else if (isset($_GET['dir']) && $_GET['dir']=='next' && isset($_GET['url']) && $_GET['url']>0) {
$p=$_GET['url'];
$f=$p*15;
$s=$f-15;

$bdwmi=0;
$resultsliders = @mysql_query("SELECT * FROM frndzk_post WHERE tags LIKE'%headline%' ORDER by id desc LIMIT $f,15");
if ( @mysql_num_rows($resultsliders) > 0 ) {
while($generalslis = @mysql_fetch_array($resultsliders)) {
if($bdwmi<15) {
echo'<div style="position:relative;
width:100%;]
text-align:center:"><div style="margin:0 auto; position:relative; display:block; width:300px; border-width:1px; border-bottom:solid black;"><div style="border-width:5px; border-style:double; border-color:black; float:left; height:70px; width:70px;"><img height="70px" width="70px" src="'.get_image_bdwave_mobile($generalslis['postcontent']).'"/></div>';
}
echo'<div style="float:left; margin:0 15px; width:150px; position:relative; "><b><a style="text-decoration:none; color:black;" href="'.@home_url().'/mobilepost/'.@$generalslis['id'].'">'.@$generalslis['post'].'</a></b></div>';
echo'<div style="clear:both;"></div>&nbsp;</div></div><div style="clear:both;"></div><br>';
$bdwmi++;
}
}
if (isset($_GET['dir']) && $_GET['dir']=='next' && isset($_GET['url']) && $_GET['url']==1) { echo'<br><a href="'.@home_url().'">Prev</a> &nbsp;&nbsp;&nbsp; <a href="'.@home_url().'/next/'.($p+1).'">Next</a><br>'; }
else if (isset($_GET['dir']) && $_GET['dir']=='next' && isset($_GET['url']) && $_GET['url']>1) { echo'<br><a href="'.@home_url().'/next/'.($p-1).'">Prev</a> &nbsp;&nbsp;&nbsp; <a href="'.@home_url().'/next/'.($p+1).'">Next</a><br>'; }


}
echo'</p>
</div>
<div class="footer">
    <p>Powered By</p>
    <p><img src="'.home_url().'/xenon-addons/xenon-mobile-theme-pack/images/footer_com110.png" alt="logo" /></p>
    <p>Developed By <a href="http://www.bdwave24.com">Bengal IT Solution</a></p>
</div>';


echo"

	<script type='text/javascript' src='".home_url()."/xenon-addons/xenon-mobile-theme-pack/js/jquery.mCustomScrollbar.concat.min.js'></script>
	<script type='text/javascript' src='".home_url()."/xenon-addons/xenon-mobile-theme-pack/js/css3aw.js'></script>
	<script type='text/javascript'>
		$(window).load(function(){
			$(\"#css3aw-main-menu-container\").mCustomScrollbar({
				advanced:{
			        updateOnContentResize: true
			    },
			    scrollButtons:{
					enable:true
				},
				theme:\"light-thin\",
				autoHideScrollbar: true,
				scrollInertia: 450
			});
		});
	</script>
	";
echo'</body>
</html>';
exit;


















 
} else {
}
}

}
}
xmtpcf2341() ;
?>