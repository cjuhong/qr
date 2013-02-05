<?php

require_once dirname(__FILE__).'/../lib/sfGuardUserGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/sfGuardUserGeneratorHelper.class.php';

/**
 * sfGuardUser actions.
 *
 * @package    sfGuardPlugin
 * @subpackage sfGuardUser
 * @author     Fabien Potencier
 * @version    SVN: $Id: actions.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */
class sfGuardUserActions extends autoSfGuardUserActions
{
  
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
    
    //    echo $this;
    //    var_dump(get_class_methods($this));
    //    echo    $this->getUser();
    // echo $this->getUser()->getGuardUser()->getId();
    //    if($this->getUser()->isAuthenticated()){ 
      //    $this->getUser()->getsfGuardUser()->getId() 
  }

    public function executeEdit(sfWebRequest $request)
    {
      $this->sf_guard_user = $this->getRoute()->getObject();
      $this->form = $this->configuration->getForm($this->sf_guard_user);
      /* var_dump(get_class_methods($this->form)); */
      /* echo "<br>"; */
      /* echo $this->form->getName(); */
      /* print_r($this->form->getName()); */
      $currentLoginUser = $this->getUser()->getGuardUser()->getUsername();
      $formUser = $this->sf_guard_user->getUserName();
      if(!$this->getUser()->hasCredential('create_user'))
        {
          if($currentLoginUser != $formUser)
            {
              $this->redirect('@sf_guard_user');
            }
        }
    $recordid = $request->getParameter('id');
    $event = new sfEvent($this, 'user.edit', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);

    }
 public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->sf_guard_user = $this->form->getObject();
    $currentLoginUser = $this->getUser()->getGuardUser()->getUsername();
    $formUser = $this->sf_guard_user->getUserName();
    if(!$this->getUser()->hasCredential('create_user'))
      {
        if($currentLoginUser != $formUser)
          {
            $this->redirect('@sf_guard_user');
          }
      }
    $recordid = null;
    $event = new sfEvent($this, 'user.new', array('recordid' =>$recordid ));
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
    $event = new sfEvent($this, 'user.batch_delete', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);
    $records = Doctrine_Query::create()
      ->from('sfGuardUser')
      ->whereIn('id', $ids)
      ->execute();

    foreach ($records as $record)
    {
      $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $record)));

	/*************************************************************************************/
					$histroyrecords = Doctrine::getTable('UserLoginHistory')->findByUserId($record->getId());

					foreach ($histroyrecords as $histroyrecord)
					{
							  $histroyrecord->delete();
					}

	/*************************************************************************************/
      $record->delete();
    }

    $this->getUser()->setFlash('notice', 'The selected items have been deleted successfully.');
    $this->redirect('@sf_guard_user');
  }

public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    //$this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));
    $recordid = $this->getRoute()->getObject()->getId();
    $event = new sfEvent($this, 'user.delete', array('recordid' =>$recordid ));
    $event->setReturnValue($recordid);
    $this->dispatcher->notify($event);

/*************************************************************************************/
		$records = Doctrine::getTable('UserLoginHistory')->findByUserId($recordid);

		foreach ($records as $record)
		{
				  $record->delete();
		}

/*************************************************************************************/

    if ($this->getRoute()->getObject()->delete())
    {
      $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
    }

    $this->redirect('@sf_guard_user');
  }


}
