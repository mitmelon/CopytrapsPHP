<?php
namespace CopytrapsPHP\Design;

interface Architect {
    public function authenticate():string;
    public function createDating(array $payload, String $session):json;
    public function editDating(array $payload, String $session): json;
}