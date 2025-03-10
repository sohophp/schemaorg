<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

spl_autoload_register(function($className){
    $className = ltrim($className,'\\');
    if (class_exists($className, false) || !str_starts_with($className, 'Sohophp\\SchemaOrg\\')) {
        return false;
    }

    $ns = [
      "Sohophp\\SchemaOrg\\"=>"src\\",
      "Sohophp\\SchemaOrg\\Tests\\"=>"tests\\",
      "Sohophp\\SchemaOrg\\Examples\\"=>"examples\\"
    ];
    foreach($ns as $n=>$s){
        $filePath = __DIR__.DIRECTORY_SEPARATOR.str_replace($n,$s,$className).'.php';
        if(file_exists($filePath) && is_readable($filePath)){
            require($filePath);
            return true;
        }
    }
    return false;
});

require __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';
