<?php
global $ccpcatnamebar,$ccpcatname,$cpcatname_i,$g,$gi;
$ccpcatname=array();
$cpcatname_i=0;
$ccpcatnamebar='';
$g=0;
$gi=0;


xenon_add_widget_item('custom_category_post_addon');



function dofjiofjo() {
function frndzk_breadc() {
$s=$_SERVER['PHP_SELF'];
$e=explode('/',$s);
return $e[count($e) -1];
}


if (frndzk_breadc()=='addon.php' && isset($_GET['action']) && isset($_GET['registername']) && $_GET['action']=="activate" && $_GET['registername']=="custom-category-post-addon") {
$result = @mysql_query("SELECT * FROM ccp_xenon");
if ( @mysql_num_rows($result) < 1 ) {
$query="CREATE TABLE ccp_xenon (id int(20) NOT NULL auto_increment,name text(1000) NOT NULL,location text(1000) NOT NULL,cat text(1000) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
@mysql_query($query);
}
}


if(frndzk_breadc()=='widgets.php' && isset($_GET['action']) && $_GET['action']=='add' && isset($_GET['widget']) && $_GET['widget']=='item' &&  isset($_POST['widgetcontent']) && $_POST['widgetcontent'] == 'xenon_249_c_widget_custom_category_post_addon') {
$tn=current_theme_name();
$wn=defence_sql_injection($_POST['id']);
$query="INSERT INTO ccp_xenon VALUES ('','$tn','$wn','')";
@mysql_query($query);
}
}
dofjiofjo();


function custom_category_post_addon() {
global $ccpcatnamebar,$ccpcatname,$cpcatname_i,$g,$gi;
$cats=sidebar();
$g=0;
if( $cats != $ccpcatnamebar) {
$gi=0;
$cpcatname_i=0;
$ccpcatnamebar=$cats;
for($i=0; $i<1000; $i++) {
$ccpcatname[$i]='';
}
}
$results = @mysql_query("SELECT * FROM ccp_xenon WHERE location='$cats'");
if ( @mysql_num_rows($results) > 0 ) {
$gi=$gi+@mysql_num_rows($results);
while($pagess = @mysql_fetch_array($results))
{
$cat=$pagess['cat'];
if ($ccpcatname[$g]!=$cats.'_'.$g.'_'.$cat) {
$result = @mysql_query("SELECT * FROM frndzk_post WHERE category='$cat' ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result) > 0 ) {
while($pages = @mysql_fetch_array($result)) {
echo '<li><a href="'.@home_url().'/'.xenon_link_post().@$pages['shortname'].'">'.@$pages['post'].'</a></li>';
}
}
$ccpcatname[$cpcatname_i]=$cats.'_'.$cpcatname_i.'_'.$cat;
$cpcatname_i++;
break;
}
$g++;
}
}
}
function ccp_home() {  
    option_menu('ccp_home.php', 'ccp_home', 'addonpage','1','Category Post');  
}
xenon_core('xenon_add_menu', 'ccp_home');
?>