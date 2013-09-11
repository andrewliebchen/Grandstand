<?php

//pull in local config.php, but fail silently in deployed,
//open-source environments such as Heroku
@include 'config.php';

//fall back to environment variables for $config['sprintly']
if (!isset($config))
{
  $config = array();
  $config['sprintly'] = $_ENV;
}