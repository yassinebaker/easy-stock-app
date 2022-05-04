<?php

class Database 
{
    private $user = "root";
    private $host = "localhost";
    private $database = "info";

    private $connection;

    public function __construct(){
         try {
              $this->connection =new PDO("mysql:host=$this->host;dbname=$this->database",$this->user,null);
              $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $exception) {
              echo $exception->getMessage();
          }
          return $this->connection;
    }
    public function getmyDB()
        {
        if ($this->connection instanceof PDO)
            {
            return $this->connection;
            }
        }
}
