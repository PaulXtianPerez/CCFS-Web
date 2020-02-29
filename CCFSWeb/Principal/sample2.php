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
//var monthNames = [ "January", "February", "March", "April", "May", "June",
//        "July", "August", "September", "October", "November", "December" ];
var monthNames = [ "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12" ];

function diff(from, to) {
    var arr = [];
    var datFrom = new Date('1 ' + from);
    var datTo = new Date('1 ' + to);
    var fromYear =  datFrom.getFullYear();
    var toYear =  datTo.getFullYear();
    var diffYear = (12 * (toYear - fromYear)) + datTo.getMonth();

    for ($i = datFrom.getMonth(); $i <= diffYear; $i++) {
        //arr.push(monthNames[i%12] + " " + Math.floor(fromYear+(i/12)));
        arr.push(monthNames[$i%12]);
    }

    return arr;
}

console.log(diff('September 2013', 'March 2014'));

document.getElementById("result").innerHTML = diff('September 2013', 'September 2014').join("<br />");
</script>

<script src="../Resources/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="moment.js"></script>
<script src="moment.min.js"></script>
