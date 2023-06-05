
   //Display Only Date till today //
var dtToday = new Date();
var month = dtToday.getMonth() + 4;     // getMonth() is zero-based
var day = dtToday.getDate();
var year = dtToday.getFullYear();
if(month < 10)
   month = '0' + month.toString();
if(day < 10)
   day = '0' + day.toString();

var minDate = year + '-' + month + '-' + day;
$('#dateID').attr('min', minDate);