<?php

namespace CRUD\Helper;

class DBConnector
{

    /** @var mixed $db */
    private $db;
    private $servername;
    private $username;
    private $password;
    private $databasename;

    public function __construct($servername)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->databasename = $databasename;
    }

    /**
     * @throws \Exception
     * @return void
     */
    public function connect() : void
    {
        // Create connection
        $this->db = mysqli_connect($this->servername, $this->username, $this->password, $this->databasename);

        // Check connection
        if (!$this->db) {
        die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
    }

    /**
     * @param string $query
     * @return bool |mysqli_result
     */
    public function execQuery(string $query)
    {
        return mysqli_query($this->db, $query);
    }

    /**
     * @param string $message
     * @throws \Exception
     * @return void
     */
    private function exceptionHandler(string $message): void
    {

    }
}