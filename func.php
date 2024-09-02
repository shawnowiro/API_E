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
    public function hash_pass($pass){
        return md5($pass);
    }

}

$obj = new func();
print "Hi my name is" .  $obj->computer_user("Alex");
print $obj->hash_pass('123')

?>