<?php
xenon_add_widget_item('xenon_calender_addon');
function xenon_calender_addon() {
echo '<script type="text/javascript">

var todaydate=new Date()
var curmonth=todaydate.getMonth()+1 //get current month (1-12)
var curyear=todaydate.getFullYear() //get current year

document.write(buildCal(curmonth ,curyear, "main", "month", "daysofweek", "days", 1));
</script>';
}
function calender_head() {
return'
<style type="text/css">

.main {
width:200px;
border:1px solid black;
}

.month {
background-color:black;
font:bold 12px verdana;
color:white;
}

.daysofweek {
background-color:gray;
font:bold 12px verdana;
color:white;
}

.days {
font-size: 12px;
font-family:verdana;
color:black;
background-color: lightyellow;
padding: 2px;
}

.days #today{
font-weight: bold;
color: red;
}

</style>


<script type="text/javascript" src="'.home_url().'/xenon-addons/xenon-calender/basiccalendar.js">
</script> ';
}
xenon_core("xenon_header", "calender_head");
?>