<?php 

require_once '../../config/database.php';
require_once '../classes/Member.php';

$member = new Member('user2', 'user2@example.com', 'password', 'admine');

echo 'testing the create user';
echo 'the insert is : ' . $member->insertMember() ;

?>