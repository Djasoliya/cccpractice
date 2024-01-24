<?php
    function postFrom($group,$name){
        return isset($_POST[$group][$name]) ? $_POST[$group][$name] : "null";
    }
    function getFrom($group,$name){
        return isset($_GET[$group][$name]) ? $_GET[$group][$name] : "null";
    }
    function requestFrom($group,$name){
        return isset($_REQUEST[$group][$name]) ? $_REQUEST[$group][$name] : "null";
    }
?>