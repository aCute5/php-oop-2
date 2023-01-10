<?php

abstract class User
{
    protected $name;
    protected $surname;
    protected $email;

    function __construct($_name, $_surname, $_email)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }
}

?>