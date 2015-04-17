<?php

class Home extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = $this->model('User');
    }

    public function index($name = '')
    {
        $user = $this->user;
        $user->name = $name;
        $this->view('home/index', ['name' => $user->name]);
    }

    public function create()
    {
        $this->view('home/create', ['dummy' => 'dummy']);
        $post = $this->getPost(['username', 'email']);
        $this->user->create(['username' => $post['username'],
                             'email' => $post['email']]);
    }
}