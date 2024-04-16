<?php

Class BDD extends PDO {
    private $password = "04082023";
    private $username = "bafode";
    protected $BDD;

    public function __construct() {
        $this->BDD = new PDO("mysql:host=localhost;dbname=meetic", $this->username, $this->password);
    }
}