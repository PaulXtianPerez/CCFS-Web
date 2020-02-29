<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    .greenBg {
background: green;
}

.yellowBg {
background: yellow;
}

.redBg {
background: red;
}
    </style>
  </head>
  <body>
    <input type="text" id="date1" />
    <input type="text" id="date2" />
    <input type="text" id="status" />
    <input type="button" id="click" value="check" onclick="compare()">
  </body>
</html>

<script type="text/javascript">
function compare() {

  var firstDate = moment($("#date1").val(), "MM-DD-YYYY");
  var secondDate = moment($("#date2").val(), "MM-DD-YYYY");

  console.log(firstDate.inspect(), secondDate.inspect());

  if (firstDate.isValid() && secondDate.isValid()) {
    // you need a validation before using diff function of momentjs
    var diff = firstDate.diff(secondDate, 'days');
    console.log(diff);
    // you also need to remove all classes before adding new class
    $("#status").removeClass("redBg").removeClass("greenBg").removeClass("yellowBg");
    if (diff > 7) {
      $("#status").addClass('redBg');
    } else if (diff > 4) {
      $("#status").addClass('greenBg');
    } else {
      $("#status").addClass('yellowBg');
    }
  } else {
    $("#status").addClass('yellowBg');
  }
}
</script>

<script src="../Resources/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="moment.js"></script>
<script src="moment.min.js"></script>
