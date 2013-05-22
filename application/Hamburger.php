<?php
/**
 * Created by JetBrains PhpStorm.
 * User: charles
 * Date: 5/21/13
 * Time: 11:15 PM
 * To change this template use File | Settings | File Templates.
 *
 * Code Refactoring 8
 * https://www.youtube.com/watch?v=1Q9ISmCTygU
 *
 */


    class Hamburger extends Sandwich
    {
       function addMeat()
       {
           print("Hamburger Added".'<br />');
       }

        function addCondiments()
        {
            print("Special sauce ready".'<br />');
        }
    }