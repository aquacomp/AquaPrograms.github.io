<?php
include ('engine/api/api.class.php');
$login = "portalist";
$password = "portal0078";
$member_id = "1";
if(password_verify($password, $member_id['password'] ) ) {
    $success = true;
}
echo($success ? 'OK:'.$login.':'.$member_id['permissions'].'': 'wrong'); 

?>