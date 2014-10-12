<?php

/**
 * PortfolioCategoriesTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PortfolioCategoriesTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PortfolioCategoriesTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PortfolioCategories');
    }
    
    public static function getAllCategories() {
        return Doctrine_Query::create()
                ->select('pc.*')
                ->from('PortfolioCategories pc')
                ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
                ->execute();
    }
    
    public static function getCatNameById($cat_id) {
        return Doctrine_Query::create()
                ->select('pc.name')
                ->from('PortfolioCategories pc')
                ->where('pc.id =?', $cat_id)
                ->setHydrationMode(Doctrine::HYDRATE_SCALAR)
                ->fetchOne();
    }
}