<?php

/**
 * main actions.
 *
 * @package    mgto
 * @subpackage main
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    if (!$request->getParameter('sf_culture'))
      {
//        if ($this->getUser()->isFirstRequest())
//          {
            $culture = $request->getPreferredCulture(array('zh'));
            $this->getUser()->setCulture($culture);
            $this->getUser()->isFirstRequest(false);
//          }
//        else
//          {
//            $culture = $this->getUser()->getCulture();
//          }
 
        $this->redirect('localized_homepage');
      }
  }
}
