<?php
class dbConnection{
    private $connection;
    private $db_type;
    private $db_host;
    private $db_port;
    private $db_user;
    private $db_pass;
    private $db_name;

    public function __construct($db_type, $db_host, $db_port, $db_user, $db_pass, $db_name){
        $this->db_type = $db_type;
        $this->db_host = $db_host;
        $this->db_port = $db_port;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
        $this->connection = $this->connect();
    }

    private function connect(){
        switch($this->db_type){
            case 'MySQLi':
                if($this->db_port != null){
                    $this->db_host = $this->db_host . ":" . $this->db_port;
                }
                $connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
                if($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }else{
                    return $connection;
                }
                break;
            case 'PDO':
                if($this->db_port != null){
                    $this->db_host = $this->db_host . ":" . $this->db_port;
                }
                try {
                    $connection = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
                    // set the PDO error mode to exception
                    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $connection;
                } catch(PDOException $e) {
                    die("Connection failed: " . $e->getMessage());
                }
                break;
        }
    }
}