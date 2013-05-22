<?php
/**
 * Created by JetBrains PhpStorm.
 * User: charles
 * Date: 5/22/13
 * Time: 12:25 AM
 * To change this template use File | Settings | File Templates.
 */

    public abstract class ProductComponent
    {
        public function add($newProductComponentObject)
        {

        }

        public function remove($newProductComponentObject)
        {

        }

        public function getProductComponent($componentIndex)
        {
            return null;
        }

        public function getProductGroupName()
        {
            return null;
        }

        abstract function displayProductInfo();

    }