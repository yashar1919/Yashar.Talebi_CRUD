<?php

namespace CRUD\Helper;

class PersonHelper
{

    private const USERNAME = "root";
    private const PASSWORD = "";
    private const SERVERNAME = "127.0.0.1";
    private const DATABASENAME = "web_crud";

    public function insert($person)
    {
        $connection = new DBConnector(USERNAME,PASSWORD,SERVERNAME,DATABASENAME);
        $connection->connect();
        $firstname = $person->getFirstName();
        $lastname = $person->getLastName();
        $username = $person->getUsername();
        $sql = "INSERT INTO person (firstname, lastname, username) VALUES ('$firstname', '$lastname', '$username')";
        
        if($connection->execQuery($sql)){
            echo "create succesfuly";
        }else{
            echo "create failed!";
        }
    }

    public function fetch(int $id)
    {
        $connection = new DBConnector(USERNAME,PASSWORD,SERVERNAME,DATABASENAME);
        $connection->connect();
        $sql = "SELECT * FROM person WHERE id=$id ";

        if($connection->execQuery($sql)){
            echo "fetch succesfuly";
        }else{
            echo "fetch failed!";
        }
    }

    public function fetchAll()
    {

    }

    public function update($person)
    {

    }

    public function delete($username)
    {
        $connection = new DBConnector(USERNAME,PASSWORD,SERVERNAME,DATABASENAME);
        $connection->connect();
        $sql = "DELETE FROM person WHERE username='$username' ";

        if($connection->execQuery($sql)){
            echo "delete succesfuly";
        }else{
            echo "delete failed!";
        }
    }

}