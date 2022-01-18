<?php


require 'lib/redbean/rb-mysql.php';
use RedBeanPHP\Facade as R;
R::setup("mysql: host=localhost;dbname=secondtask", "root", "");



$db=R::dispense('user');
$db->name= $_POST['name'];
$db->email= $_POST['email'];
$db->status= $_POST['status'];
R::store($db);

echo "INSERTED SUCCESSFULLY";
echo "Go back to main page ";?>
<a href="/">Back</a>