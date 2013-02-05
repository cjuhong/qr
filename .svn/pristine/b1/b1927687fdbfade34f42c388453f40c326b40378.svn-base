<?php

require_once dirname(__FILE__).'/../lib/appGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/appGeneratorHelper.class.php';

/**
 * app actions.
 *
 * @package    mgto
 * @subpackage app
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class appActions extends autoAppActions
{
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
  public function executeNew(sfWebRequest $request)
  {
    if(!$this->getUser()->hasCredential('new'))
      {
        $this->redirect('@homepage');
      }
    $this->form = $this->configuration->getForm();
    $this->app = $this->form->getObject();
    $this->form->setDefaults(array('last_modifier'=>' '));
  }


public function executeDelete(sfWebRequest $request)
  {


/**********************************clear cache******************/
    $moduleName = sfContext::getInstance()->getModuleName();
    $clearCache= sfAutoload::getInstance();
		 $clearCache->clearCache($moduleName);
/**********************************clear cache******************/

    $request->checkCSRFProtection();
//	$parentid = $request->getParameter('parent_id');
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
//	if($parentid==0)
    $this->redirect('@'.$moduleName);
//	else
//    $this->redirect('@mgto_banner/listHistory?id='.$parentid);



  }



  public function executeListAppIntro(sfWebRequest $request)
  {
    $recordid = $request->getParameter('id');

		$relationsId = Doctrine::getTable("AppIntro")->getAppId($recordid);
		if($relationsId!=''&&$relationsId!='null'&&$relationsId->getId())
    $this->redirect('@app_intro_edit?id='.$relationsId->getId().'&&appid='.$recordid);
		else
    $this->redirect('@app_intro_new?appid='.$recordid);

  } 



}
