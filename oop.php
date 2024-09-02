<?php
class func{
    public $fname;
    public $yob;
    public function computer_user($fname){
        return $fname;
    }
    public function user_age($yob){
        $age = date('Y') -$yob;
        return  $age;
    }

}

$obj = new func();
print $obj->computer_user("Alex")


?>