<?php

/**
 * ArticleTranslation form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ArticleTranslationForm extends BaseArticleTranslationForm
{
  public function configure()
  {
    $this->widgetSchema['title'] = new sfWidgetFormInputText(array('label' => 'Title'), array('size' => '100'));
    $this->widgetSchema['content'] = new sfWidgetFormTextareaTinyMce1(array('label' => 'Content'), array('rows' => '25', 'cols' =>'100'));

    $this->widgetSchema['keyword'] = new sfWidgetFormInputText(array('label' => 'Keyword'), array('size' => '100'));
 


    $this->widgetSchema['approve'] = new sfWidgetFormChoice(array('choices'  => array('Yes' =>'Yes','No'=>'No'),'expanded' => true,));
    $this->widgetSchema['publish'] = new sfWidgetFormChoice(array('choices'  => array('Yes' =>'Yes','No'=>'No'),'expanded' => true,));

    $currentUser = sfContext::getInstance()->getUser()->getGuardUser();

    if($currentUser->hasGroup('content_managers'))
      {
        // 		$this->widgetSchema['approve'] = new sfWidgetFormInputText(array('label' => 'Approve'), array('size' => '100','readonly'=>'true'));
        $this->widgetSchema['approve'] = new sfWidgetFormInputText(array('label' => 'Approve'), array('size' => '10','readonly'=>'true'));
        $this->widgetSchema['publish'] = new sfWidgetFormInputText(array('label' => 'Publish'), array('size' => '10','readonly'=>'true'));

      }


  }
}
