<?php

require_once dirname(__FILE__).'/../lib/appintroGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/appintroGeneratorHelper.class.php';

/**
 * appintro actions.
 *
 * @package    mgto
 * @subpackage appintro
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class appintroActions extends autoAppintroActions
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

    $appid = $request->getParameter('appid');

    if(!$this->getUser()->hasCredential('new'))
      {
        $this->redirect('@homepage');
      }
    $this->form = $this->configuration->getForm();
    $this->app_intro = $this->form->getObject();
    $this->form->setDefaults(array('last_modifier'=>' ','app_id'=>$appid));
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
    $this->redirect('@app_intro');
//	else
//    $this->redirect('@mgto_banner/listHistory?id='.$parentid);



  }




}
