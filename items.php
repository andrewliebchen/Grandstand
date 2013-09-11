<?php
require 'init.php';
require 'libs/Requests/library/Requests.php';

Requests::register_autoloader();
$headers = array('Accept' => 'application/json');
$options = array('auth' => array( $config['sprintly']['api_username'], $config['sprintly']['api_key']));
$data = array('limit'=>100, 'status'=>$_GET['type']);
$request = Requests::request('https://sprint.ly/api/products/'.$config['sprintly']['product_id'].'/items.json', $headers, $data, Requests::GET, $options);

$body = json_decode($request->body, 1);
$body = json_encode(array_reverse($body));
echo $body;
