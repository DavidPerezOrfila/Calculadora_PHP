<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/10/16
 * Time: 21:11
 */

namespace controllers;


class IndexController
{
    public function indexAction()
    {
        require 'application/views/index.phtml';
    }
}