//Function to open new page in contents div.
function openPage(theUrl) {
  $(document).ready( function() {
    $("#contents").load(theUrl);
  });
  //return;
}

/*
$(document).ready( function() {
    $("#crAcc").on("click", function() {
        $("#contents").load("CreateAccount.php");
    });
});
*/
