<?php
    function getParam($key){
        if(isset($_POST[$key])){
            return $_POST[$key];
        }
        elseif (isset($_GET[$key])) {
            return $_GET[$key];
        }
        elseif (isset($_REQUEST[$key])) {
            return $_REQUEST[$key];
        }
        else{
            return "key is not valid";
        }
    }
    // function postFrom($group,$name){
    //     return isset($_POST[$group][$name]) ? $_POST[$group][$name] : "null";
    // }
    // function getFrom($group,$name){
    //     return isset($_GET[$group][$name]) ? $_GET[$group][$name] : "null";
    // }
    // function requestFrom($group,$name){
    //     return isset($_REQUEST[$group][$name]) ? $_REQUEST[$group][$name] : "null";
    // }
?>