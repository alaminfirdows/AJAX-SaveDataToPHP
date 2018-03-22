<?php

$CONF['host'] = "localhost";         //Enter Your Host Name
$CONF['user'] = "alamin";       //Enter Your Database Username
$CONF['pass'] = "alamin";       // Enter Your Database Password
$CONF['name'] = "ajax";          //Enter Your Database Name

$db = new mysqli($CONF['host'], $CONF['user'], $CONF['pass'], $CONF['name']);
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
$db->set_charset("utf8");

?>
