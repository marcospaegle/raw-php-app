<?php

class HomeController
{
    public function __invoke(string $name = 'guest'): void
    {
        require rootpath() . '/views/home.view.php';
    }
}
