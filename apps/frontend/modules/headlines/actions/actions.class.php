<?php

/**
 * headlines actions.
 *
 * @package    mgto
 * @subpackage headlines
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Jeremy and Andy $
 */
class headlinesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->mgto_headliness = Doctrine_Core::getTable('MgtoHeadlines')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->mgto_headlines = Doctrine_Core::getTable('MgtoHeadlines')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->mgto_headlines);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MgtoHeadlinesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MgtoHeadlinesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($mgto_headlines = Doctrine_Core::getTable('MgtoHeadlines')->find(array($request->getParameter('id'))), sprintf('Object mgto_headlines does not exist (%s).', $request->getParameter('id')));
    $this->form = new MgtoHeadlinesForm($mgto_headlines);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($mgto_headlines = Doctrine_Core::getTable('MgtoHeadlines')->find(array($request->getParameter('id'))), sprintf('Object mgto_headlines does not exist (%s).', $request->getParameter('id')));
    $this->form = new MgtoHeadlinesForm($mgto_headlines);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($mgto_headlines = Doctrine_Core::getTable('MgtoHeadlines')->find(array($request->getParameter('id'))), sprintf('Object mgto_headlines does not exist (%s).', $request->getParameter('id')));
    $mgto_headlines->delete();

    $this->redirect('headlines/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $mgto_headlines = $form->save();

      $this->redirect('headlines/edit?id='.$mgto_headlines->getId());
    }
  }
}
