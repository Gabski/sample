<?php
namespace App\Services;

use App\Entity\Basket;
use App\Entity\Category;
use App\Interfaces\ResponseInterface;
use Twig_Environment;
use Twig_Loader_Filesystem;
use Dev;

class ResponseTwig implements ResponseInterface
{
    public $twig;

    public function __construct($tpl, $args = [])
    {
        $loader = new Twig_Loader_Filesystem('app/templates');
        $this->twig = new Twig_Environment($loader);
        $this->tpl = $tpl;
        $this->args = $args;
    }

    public function render()
    {
        echo $this->twig->render($this->tpl, $this->args);
    }
}