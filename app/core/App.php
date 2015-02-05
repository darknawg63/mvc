<?php

class App
{

    protected $controller = 'home';

    protected $method = 'index';

    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
    }

    private function parseUrl()
    {
        if(isset($_GET['url'])) 
        {
            // We sanitize the url by stripping off any trailing slashes
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}