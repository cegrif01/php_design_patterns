<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cgriffin
 * Date: 5/21/13
 * Time: 3:43 PM
 * To change this template use File | Settings | File Templates.
 */

//this file gets loaded by index.php so I should include all the class files here

$ini_path=dirname(__FILE__);
//$app_path = "/opt/lampp/htdocs/php_design_patterns/application/Employee.php";
$app_path=$ini_path. "/../application/Employee.php";
include($app_path);

