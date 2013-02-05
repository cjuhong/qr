<?php

require_once dirname(__FILE__).'/../lib/informationGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/informationGeneratorHelper.class.php';

/**
 * information actions.
 *
 * @package    mgto
 * @subpackage information
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class informationActions extends autoInformationActions
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
    $this->information = $this->form->getObject();
    $this->form->setDefaults(array('last_modifier'=>' '));
  }
}
