<?php
/**
 * WP System - UsersRepositoryBuilder- Concrete Class
 *
 * @since       2018.01.12
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright
 */

namespace App\Theme\Builders;

use Roots\Sage\Container;

use App\Theme\Interfaces\IContextFactory as IContextFactory;
use App\Theme\Interfaces\IEntityFactory as IEntityFactory;
use App\Theme\Interfaces\IRepository as IRepository;
use App\Theme\Interfaces\IThemeObjectBuilder as IThemeObjectBuilder;
use App\Theme\Abstracts\AbstractRepositoryBuilder as AbstractRepositoryBuilder;
use App\Theme\Factories\UserEntityFactory as UserEntityFactory;
use App\Theme\Factories\WPDBUsersContextFactory as WPDBUsersContextFactory;
use App\Theme\Builders\UserThemeObjectBuilder as UserThemeObjectBuilder;
use App\Theme\Repositories\UsersRepository as UsersRepository;
use App\Theme\ThemeObjects\UserThemeObject as UserThemeObject;

/**********************************************/
/********** USERS REPOSITORY BUILDER **********/
/**********************************************/

class UsersRepositoryBuilder extends AbstractRepositoryBuilder
{
    /*******************************/
    /********** CONSTRUCT **********/
    /*******************************/

    public function __construct()
    {
        parent::__construct();
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /****************************************/
    /********** SET ENTITY FACTORY **********/
    /****************************************/

    protected function _setEntityFactory()
    {
        $this->_entityFactory = $this->_container->make(UserEntityFactory::class);
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /*****************************************/
    /********** SET CONTEXT FACTORY **********/
    /*****************************************/

    protected function _setContextFactory()
    {
        $this->_contextFactory = $this->_container->makeWith(WPDBUsersContextFactory::class, ['entityFactory' => $this->_entityFactory]);
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /**********************************************/
    /********** SET THEME OBJECT BUILDER **********/
    /**********************************************/

    protected function _setThemeObjectBuilder()
    {
        $this->_themeObjectBuilder = $this->_container->make(UserThemeObjectBuilder::class);
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /***************************************/
    /********** CREATE REPOSITORY **********/
    /***************************************/

    /**
     * @param String $requestService object that manages requests (static class)
     * @return IRepository
     */

    protected function _createRepository(string $requestService): IRepository
    {
        return $this->_container->makeWith(UsersRepository::class, ['contextFactory' => $this->_contextFactory, 'themeObjectBuilder' => $this->_themeObjectBuilder, 'requestService' => $requestService]);
    }
}