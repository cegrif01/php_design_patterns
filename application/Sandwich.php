<?php
/**
 * Created by JetBrains PhpStorm.
 * User: charles
 * Date: 5/21/13
 * Time: 11:17 PM
 * To change this template use File | Settings | File Templates.
 *
 * https://www.youtube.com/watch?v=1Q9ISmCTygU
 */

    include('Hamburger.php');
    include('VeggieSub.php');

    abstract class Sandwich
    {
        final function makeSandwich()
        {
            print('<br />'."-------NEW ORDER------".'<br />');
            $this->cutBun();

            if($this->customerWantsMeat())
            {
                $this->addMeat();
            }

            $this->addVegetables();

            if($this->customerWantsCondiments())
            {
                $this->addCondiments();
            }
            $this->wrapSandwich();
        }

        abstract function addMeat();
        abstract function addCondiments();

        public function cutBun()
        {
            print("The Bun was Cut".'<br />');
        }

        public function addVegetables()
        {
            print("Lettuce, Onions, and Tomatoes".'<br />');
        }

        public function wrapSandwich()
        {
            print("The Sandwich was Wrapped".'<br />');
        }

        public function customerWantsMeat(){return true;}
        public function customerWantsCondiments(){return true;}

    }