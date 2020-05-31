<?php

require "helpers.php";

spl_autoload_register(function($classname){
        if(file_exists("src/$classname.php")){
            require "src/$classname.php";
        }
});

$jose = new Terrorist('Jose', new Basic_Vest);
$david = new C_Terrorist('David',new Basic_Vest);

$jose->Attack($david);
$david->Attack($jose);
$david->Attack($jose);
$david->Attack($jose);
$jose->Attack($david);