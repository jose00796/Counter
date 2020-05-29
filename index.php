<?php

spl_autoload_register(function($classname){
        if(file_exists("src/$classname.php")){
            require "src/$classname.php";
        }
});


$unidad = new Player();