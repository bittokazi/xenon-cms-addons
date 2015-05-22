<?php
$filter_url=home_url();
$filter_url=str_replace("http://","",$filter_url);
$filter_url=str_replace($_SERVER['HTTP_HOST']."/","",$filter_url);
$filter_url=str_replace($_SERVER['HTTP_HOST'],"",$filter_url);
$filter_url="www.".$filter_url;
$filter_url=str_replace($_SERVER['HTTP_HOST']."/","",$filter_url);
$filter_url=str_replace($_SERVER['HTTP_HOST'],"",$filter_url);
$filter_url=str_replace("www.","",$filter_url);
$filter_url=$_SERVER['HTTP_HOST']."/".$filter_url;
echo '
<h2>Search Post</h2>


Search Term: <input type="text" onkeypress="getStart()" id="sqt">&nbsp; - &nbsp;
Search by : <select id="type" onchange="getStart()">
<option value="01">title</option>
<option value="02">tag</option>
</select>

<div style="clear:both;"><br></div>

<div id="archive"></div>


<div style="clear:both;"><br></div>
		     &nbsp; <button onclick="getPrevs()">Back</button> &nbsp; | &nbsp; <button onclick="getNexts()">Next</button>
			<br>

<script>
var f=0,n=50,po=0;



function getResult(page) {
document.body.scrollTop = document.documentElement.scrollTop = 0;
var xmlhttp;
var jobValue = document.getElementById("sqt").value;
var jobValuetype = document.getElementById("type").value;
document.getElementById("archive").innerHTML="Loading...<br><img src=\"'.home_url().'/xenon-addons/search-post/loading.gif\" alt=\"Loading image...\"/>";
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var gt=xmlhttp.responseText;
	var gt1=gt.split("+--+");
	if(gt1[0]=="") {
		document.getElementById("archive").innerHTML="Nothing found<br>";
		if(po==1) { f=f-n; }
	}
	else {
		document.getElementById("archive").innerHTML=gt1[0];
	}
    }
   }
xmlhttp.open("GET","http://'.$filter_url.'/searchxenonpost/"+jobValue +"?f="+page+"&type="+jobValuetype,true);
xmlhttp.send();
}
function getNexts() {
po=1;
f=f+n;
getResult(f);
}
function getPrevs() {
if(f==0) {

}
else{
f=f-n;
getResult(f);
}
}
function getStart() {
po=0;
f=0;
getResult(f);
}
</script>
';
?>