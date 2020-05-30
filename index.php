<?php

require "src/helpers.php";
spl_autoload_register(function($classname){
        if(file_exists("src/$classname.php")){
            require "src/$classname.php";
        }
});


$jose = new Terrorist('Jose');
$david = new C_Terrorist('David');

$jose->Attack($david);
$david->Attack($jose);
$jose->Attack($david);