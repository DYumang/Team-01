<?php
    function debug($data,$exit_flag=FALSE){
        echo "<pre>";
        print_r($data);
        if($exit_flag){
            exit;
        }
    }