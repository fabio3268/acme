<?php

namespace Source\App;

class Web
{
    public function home(): void
    {
        //echo "Home";
        include __DIR__ . "/../../themes/web/home.php";
    }

    public function about(): void
    {
        //echo "Sobre";
        include __DIR__ . "/../../themes/web/about.php";
    }

    public function error() : void
    {
        include __DIR__ . "/../../themes/web/404.php";
    }
}