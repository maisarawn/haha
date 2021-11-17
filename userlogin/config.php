<?php

$db_user = "epiz_30203541";
$db_pass = 'aJdx3KXC7Rhfq';
$db_name = "epiz_30203541_maisarawn";

$db = new PDO('mysql:host=sql101.epizy.com;dbname='.$db_name. ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);