<?php

require_once dirname(__FILE__).'/../lib/commentsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/commentsGeneratorHelper.class.php';

/**
 * comments actions.
 *
 * @package    mgto
 * @subpackage comments
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class commentsActions extends autoCommentsActions
{

  public function executeNew(sfWebRequest $request)
  {
if(!$this->getUser()->hasCredential('new'))
      {
        $this->redirect('@homepage');
      }
    //$currentUser = sfContext::getInstance()->getUser()->getGuardUser()->getUsername();
    $this->form = $this->configuration->getForm();
    $this->cdt_comments = $this->form->getObject();
    $this->form->setDefaults(array('last_modifier'=>' '));
    $recordid = null;
    $event = new sfEvent($this, 'comments.new', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);
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

    parent::processForm($request, $form);
  }
  public function executeDelete(sfWebRequest $request)
  {
    $recordid = $request->getParameter('id');
    $moduleName = sfContext::getInstance()->getModuleName();
    $data = array($recordid, $moduleName.'.delete');
    $event = new sfEvent($this, 'log', array('recordid' =>$recordid ));
    $event->setReturnValue($data);
    $this->dispatcher->notify($event);    
    parent::executeDelete($request);
  }
}
