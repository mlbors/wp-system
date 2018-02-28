<?php
/**
 * WP System - AbstractRedirectionState - Abstract Class
 *
 * @since       12.01.2018
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright
 */

namespace App\Theme\Abstracts;

use Roots\Sage\Container;

use App\Theme\Interfaces\IEntity as IEntity;
use App\Theme\Interfaces\IState as IState;

/************************************************/
/********** ABSTRACT REDIRECTION STATE **********/
/************************************************/

abstract class AbstractRedirectionState implements IState
{
    /*******************************/
    /********** ATTRIBUTS **********/
    /*******************************/

    /**
     * @var IEntity $_entity entity object
     */

    protected $_entity;

    /*********************************************************************************/
    /*********************************************************************************/

    /*******************************/
    /********** CONSTRUCT **********/
    /*******************************/

    /**
     * @param IEntity $entity entity object
     */

    public function __construct(IEntity $entity)
    {
        $this->_setValues($entity);
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /********************************/
    /********** SET VALUES **********/
    /********************************/

    /**
     * @param IEntity $entity entity object
     */

    protected function _setValues(IEntity $entity)
    {
        $this->_setEntity($entity);
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /********************************/
    /********** SET ENTITY **********/
    /********************************/

    /**
     * @param IEntity $entity entity object
     */

    protected function _setEntity(IEntity $entity)
    {
        $this->_entity = $entity;
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /********************************/
    /********** GET ENTITY **********/
    /********************************/

    public function getEntity(): IEntity
    {
        return $this->_entity;
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /******************************************/
    /********** EXECUTRE REDIRECTION **********/
    /******************************************/

    /**
     * @param String $target where to redirect
     */

    protected function _executeRedirection($target = null) 
    {
        wp_redirect(home_url($target));
        exit;
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /******************************/
    /********** REDIRECT **********/
    /******************************/

    abstract protected function _redirect();
    
    /*********************************************************************************/
    /*********************************************************************************/

    /*****************************/
    /********** EXECUTE **********/
    /*****************************/

    abstract public function execute();
}