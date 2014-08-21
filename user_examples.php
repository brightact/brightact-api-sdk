<?php
include_once('library/UserManagement.php');

/* User methods examples */

/* User instance */

$inst = new UserManagement();

/* Create user (working only with Admin rights) */

/* Uncomment, to use this method */
/*$inner_data = array(
    'username' => 'test2@mail.com', //Username (required)
    'password' => '123456', //password (required)
    'first_name' => 'Test', //First name (required)
    'last_name' => 'Test2', //Last name (required)
    'company' => 'Company', //Company name (required)
    'sp_num' => 10, //Allowed packs number (optional, default: 0)
);
$out = $inst->createUser($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Update user */

/* Uncomment, to use this method */
/*$user_id = 13; //UserID (required)
$inner_data = array(
    'last_name' => 'Test35355', //Last name (required)
    'company' => 'Company3333555', //Company name (required)
    'sp_num' => 15, //Allowed packs number (optional, default: 0)
);
$out = $inst->updateUser($user_id, $inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Delete user */

/* Uncomment, to use this method */
/*$user_id = 13; //UserID (required)
$out = $inst->deleteUser($user_id);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Reset user password */

/* Uncomment, to use this method */
/*$user_id = 13; //UserID (required)
$out = $inst->resetUserPassword($user_id);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get user info */

/* Uncomment, to use this method */
/*$user_id = 13; //User ID (required)
$out = $inst->getUserInfo($user_id);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get users list (working only with Admin rights) */

/* Uncomment, to use this method */
/*$org_id = 3; //OrganizationID (required)
$out = $inst->getUsersList($org_id);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Create organization (working only with Admin rights) */

/* Uncomment, to use this method */
/*$inner_data = array(
    'name' => 'TestOrg2' //Organization name (required)
);
$out = $inst->createOrg($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Update organization (working only with Admin rights) */

/* Uncomment, to use this method */
/*$org_id = 5; //Organization ID (required)
$inner_data = array(
    'name' => 'TestOrg3', //Organization Name (optional)
);
$out = $inst->updateOrg($org_id, $inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Delete Organization (working only with Admin rights) */

/* Uncomment, to use this method */
/*$org_id = 5; //Organization ID (required)
$out = $inst->deleteOrg($org_id);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get organization info (working only with Admin rights) */

/* Uncomment, to use this method */
/*$org_id = 3; //Organization ID (required)
$out = $inst->getOrgInfo($org_id);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get organizations list (working only with Admin rights) */

/* Uncomment, to use this method */
$out = $inst->getOrgList();
echo '<pre>';
print_r($out);
echo '</pre>';

