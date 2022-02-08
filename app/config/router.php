<?php

$router = $di->getRouter();

// Define your routes here

$router->add('/product/details/{id}', ['controller' => 'products', 'action' => 'details'])->setName('product/details');

$router->handle($_SERVER['REQUEST_URI']);
