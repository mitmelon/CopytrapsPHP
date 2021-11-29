<?php
namespace CopytrapsPHP;

class Copytraps implements \Interface\Architect{
    private $endpoints = [

    ];

    public function __construct($public, $private){
        if(empty($public) || empty($private)){
            throw new Exception('Public and Private Key must be provided to use Copytraps API');
        }
        $this->public = $public;
        $this->private = $private;
    }

    public function authenticate(){
        //Waiting for implementation
    }

    public function createDating(array $payload, String $session){
        //Waiting for implementation

    }
    public function editDating(array $payload, String $session){
        //Waiting for implementation
    }
}