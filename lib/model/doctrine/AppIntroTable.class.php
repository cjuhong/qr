<?php

/**
 * AppIntroTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AppIntroTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object AppIntroTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AppIntro');
    }
  public function getAppId($appid)
  {
    $q = $this->createQuery('j')
      ->andwhere('j.app_id = ?',$appid);
 
    return $q->fetchOne();
  }
}
