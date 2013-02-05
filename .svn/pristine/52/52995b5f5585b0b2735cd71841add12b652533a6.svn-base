<?php

require_once dirname(__FILE__).'/../lib/staticcontentGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/staticcontentGeneratorHelper.class.php';

/**
 * staticcontent actions.
 *
 * @package    mgto
 * @subpackage staticcontent
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class staticcontentActions extends autoStaticcontentActions
{

  public function executeNew(sfWebRequest $request)
  {
if(!$this->getUser()->hasCredential('new'))
      {
        $this->redirect('@homepage');
      }
    //$currentUser = sfContext::getInstance()->getUser()->getGuardUser()->getUsername();
    $this->form = $this->configuration->getForm();
    $this->static_content = $this->form->getObject();
    $this->form->setDefaults(array('last_modifier'=>' '));
    $recordid = null;
    $event = new sfEvent($this, 'staticcontent.new', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);
  }

  public function processForm(sfWebRequest $request, sfForm $form)
  {
/***************clean cache*************************************/
    $moduleName = sfContext::getInstance()->getModuleName();
    $clearCache= sfAutoload::getInstance();
		 $clearCache->clearCache($moduleName);
/*******************************************************/
    $recordid = $request->getParameter('id');
    if($form->getObject()->isNew())
      {
        
        $data = array($recordid, $moduleName.'.new');
      }else{
      $data = array($recordid, $moduleName.'.edit');
    }
    $event = new sfEvent($this, 'log', array('recordid' =>$recordid ));
    $event->setReturnValue($data);
    $this->dispatcher->notify($event);

    parent::processForm($request, $form);
  }


public function executeDelete(sfWebRequest $request)
  {


/**********************************clear cache******************/
    $moduleName = sfContext::getInstance()->getModuleName();
    $clearCache= sfAutoload::getInstance();
		 $clearCache->clearCache($moduleName);
/**********************************clear cache******************/

    $request->checkCSRFProtection();
    $recordid = $this->getRoute()->getObject()->getId();
    $event = new sfEvent($this, $moduleName.'.delete', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);

    if ($this->getRoute()->getObject()->delete())
    {
		$recordsTranslations = Doctrine::getTable($moduleName.'Translation')->findById($recordid);
		foreach ($recordsTranslations as $recordsTranslation)
			{ 
			  $recordsTranslation->delete();
			}

      $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
    }
    $this->redirect('@'.$moduleName);
  }



  public function executeIndex(sfWebRequest $request)
  {
    $categoryArray = array();
    $categorybject = Doctrine_Core::getTable('StaticContentCategory')->findAll();
    foreach($categorybject as $ca)
      {
        $categoryArray[$ca->getId()] = $ca->getName();
      }
    $this->getResponse()->setSlot("category",$categoryArray);
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
  }

}
