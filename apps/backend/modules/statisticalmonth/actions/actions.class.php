<?php

require_once dirname(__FILE__).'/../lib/statisticalmonthGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/statisticalmonthGeneratorHelper.class.php';

/**
 * statisticalmonth actions.
 *
 * @package    mgto
 * @subpackage statisticalmonth
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class statisticalmonthActions extends autoStatisticalmonthActions
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
    $this->statistical_month = $this->form->getObject();
    $this->form->setDefaults(array('last_modifier'=>' '));
  }
}
