<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cgriffin
 * Date: 5/21/13
 * Time: 3:46 PM
 * To change this template use File | Settings | File Templates.
 *
 * This file represents code refactoring tutorial number 7
 * https://www.youtube.com/watch?v=owss5KuioFs&list=PLGLfVvz_LVvSuz6NuHAzpM52qKM6bPlCV
 *
 *
 */
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

    class Employee
    {
        protected $salary = 0.0;
        public $payType;

        /*
         * @params $salaryAndOrPay is an array that contains an integer and a payType
         * object.
         * @params or $salaryAndOrPay can be just an integer
         *
         */
        public function __construct($salaryAndOrPay)
        {
            //This will be a pay type object.  The default would be a NoBonus object
            $this->payType = new NoBonus();

            //php's dynamic typing is crazy!  Notice the $salaryAndOrPay variable becomes an integer
            //just by not having an index
            $this->salary=$salaryAndOrPay;
            return false;
        }

        public function setBonusOption($newPayTypeObject)
        {
            $this->payType= new $newPayTypeObject;
        }

        public function getPay()
        {
            return $this->payType->getPay($this->salary);
        }
    }


    //I'm thinking that $salary needs to have an index like $salary['salary'] type
    class Salesman extends Employee
    {
        public function __construct($salary,$payType="")
        {
            parent::__construct($salary);
            //clever way to get past php's lack of overloaded constructor
            if(!empty($payType))
                $this->setBonusOption($payType);
        }
    }

//I'm thinking that $salary needs to have an index like $salary['salary'] type
    class Secretary extends Employee
    {
        public function __construct($salary,$payType="")
        {
            parent::__construct($salary);
            //clever way to get past php's lack of overloaded constructor
            if(!empty($payType))
                $this->setBonusOption($payType);
        }
    }