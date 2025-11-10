<?php
    $env = file_get_contents(__DIR__."/.env");
    $lines = explode("\n",$env);

    foreach($lines as $line){
    preg_match("/([^#]+)\=(.*)/",trim($line),$matches);
        if(isset($matches[2])){ 
            $key = trim($matches[1]);
            $value = trim($matches[2]);
            // echo "Key: ".$key." ";
            // echo "value: ".$value."\n";

            putenv("$key=$value");
        }
    } 

?>