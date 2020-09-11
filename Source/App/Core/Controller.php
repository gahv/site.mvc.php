<?php

namespace Source\App\Core;
use League\Plates\Engine;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new Engine(
            __DIR__ . str_replace('/', DIRECTORY_SEPARATOR, "/../../../Themes"), "php"
        );
    }
}