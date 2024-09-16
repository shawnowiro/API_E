<?php
    require_once "load.php";
    $ObjLayouts->heading();
    $ObjMenus->main_menu();
    $ObjContents->Signup_content($conn);
    $ObjLayouts->footer();