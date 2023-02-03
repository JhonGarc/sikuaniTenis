<?php


class Database{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->db = 'proyectotenis';
        $this->user = 'postgres';
        $this->password = '1234';
        $this->charset = 'utf8mb4';
    }

    public function getHost()
    {
        return $this->host;
    }

    function connect(){
        // try {
        //     $dbconn = pg_connect("host=$this->host dbname=$this->db user=$this->user password=$this->password");
        //     echo "hi";
        //     pg_close($dbconn);
        // } catch (\Exception $e) {
        //     echo "Error: " . $e->getMessage();
        // }

        try{
            $connection = "pgsql:host=" . $this->host . ";dbname=" . $this->db;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }

}

?>