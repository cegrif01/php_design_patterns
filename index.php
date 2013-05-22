<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cgriffin
 * Date: 5/21/13
 * Time: 3:42 PM
 * To change this template use File | Settings | File Templates.
 */

    include('inc/init.inc.php');

        $salesman = new Salesman(15000.00);
        $salesman->setBonusOption(new GetsBonus());
        print("Salesman: ". $salesman->getPay());

        $trainee = new Salesman(15000,new NoBonus());
        print("Trainee: ". $trainee->getPay());