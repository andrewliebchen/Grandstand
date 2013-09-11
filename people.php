<?php
require 'init.php';
require 'libs/Requests/library/Requests.php';

Requests::register_autoloader();
$headers = array('Accept' => 'application/json');
$options = array('auth' => array( $config['sprintly']['api_username'], $config['sprintly']['api_key']));
$request = Requests::get('https://sprint.ly/api/products/'.$config['sprintly']['product_id'].'/people.json', $headers, $options);

echo $request->body;
