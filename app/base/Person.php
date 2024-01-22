<?php

namespace Ngodat\Demo\base;
abstract class Person
{
    public $id;
    public $name;
    public $address;
    public $phone;

    abstract function profile();
    abstract function login();
    abstract function logout();

}