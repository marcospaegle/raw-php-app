<?php

if (! function_exists('abort')) {
    function abort(int $code): void {
        http_response_code($code);
        require "views/{$code}.view.php";
    
        die();
    }    
}

if (! function_exists('rootpath')) {
    function rootpath(): string {
        return $_SERVER['DOCUMENT_ROOT'];
    }
}
