<?php
namespace App\Services;

class Request
{

    protected $request;

    public function __construct($args)
    {
        $this->request = array_merge($_REQUEST, $args);
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getVar($name, $def = "")
    {
        return $this->request[$name] ?? $def;
    }

    public function getInt($name, $def = 0)
    {
        return (int) $this->request[$name] ?? $def;
    }

    public function dump()
    {
        var_dump($this->request);
    }
}