<?php

/**
 * StaticContentCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    mgto
 * @subpackage model
 * @author     Jeremy and Andy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class StaticContentCategory extends BaseStaticContentCategory
{
  public function save(Doctrine_Connection $conn = null)
  {

    if ($this->getLastModifier())
      {

        $currentUser = sfContext::getInstance()->getUser()->getGuardUser()->getUsername();
        $this->setLastModifier($currentUser);
      }else{

      $this->setLastModifier(' ');
    }
    $this->setUpdatedAt(date('Y-m-d H:i:s', time()));

    return parent::save($conn);

  }
}
