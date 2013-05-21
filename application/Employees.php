<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cgriffin
 * Date: 5/21/13
 * Time: 3:46 PM
 * To change this template use File | Settings | File Templates.
 */

    class Employee
    {
        protected $salary = 0.0;
        public $payType = new NoBonus();

        public function __construct($salaryAndPayObject)
        {
            //since php doesn't have overloaded constructors
            if(is_array($salaryAndPayObject))
            {
                $this->salary=$salaryAndPayObject['salary'];
                $this->payType=$salaryAndPayObject['payTypeObject'];
            }
            return false;
        }

        public function setBonusOption($newPayTypeObject)
        {
            $this->payType=$newPayTypeObject;
        }



    }

    interface Pay
    {
        public function getPay($salary);
    }

    class GetsBonus implements Pay
    {

        public function getPay($salary)
        {
            return $salary + ($salary * .15);
        }
    }

    class NoBonus implements Pay
    {
        public function getPay($salary)
        {
            return $salary;
        }
    }

    class Bonus20Per implements Pay
    {
        public function getPay($salary)
        {
            return $salary + ($salary * .20);
        }
    }

    public class Salesman extends Employee
    {
        public function __construct()
        {

        }

    }

    public class Secretary extends Employee
    {


    }