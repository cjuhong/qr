<?php

require_once dirname(__FILE__).'/../lib/voteGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/voteGeneratorHelper.class.php';

/**
 * vote actions.
 *
 * @package    mgto
 * @subpackage vote
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class voteActions extends autoVoteActions
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
    $this->vote = $this->form->getObject();
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
}
