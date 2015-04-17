<?php

require_once '../core/functions/sanitize.php';

class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    // We pass an array of fields to query in the $_POST superglobal...
    public function getPost($values = [])
    {
        $output = array();
        foreach ($values as $value) {
            if (isset($_POST[$value]) && !empty($_POST[$value])) {
                $output[$value] = strtolower(escape($_POST[$value]));
            } else {
                die('Missing value for ' . $value . '!');
            }
        }
        return $output;
    }
}