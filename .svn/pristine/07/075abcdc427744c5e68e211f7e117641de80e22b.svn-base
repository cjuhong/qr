<?php

require_once dirname(__FILE__).'/../lib/UserLoginHistoryGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/UserLoginHistoryGeneratorHelper.class.php';

/**
 * UserLoginHistory actions.
 *
 * @package    mgto
 * @subpackage UserLoginHistory
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserLoginHistoryActions extends autoUserLoginHistoryActions
{
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
    $this->form = $this->configuration->getForm();
    $this->user_login_history = $this->form->getObject();
  }

   public function executeEdit(sfWebRequest $request)
  {
    if(!$this->getUser()->hasCredential('create_user'))
      {
        $this->redirect('@homepage');
      }
    $this->user_login_history = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->user_login_history);
  }

   
}
