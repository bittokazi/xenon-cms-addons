function get_user_online() {
var xmlhttp;
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
	if(xmlhttp.responseText=="no") {
	//document.getElementById('fur-search').style.display = 'block';
		document.getElementById("archive").innerHTML="Nothing found<br>";
		if(po==1) { f=f-n; }
	}
	else {
		var uo=xmlhttp.responseText;
		var uo1=uo.split("+--+");
		document.getElementById("user-online-ip").innerHTML=uo1[0];
		document.getElementById("user-online-agent").innerHTML=uo1[1];
		document.getElementById("user-online-total-user").innerHTML=uo1[2];
		document.getElementById("user-online-online-user").innerHTML=uo1[3];
	}
    }
   }
xmlhttp.open("GET",xenon_home+"/useronlinexenonaddon",true);
xmlhttp.send();
}