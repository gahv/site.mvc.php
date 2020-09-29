<?php

namespace Source\Core;
use League\Plates\Engine;

class Controller
{
    protected $view;
    protected $router;

    public function __construct($router, $dir = null, $globals = [])
    {
        $dir = $dir ?? dirname( __DIR__ , 2) . "/Themes/";
        $this->view = new Engine($dir, "php");

        $this->router = $router;

        $this->view->addData(["router" => $this->router]);

        if ($globals) {
            $this->view->addData($globals);
        }
    }
}