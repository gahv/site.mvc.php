<?php

namespace Source\App\Controllers;
use Source\Core\Controller;

class Web extends Controller
{
    public function __construct($router)
    {   
        parent::__construct($router);
    }

    public function home($parans) : void
    {
        $data = [
            "title" => "Home"
        ];

        echo $this->view->render("Web/home", $data);
    }

    public function about($parans) : void
    {
        $data = [
            "title" => "Sobre"
        ];

        echo $this->view->render("Web/about", $data);
    }

    public function contact($parans) : void
    {
        $data = [
            "title" => "Contato"
        ];

        echo $this->view->render("Web/contact", $data);
    }

    public function error($parans) : void
    {
        echo "Erro: {$parans["errcode"]}";
    }
}