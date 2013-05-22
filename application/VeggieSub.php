<?php
/**
 * Created by JetBrains PhpStorm.
 * User: charles
 * Date: 5/21/13
 * Time: 11:30 PM
 * To change this template use File | Settings | File Templates.
 */

    class VeggieSub extends Sandwich
    {

        public function customerWantsMeatMeat(){return false; }

        function addMeat()
        {

        }

        function addCondiments()
        {
            print('vinegar and oil added'.'<br />');
        }
    }