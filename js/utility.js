// Sets the welcome message in the site banner
function setWelcomeMessage() {
    function reqListener () {
        console.log(this.responseText);
      }
  
      // message is retrieved from server file by welcomeMessage.php
      // and accessed by this file through an HTTP request
      var oReq = new XMLHttpRequest();
      oReq.onload = function() {
          // set the welcome message text to response from welcomeMessage.php
          $("#welcome-message").text(this.responseText);
      };
      // call welcomeMessage.php to select a welcome message from server file
      oReq.open("get", "welcome_message.php", true);
      oReq.send();
}
// Animates the welcome message with a 1 second fly-in
function animateWelcomeMessage() {
    $("#welcome-message").animate({
    "left": 0
    },1000);
}

$( document ).ready(function() {
    setWelcomeMessage();            // set the welcome message
    animateWelcomeMessage();        // then animate it into view
});