<?php

/**
 * PortfolioRolesTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PortfolioRolesTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object PortfolioRolesTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('PortfolioRoles');
    }

    public static function getAllRoles() {
        return Doctrine_Query::create()
                        ->select('pr.*')
                        ->from('PortfolioRoles pr')
                        ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                        ->execute();
    }
    public static function getRoleNameById($role_id) {
        return Doctrine_Query::create()
                ->select('pr.name')
                ->from('PortfolioRoles pr')
                ->where('pr.id =?', $role_id)
                ->setHydrationMode(Doctrine::HYDRATE_SCALAR)
                ->fetchOne();
    }
    

}
