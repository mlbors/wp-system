<?php
/**
 * WP System - WPDBPostsContextFactory - Concrete Class
 *
 * @since       2018.01.12
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright
 */

namespace App\Theme\Factories;

use Roots\Sage\Container;

use App\Theme\Interfaces\IContext as IContext;
use App\Theme\Interfaces\IEntityFactory as IEntityFactory;
use App\Theme\Abstracts\AbstractContextFactory as AbstractContextFactory;
use App\Theme\Contexts\WPDBPostsContext as WPDBPostsContext;

/************************************************/
/********** WPDB POSTS CONTEXT FACTORY **********/
/************************************************/

class WPDBPostsContextFactory extends AbstractContextFactory
{
    /*******************************/
    /********** CONSTRUCT **********/
    /*******************************/

    /**
     * @param IEntityFactory $entityFactory object that creates entities
     */

    public function __construct(IEntityFactory $entityFactory)
    {
        parent::__construct($entityFactory);
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /************************************/
    /********** CREATE CONTEXT **********/
    /************************************/

    /**
     * @param String $requestService object that manages requests (static class)
     * @return IContext
     */

    protected function _createContext(string $requestService): IContext
    {
        return $this->_container->makeWith(WPDBPostsContext::class, ['entityFactory' => $this->_entityFactory, 'requestService' => $requestService]);
    }
}