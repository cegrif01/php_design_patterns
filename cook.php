<?php
/**
 * Created by JetBrains PhpStorm.
 * User: charles
 * Date: 5/21/13
 * Time: 11:32 PM
 * To change this template use File | Settings | File Templates.
 */

include('inc/init.inc.php');

    $customer1=new Hamburger();
    $customer1->makeSandwich().'<br />';

    $customer2=new VeggieSub();
    $customer2->makeSandwich().'<br />';