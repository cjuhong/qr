<?php

/**
 * AppTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AppTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object AppTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('App');
    }
}