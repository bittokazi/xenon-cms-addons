<?php
xenon_add_widget_item('more_category_post_addon');
function more_category_post_addon() {
if(is_post()) {
$url=$_GET['url'];
$result = @mysql_query("SELECT * FROM frndzk_post WHERE shortname='$url'");
if ( @mysql_num_rows($result) > 0 ) {
while($pages = @mysql_fetch_array($result)) {
$cat=@$pages['category'];
}
}
$result = @mysql_query("SELECT * FROM frndzk_post WHERE category='$cat' ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result) > 0 ) {
while($pages = @mysql_fetch_array($result)) {
echo '<li><a href="'.@home_url().'/'.xenon_link_post().@$pages['shortname'].'">'.@$pages['post'].'</a></li>';
}
}
}
else if(is_category()) {
$cat=$_GET['url'];
$result = @mysql_query("SELECT * FROM frndzk_post WHERE category='$cat' ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result) > 0 ) {
while($pages = @mysql_fetch_array($result)) {
echo '<li><a href="'.@home_url().'/'.xenon_link_post().@$pages['shortname'].'">'.@$pages['post'].'</a></li>';
}
}
}
}
?>