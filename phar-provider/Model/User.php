<?php

class User
{
    private $username;

    private $name;

    public function __construct($username, $name)
    {
        $this->username = $username;
        $this->name = $name;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}