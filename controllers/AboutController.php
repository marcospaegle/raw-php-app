<?php

class AboutController
{
    public function __invoke(): void
    {
        require rootpath() . '/views/about.view.php';
    }
}
