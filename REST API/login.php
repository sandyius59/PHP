<?php

/**********************************************************************************
 * @Execution : default node : cmd> login.php
 *
 *
 * @Purpose : perform operations by using core php (RestApi) and create login page
 *
 * @description : to create a user login form using Rest api
 *
 * @overview : login form
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 04/sep/2019
 *
 *************************************************************************************/

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once '/var/www/your_domain/restapi/config/database.php';
include_once '/var/www/your_domain/restapi/objects/user.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare user object
$user = new User($db);
$userRef = new User($db);
// get email of user to be edited
$data = json_decode(file_get_contents("php://input"));
$userRef->email = $data->email;
$user->password = $data->password;
// read the details of product to be edited
$userRef->readBy("email");

if ($userRef->firstname != null && $userRef->email != null) {
    if ($userRef->password == md5($user->password)) {
        // set response code - 200 OK
        http_response_code(200);

        // make it json format
        echo json_encode(array('status' => '200', "message" => "login successful"));
    } else {
        // set response code - 503 service unavailable
        http_response_code(503);
        // make it json format
        echo json_encode(array('error' => '400', "message" => "password mismatch"));
    }
} else {
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user  does not exist
    echo json_encode(array("message" => "email does not exist."));
}
