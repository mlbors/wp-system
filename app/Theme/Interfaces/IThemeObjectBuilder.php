<?php
/**
 * WP System - IThemeObjectBuilder - Interface
 *
 * @since       12.01.2018
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright
 */

use Roots\Sage\Container;

namespace App\Theme\Interfaces;

/*******************************************/
/********** ITHEME OBJECT BUILDER **********/
/*******************************************/

interface IThemeObjectBuilder
{
    public function create(IEntity $entity): IThemeObject;
}