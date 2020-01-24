$(document).ready(function(){
  checkURL(); //check if the URL has a reference to a page and load it
  $('ul li a').click(function (e){    //traverse through all navigation links..
          checkURL(this.hash);    //.. and assign them a new onclick event, using their own hash(#) as a parameter
  });
  setInterval("checkURL()",250);  //check for a change in the URL every 250 ms to detect if the history buttons have been used
});

var lasturl=""; //store the current URL hash

function checkURL(hash){
  if(!hash) hash=window.location.hash;    //if no parameter is provided, use the hash value from the current address
  if(hash != lasturl){ // if the hash value has changed
    lasturl=hash;   //update the current hash
    loadPage(hash); // and load the new page
  }
}

function loadPage(url){  //load pages via AJAX
  url=url.replace('#','');    //strip the hash and leave only the page name
  //$('#loading').css('visibility','visible');
  $.ajax({    //create an ajax request to load_page.php
      type: "POST",
      url: "load_page.php",
      data: 'page='+url,  //page name as a parameter
      dataType: "html",   //expect html to be returned
      success: function(msg){
          if(parseInt(msg)!=0){    //if no errors
            $('#contents').html(msg);    //load the returned html into container div
            //$('#loading').css('visibility','hidden');
          }
      }
  });
}

//highlight active link
$(document).ready(function(){
    if (location.hash) {
        $("a[href='" + location.hash + "']").tab("show");
    }
    $(document.body).on("click", "a[data-toggle='tab']", function(event) {
        location.hash = this.getAttribute("href");
    });
});
$(window).on("popstate", function(){
    var anchor = location.hash || $("a[data-toggle='tab']").first().attr("href");
    $("a[href='" + anchor + "']").tab("show");
});
