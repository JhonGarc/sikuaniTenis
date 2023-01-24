<?php

class Database{
    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->db = 'proyectotenis';
        $this->user = 'postgres';
        $this->password = '1234';
    }

    public function getHost()
    {
        return $this->host;
    }

    function connect(){
        try {
            $dbconn = pg_connect("host=$this->host dbname=$this->db user=$this->user password=$this->password");
            echo "hi";
            pg_close($dbconn);
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }

    }
}
?>