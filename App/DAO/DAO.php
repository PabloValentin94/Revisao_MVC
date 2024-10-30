<?php

    namespace App\DAO;

    use \PDO;

    abstract class DAO extends PDO
    {

        protected $connection = null;

        public function __construct()
        {

            $host = $_ENV["database"]["host"];

            $database = $_ENV["database"]["db_name"];

            $charset = "utf8mb4";

            $dsn = "mysql:host=$host;dbname=$database;charset=$charset";

            $this->connection = new PDO($dsn, $_ENV["database"]["user"], $_ENV["database"]["password"]);
            
        }

    }

?>
