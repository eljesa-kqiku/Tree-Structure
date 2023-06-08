<?php

class Database{
    private String $db_host = 'tree_db';
    private String $db_name = 'tree_structure';
    private String $db_username = 'tree';
    private String $port = "3306";
    private String $db_password = 'tree';
    private PDO $connection;
    private static ?Database $instance = null;

    /**
     * creates a connection to database
     */
    private function __construct(){
        try{
            $this->connection = new PDO('mysql:host='. $this->db_host.'; port='.$this->port.'; dbname='.$this->db_name,$this->db_username,$this->db_password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage();
            exit;
        }
    }

    /**
     * @return Database returns the instance of the class
     */
    public static function getInstance(): Database{
        if(!self::$instance)
            self::$instance = new Database();
        return self::$instance;
    }
    /**
     * @return PDO the connection to database
     */
    public function getConnection(): PDO
    {
        return $this->connection;
    }
    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
}