<?php
@header('Origin: http://localhost'); 
@header('Access-Control-Allow-Origin: *');  //I have also tried the * wildcard and get the same response
@header('Access-Control-Expose-Headers:ETag, Link, X-GitHub-OTP, X-RateLimit-Limit, X-RateLimit-Remaining, X-RateLimit-Reset, X-OAuth-Scopes, X-Accepted-OAuth-Scopes, X-Poll-Interval');
@header("Access-Control-Allow-Credentials: true");
@header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
@header('Access-Control-Max-Age: 86400');
@header('Access-Control-Allow-Headers: Authorization, Content-Type, Content-Range, Content-Disposition, Content-Description');
@header('Content-type: application/json');



include_once "config/config.php";

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */
$app = new \Slim\Slim();

$app->config('debug', true);



include_once("controllers/login.php");

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, `Slim::patch`, and `Slim::delete`
 * is an anonymous function.
 */

// GET route
$app->get('/',function () {
echo "RinaDent";
});

// POST route
//$app->post(
//    '/post',
//    function () {
//        echo 'This is a POST route';
//    }
//);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();
