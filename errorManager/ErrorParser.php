<?php

class ErrorParser
{
    private $error;
    public function __construct($e)
    {
        header('Content-Type: text/html; charset=utf-8');
        $this->error = $e;
        require_once(dirname(__FILE__).'/ErrorTemplate.php');
    }
}