<?php

$_POST['name'] = 'mary';
$_POST['email'] = 'mary@phpacademy.org';


function getPost($values = [])
{
    $output = array();
    foreach ($values as $value) {
        if (isset($_POST[$value]) && !empty($_POST[$value])) {
            $output[$value] = $_POST[$value];
        }
    }
    return $output;
}

$post_data = getPost(['name', 'email']);

echo count($post_data);

