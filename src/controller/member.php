<?php 

require_once '../../config/database.php';
require_once '../classes/Member.php';

$member = new Member('user2', 'user2@example.com', 'password', 'admine');

echo 'testing the validation user';
echo 'the insert is : ' . $member->validateMember() ;


echo 'testing the create user';
if ($member->validateMember()){
    $member->insertMember();
}

?>