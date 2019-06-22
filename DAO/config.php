<?php
spl_autoload_register(
    function($class)
    {
        $file = "class".DIRECTORY_SEPARATOR.$class.".php";
        if (file_exists($file)) {
            include_once($file);
        }
    }

);
