<?php

/**
 * BannerGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    mgto
 * @subpackage model
 * @author     Jeremy and Andy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class BannerGroup extends BaseBannerGroup
{
  public function save(Doctrine_Connection $conn = null)
  {
    if (!$this->getStartDate())
      {

        $this->setStartDate(date('Y-m-d H:i:s', time()));
      }

    if (!$this->getEndDate())
      {

        $this->setEndDate("2199-12-31 23:59:59");
      }

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
