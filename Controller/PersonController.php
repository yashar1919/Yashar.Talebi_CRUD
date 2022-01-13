<?php

namespace CRUD\Controller;

use CRUD\Model\Actions;

use CRUD\Helper\DBConnector;

class PersonController
{
    public function switcher($uri,$request)
    {
        switch ($uri)
        {
            case Actions::CREATE:
                $this->createAction($request);
                break;
            case Actions::UPDATE:
                $this->updateAction($request);
                break;
            case Actions::READ:
                $this->readAction($request);
                break;
            case Actions::READ_ALL:
                $this->readAllAction($request);  
                break;
            case Actions::DELETE:
                $this->deleteAction($request);
                break;
            default:
                break;
        }

    }

    public function createAction($request)
    {
        $helper = new PersonHelper();
        $person = new Person();
        $person->setFirstName($request["firstName"]);
        $person->setLastName($request["lastName"]);
        $person->setUsername($request["username"]);
        $helper->insert($person);
    }

    public function updateAction($request)
    {
        $helper = new PersonHelper();

    }

    public function readAction($request)
    {
        $helper = new PersonHelper();
        $id = $request["id"];
        $helper->fetch($id);
    }

    public function readAllAction($request)
    {
        $helper = new PersonHelper();

    }

    public function deleteAction($request)
    {
        $helper = new PersonHelper();
        $usernameDelete = $request["username"];
        $helper->delete($usernameDelete);
    }

}