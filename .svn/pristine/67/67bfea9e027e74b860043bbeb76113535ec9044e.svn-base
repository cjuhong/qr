<?php

require_once dirname(__FILE__).'/../lib/apiGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/apiGeneratorHelper.class.php';

/**
 * api actions.
 *
 * @package    mgto
 * @subpackage api
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends autoApiActions
{


 public function executeEdit(sfWebRequest $request)
  {
    if(!$this->getUser()->hasCredential('create_user'))
      {
        $this->redirect('@homepage');
      }
    $this->api = $this->getRoute()->getObject();

    $this->form = $this->configuration->getForm($this->api);
    $recordid = $request->getParameter('id');
    $event = new sfEvent($this, 'api.edit', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);

  }
protected function executeBatchDelete(sfWebRequest $request)
  {
    $ids = $request->getParameter('ids');
    $recordid = null;
    foreach($ids as $key => $value)
      {
        $recordid .= $value." ";
      }
    $event = new sfEvent($this, 'api.batch_delete', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);

    $records = Doctrine_Query::create()
      ->from('Api')
      ->whereIn('id', $ids)
      ->execute();

    foreach ($records as $record)
    {
      $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $record)));

      $record->delete();
    }

    $this->getUser()->setFlash('notice', 'The selected items have been deleted successfully.');
    $this->redirect('@api');
  }
public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
    $recordid = $this->getRoute()->getObject()->getId();
    $event = new sfEvent($this, 'api.delete', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);

    if ($this->getRoute()->getObject()->delete())
    {
      $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
    }

    $this->redirect('@api');


  }
  
public function executeIndex(sfWebRequest $request)
  {

    if(!$this->getUser()->hasCredential('create_user'))
      {
        $this->redirect('@homepage');
      }
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    $this->setPage(1);

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
  }


  public function executeNew(sfWebRequest $request)
  {

    if(!$this->getUser()->hasCredential('create_user'))
      {
        $this->redirect('@homepage');
      }
    //$currentUser = sfContext::getInstance()->getUser()->getGuardUser()->getUsername();
    $this->form = $this->configuration->getForm();
    $this->api = $this->form->getObject();
    $timeNow = date("Y-m-d H-i-s");
    $publicKey_form = md5($timeNow."publickey".mt_rand(0,35));
    $privatekey_form = md5($timeNow."privateKey".mt_rand(0,35));
    $this->api->setPublicKey($publicKey_form);
    $this->api->setPrivateKey($privatekey_form);
    $this->form = $this->configuration->getForm($this->api);
    $recordid = null;
    $event = new sfEvent($this, 'api.new', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);
  }
  /**
public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->api = $this->form->getObject();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
    $recordid = $this->getRoute()->getObject()->getId();
    $event = new sfEvent($this, 'api.new', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);
  }
  */
 public function executeListApprove(sfWebRequest $request)
  {
    $headline = $this->getRoute()->getObject();
    $headline->approve();
    $recordid = $request->getParameter('id');
    $event = new sfEvent($this, 'api.approve', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);
    $this->getUser()->setFlash('notice', 'the record '.$recordid.' has been approved');
    $this->redirect('api');
  }
 public function executeListDisapprove(sfWebRequest $request)
  {
    $headline = $this->getRoute()->getObject();
    $headline->disapprove();
    $recordid = $request->getParameter('id');
    $event = new sfEvent($this, 'api.disapprove', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);
    $this->getUser()->setFlash('notice', 'the record '.$recordid.' has been disapproved');
    $this->redirect('api');
  }


  public function executeListPublish(sfWebRequest $request)
  {
    $headline = $this->getRoute()->getObject();
    $headline->publish();
    $recordid = $request->getParameter('id');
    $event = new sfEvent($this, 'api.publish', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);
    $this->getUser()->setFlash('notice', 'the record '.$recordid.' has been published');
    $this->redirect('api');
  } 

  public function executeListDispublish(sfWebRequest $request)
  {
    $headline = $this->getRoute()->getObject();
    $headline->dispublish();
    $recordid = $request->getParameter('id');
    $event = new sfEvent($this, 'api.dispublish', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);
    $this->getUser()->setFlash('notice', 'the record '.$recordid.' has been dispublished');
    $this->redirect('api');
  } 


  public function processForm(sfWebRequest $request, sfForm $form)
  {
    $moduleName = sfContext::getInstance()->getModuleName();
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

    $URL=sfConfig::get('app_cachepath')."APICache.php?flush=1&module=".$moduleName;
    $ch = curl_init($URL);
    curl_exec($ch);
    curl_close($ch);

    parent::processForm($request, $form);
  }


}
