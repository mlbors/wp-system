<?php
/**
 * WP System - IInitializer - Interface
 *
 * @since       12.01.2018
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright
 */

use Roots\Sage\Container;

namespace App\Theme\Interfaces;

/****************************/
/********** ITHEME **********/
/****************************/

interface IInitializer
{
    public function init();
    public function getSettings(): array;
}