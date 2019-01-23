<?php

require_once __DIR__.'/app/autoload.php';

use Parinz\User;


$user = new User();
$profile = $user->getProfile();

print_r($profile);