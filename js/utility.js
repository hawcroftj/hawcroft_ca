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

// when the page is ready, set the welcome message
$( document ).ready(function() {
    setWelcomeMessage();
});