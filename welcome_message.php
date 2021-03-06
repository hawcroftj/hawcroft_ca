<?php
/*
* This file retrieves and echoes a welcome message from a json file
* so it can be used by the JavaScript setWelcomeMessage function
*/
    // Grabs a welcome message at random from welcome_messages.json
    // and prepares it for use with JavaScript
    function welcomeMessage() {
        $fileContents = file_get_contents("res/welcome_messages.json");
        $messagesJSON = json_decode($fileContents, true);
        // isolate all messages in an array for processing
        $messages = $messagesJSON["messages"];

        // echo a random welcome message so it can be grabbed by JavaScript
        echo $messages[array_rand($messages)];
    }

    // call welcome message function
    welcomeMessage();
?>