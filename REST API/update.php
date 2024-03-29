<?php
/**********************************************************************************
 * @Execution : default node : cmd> update.php
 *
 *
 * @Purpose : perform operations by using core php (RestApi)
 *
 * @description : to update data using core php
 *
 * @overview : edittion
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 04/sep/2019
 *
 *************************************************************************************/
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// include database and object files
include_once '/var/www/your_domain/restapi/config/database.php';
include_once '/var/www/your_domain/restapi/objects/user.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare user object
$user = new User($db);
$userRef = new User($db);
// get id of user to be edited
$data = json_decode(file_get_contents("php://input"));
// set ID property of user to be edited
$user->id = $data->id;
$userRef->id = $data->id;
$userRef->readBy("id");
if ($userRef->firstname != null && $userRef->email != null) {
    // set user property values
    $user->firstname = $data->firstname;
    $user->lastname = $data->lastname;
    $user->email = $data->email;
    $user->password = $data->password;
    $user->created = $userRef->created;
    $user->modified = date('Y-m-d H:i:s');
    // update the user
    if ($user->update()) {

        // set response code - 200 ok
        http_response_code(200);

        // tell the user
        echo json_encode(array("message" => "user was updated."));
    }

    // if unable to update the user, tell the user
    else {

        // set response code - 503 service unavailable
        http_response_code(503);

        // tell the user
        echo json_encode(array("message" => "Unable to update user."));
    }
} else {
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user  does not exist
    echo json_encode(array("message" => "user does not exist."));
}
