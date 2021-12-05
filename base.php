<?php
    function openConnect(){
        $dbHost="localhost";
        $dbUser = "root";
        $dbPass = "password";
        $db = "pokemony";

        $conne = new mysqli($dbHost, $dbUser, $dbPass, $db) or die ("Connect failed: %s\n". $conne -> error);
        return $conne;
    }
    function closeConnect($conne){
        $conne -> close();
    }
    ?>