<?php
use Cake\Routing\Router;

Router::plugin('Twilio', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
