<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Output:</p>
    <div id="result"></div>
  </body>
</html>

<script type="text/javascript">
function dateRange(startDate, endDate) {
  var start      = startDate.split('-');
  var end        = endDate.split('-');
  var startYear  = parseInt(start[0]);
  var endYear    = parseInt(end[0]);
  var dates      = [];

  for(var i = startYear; i <= endYear; i++) {
    var endMonth = i != endYear ? 11 : parseInt(end[1]) - 1;
    var startMon = i === startYear ? parseInt(start[1])-1 : 0;
    for(var j = startMon; j <= endMonth; j = j > 12 ? j % 12 || 11 : j+1) {
      var month = j+1;
      var displayMonth = month < 10 ? '0'+month : month;
      //dates.push([i, displayMonth, '01'].join('-'));
      dates.push([displayMonth]);
    }
  }
  return dates;
}

document.getElementById("result").innerHTML = dateRange('2012-04-01', '2013-04-01').join("<br />");
</script>

<script src="../Resources/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="moment.js"></script>
<script src="moment.min.js"></script>
