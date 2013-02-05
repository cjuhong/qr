<?php

require_once dirname(__FILE__).'/../lib/statisticalGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/statisticalGeneratorHelper.class.php';

/**
 * statistical actions.
 *
 * @package    mgto
 * @subpackage statistical
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class statisticalActions extends autoStatisticalActions
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
    $this->statistical = $this->form->getObject();
    $this->form->setDefaults(array('last_modifier'=>' '));
  }


  public function executeIndex(sfWebRequest $request)
  {
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

  public function executeListAreachart(sfWebRequest $request)
  {

    $id = $request->getParameter('id');
	   $this->id=$id;
  } 

  public function executeListLinechart(sfWebRequest $request)
  {

    $id = $request->getParameter('id');
	   $this->id=$id;
  } 
  public function executeListBarchart(sfWebRequest $request)
  {

    $id = $request->getParameter('id');
	   $this->id=$id;
  } 
  public function executeListColumchart(sfWebRequest $request)
  {

    $id = $request->getParameter('id');
	   $this->id=$id;
  } 



}
