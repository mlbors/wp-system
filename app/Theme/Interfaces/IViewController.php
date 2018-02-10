<?php
/**
 * WP System - IViewController - Interface
 *
 * @since       12.01.2018
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright
 */

use Roots\Sage\Container; 

namespace App\Theme\Interfaces;

/**************************************/
/********** IVIEW CONTROLLER **********/
/**************************************/

interface IViewController
{
    public function display();
}