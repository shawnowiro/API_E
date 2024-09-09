<?php
// class Auto Load
function ClassAutoLoad($className)
{
    $files = ["structure"];
    foreach ($files as $file) {
        $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $file . DIRECTORY_SEPARATOR . $className . '.php';
    if(is_readable($FileName) and is_readable($FileName)){
        require $FileName;


    }else{
        print("not reading");
    }
    }
}
spl_autoload_register('ClassAutoLoad');

$ObjLayouts = new layouts();
$ObjMenus = new menus();
$ObjContents = new contents();